<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function test() {
        broadcast( new TestEvent('myMessage'))->toOthers();
        return 'tested' . Carbon::now();
    }

    public function calculate(Request $request) {

        $val1 = $request->input('val1', 0);
        $val2 = $request->input('val2', 0);
        $id = $request->input('id' );

        sleep(10);

        broadcast( new TestEvent($val1 + $val2, $id))->toOthers();

    }

    public function index() {
        return view('app');
    }
}
