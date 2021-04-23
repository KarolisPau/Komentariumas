<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlakataiController extends Controller
{
    function show(){
        return view('plakataitop');
    }
    function showpop(){
        return view('plakataipop');
    }
    function createPoster(){
        return view('plakataiSukurti');
    }
    function imagePreview(){
        
    }
}
