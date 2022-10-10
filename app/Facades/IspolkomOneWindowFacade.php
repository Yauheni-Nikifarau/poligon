<?php

namespace App\Facades;

use App\Ispolkom\Document;
use App\Ispolkom\EducationDepartment\EducationDepartmentArchivarius;
use App\Ispolkom\EducationDepartment\HeadOfEducationDepartment;
use App\Ispolkom\Head\HeadArchivarius;
use App\Ispolkom\Head\HeadOfIspolkom;
use App\Ispolkom\TradeDepartment\HeadOfTradeDepartment;
use App\Ispolkom\TradeDepartment\TradeDepartmentArchivarius;

class IspolkomOneWindowFacade {
    public function handlePriemVDetskiySad( $childName ) :void {
        $title      = 'Zayavlenie na priem v detskiy sad';
        $text       = 'Proshy prinat moego rebenka ' . $childName . ' v detskiy sad.';
        $zayavlenie = new Document( $title, $text );

        $headOfEducationDepartment = new HeadOfEducationDepartment();
        $headOfEducationDepartment->sign( $zayavlenie );

        $headOfIspolkom = new HeadOfIspolkom();
        $headOfIspolkom->sign( $zayavlenie );

        $educationDepartmentArchivarius = new EducationDepartmentArchivarius();
        $educationDepartmentArchivarius->takeDocumentToArchive( $zayavlenie );
    }

    public function handleOtkrytieMagazina( $address, $name ) :void {
        $title      = 'Zayavlenie na otkrytie magazina';
        $text       = 'Proshy razreshit mne otkryt magazin ' . $name . ' po adresu ' . $address . '.';
        $zayavlenie = new Document( $title, $text );

        $headOfTradeDepartment = new HeadOfTradeDepartment();
        $headOfTradeDepartment->sign( $zayavlenie );

        $headOfIspolkom = new HeadOfIspolkom();
        $headOfIspolkom->sign( $zayavlenie );

        $tradeDepartmentArchivarius = new TradeDepartmentArchivarius();
        $tradeDepartmentArchivarius->takeDocumentToArchive( $zayavlenie );
    }

    public function handleObrashenieKGlave ( $title, $text ) :void {
        $zayavlenie = new Document( $title, $text );

        $headOfIspolkom = new HeadOfIspolkom();
        $headOfIspolkom->sign( $zayavlenie );

        $headArchivarius = new HeadArchivarius();
        $headArchivarius->takeDocumentToArchive( $zayavlenie );
    }
}
