<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VartotojasController extends Controller
{
    function settings(){
        return view('userSettings');
    }
}
