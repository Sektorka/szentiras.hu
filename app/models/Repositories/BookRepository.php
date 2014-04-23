<?php

namespace SzentirasHu\Models\Repositories;


use SzentirasHu\Models\Entities\Book;

interface BookRepository {

    public function getBooksByTranslation($translationId);

    /**
     * @param $bookAbbrev
     * @return Book The first book of the given abbrev.
     */
    public function getByAbbrev($bookAbbrev);

    /**
     * @param string $abbrev
     * @param int $translationId
     * @return Book
     */
    public function getByAbbrevForTranslation($abbrev, $translationId);

} 