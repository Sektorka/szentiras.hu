<?php

namespace SzentirasHu\Controllers\Search;
use BaseController;
use Input;
use SzentirasHu\Controllers\Display\TextDisplayController;
use SzentirasHu\Lib\Reference\CanonicalReference;
use SzentirasHu\Models\Entities\Book;
use SzentirasHu\Models\Entities\Translation;
use View;

/**
 * Controller for searching. Based on REST conventions.
 *
 * @author berti
 */
class SearchController extends BaseController {

    public function getIndex() {
        return $this->getView($this->prepareForm());
    }

    public function postSearch() {
        $form = $this->prepareForm();
        $view = $this->getView($form);
        $storedBookRef = CanonicalReference::fromString($form->textToSearch)->getExistingBookRef();
        if ($storedBookRef) {
            $translatedRef = CanonicalReference::translateBookRef($storedBookRef, $form->translation->id);
            $textDisplayController = new TextDisplayController();
            $verseContainers = $textDisplayController->getTranslatedVerses(CanonicalReference::fromString($form->textToSearch), $form->translation);
            $view = $view->with('bookRef', [
                    'label' => $translatedRef->toString(),
                    'link' => "/{$form->translation->abbrev}/{$translatedRef->toString()}",
                    'verseContainers' => $verseContainers
                ]);
        }
        return $view;
    }

    /**
     * @return SearchForm
     */
    private function prepareForm() {
        $form = new SearchForm();
        $form->textToSearch = Input::get('textToSearch');
        $form->grouping = Input::get('grouping');
        $defaultTranslation = Translation::getDefaultTranslation();
        $form->book = Input::has('book') ? Input::get('book') : 0;
        $form->translation = Input::has('translation') ? Translation::find(Input::get('translation')) : $defaultTranslation;
        return $form;
    }

    private function getView($form) {
        $translations = Translation::orderBy('name')->get();
        $books = Book::where('translation_id', Translation::getDefaultTranslation()->id)->orderBy('id')->get();
        return View::make("search.search", [
            'form' => $form,
            'translations' => $translations,
            'books' => $books
        ]);
    }

}
