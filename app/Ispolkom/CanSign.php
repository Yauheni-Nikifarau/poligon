<?php

namespace App\Ispolkom;

trait CanSign {
    private string $name;
    private string $signature;
    private string $rank;

    public function sign (Document $document) {
        $document->addSignature($this->rank . ' ' . $this->name . ' ' . $this->signature);
    }
}
