<?php

namespace App\Http\Controllers;

use App\Facades\IspolkomOneWindowFacade;
use App\Ispolkom\Document;
use App\Ispolkom\EducationDepartment\EducationDepartmentArchivarius;
use App\Ispolkom\EducationDepartment\HeadOfEducationDepartment;
use App\Ispolkom\Head\HeadArchivarius;
use App\Ispolkom\Head\HeadOfIspolkom;
use App\Ispolkom\TradeDepartment\HeadOfTradeDepartment;
use App\Ispolkom\TradeDepartment\TradeDepartmentArchivarius;
use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function priemVDetskiySadEndPoint( Request $request ) {
        $childName = $request->input( 'childname' );

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

    public function OtkrytieMagazinaEndPoint( Request $request ) {
        $address = $request->input( 'address' );
        $name    = $request->input( 'name' );

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

    public function ObrashenieKGlaveEndPoint( Request $request ) {
        $title = $request->input( 'title' );
        $text  = $request->input( 'text' );

        $zayavlenie = new Document( $title, $text );

        $headOfIspolkom = new HeadOfIspolkom();
        $headOfIspolkom->sign( $zayavlenie );

        $headArchivarius = new HeadArchivarius();
        $headArchivarius->takeDocumentToArchive( $zayavlenie );
    }
}
