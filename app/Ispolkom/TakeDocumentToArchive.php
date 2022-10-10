<?php

namespace App\Ispolkom;

trait TakeDocumentToArchive {
    public function takeDocumentToArchive( Document $document ) {
        echo 'title ' . $document->getTitle() . ' checked';
        echo 'text ' . $document->getText() . ' checked';
        echo 'signatures ' . $document->getSignatures() . ' checked';
        echo 'All OK, taked!';
    }
}
