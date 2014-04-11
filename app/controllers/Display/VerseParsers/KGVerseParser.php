<?php

namespace SzentirasHu\Controllers\Display\VerseParsers;

use SzentirasHu\Lib\Reference\CanonicalReference;

class KGVerseParser extends AbstractVerseParser
{
    public static $xrefSigns = ["•","†"];

    /**
     * @param $rawVerse
     * @param $verse
     */
    protected function parseTextVerse($rawVerse, $verse)
    {
        $verse->text = $rawVerse->verse;
        foreach (self::$xrefSigns as $xrefSign) {
            $xrefSignPos = mb_strpos($rawVerse->verse, $xrefSign);
            if ($xrefSignPos) {
                $this->createXrefHolder($verse, $xrefSign);
                $verse->xrefs[$xrefSign]->position = $xrefSignPos;
                $verse->text = preg_replace("/" . $xrefSign . " ?/u", '', $verse->text);
            }
        }
    }

    /**
     * @param $book
     * @param $rawVerse
     * @param $verse
     */
    protected function parseXrefVerse($book, $rawVerse, $verse)
    {
        $xrefParts = preg_split("/([•†][^•†]+)/u", $rawVerse->verse, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE);
        // " • A † B" becomes [ [" ", 0"], ["• A ", 1], ["† B", 5] ]

        foreach ($xrefParts as $part) {
            if (preg_match("/[" . implode(self::$xrefSigns) . "].*/u", $part[0])) {
                // this is a reference part, so just use its position and content
                $xrefSign = mb_substr($part[0], 0, 1);
                $this->createXrefHolder($verse, $xrefSign);
                $refString = str_replace($xrefSign, '', $part[0]);
                $refString = str_replace("rész", $book->abbrev, $refString);
                \Log::debug("Adding refstring as xref: ", ['refstring' => $refString]);
                $verse->xrefs[$xrefSign]->text = CanonicalReference::fromString($refString)->toString();
            }
        }
    }

    /**
     * @param $verse
     * @param $xrefSign
     */
    private function createXrefHolder($verse, $xrefSign)
    {
        if (!array_key_exists($xrefSign, $verse->xrefs)) {
            $verse->xrefs[$xrefSign] = new Xref();
        }
    }

} 