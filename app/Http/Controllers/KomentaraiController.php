<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentaraiController extends Controller
{
    function show(){
        return view('komentarai');
    }
}
