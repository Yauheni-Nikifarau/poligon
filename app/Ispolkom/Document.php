<?php

namespace App\Ispolkom;

class Document {
    private array $signatures;
    private string $title;
    private string $text;

    public function __construct( $title, $text ) {
        $this->title = $title;
        $this->text  = $text;
    }

    public function addSignature( $byName ) {
        $this->signatures[] = $byName;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getText(): string {
        return $this->text;
    }

    public function getSignatures(): string {
        return implode( ', ', $this->signatures );
    }
}
