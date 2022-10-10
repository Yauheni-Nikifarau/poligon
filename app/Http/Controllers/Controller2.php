<?php

namespace App\Http\Controllers;

use App\Facades\IspolkomOneWindowFacade;
use Illuminate\Http\Request;

class Controller2 extends Controller {
    public function priemVDetskiySadEndPoint( Request $request ) {
        $childName = $request->input( 'childname' );

        $oneWindowFacade = new IspolkomOneWindowFacade();
        $oneWindowFacade->handlePriemVDetskiySad( $childName );
    }

    public function OtkrytieMagazinaEndPoint( Request $request ) {
        $address = $request->input( 'address' );
        $name    = $request->input( 'name' );

        $oneWindowFacade = new IspolkomOneWindowFacade();
        $oneWindowFacade->handleOtkrytieMagazina( $address, $name );
    }

    public function ObrashenieKGlaveEndPoint( Request $request ) {
        $title = $request->input( 'title' );
        $text  = $request->input( 'text' );

        $oneWindowFacade = new IspolkomOneWindowFacade();
        $oneWindowFacade->handleObrashenieKGlave( $title, $text );
    }
}
