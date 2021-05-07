<?php

namespace App\Http\Controllers;

use App\Models\Komentaras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class KomentarasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $request->validate([
            'comment' => 'required'            
        ]);
        Komentaras::create([
            'plakatas_id' => session("plakato_id"),
            'user_id' => $id,
            'comment' => $request['comment']
        ]);
        
        return redirect()->back()->with('success', 'Komentaras parašytas');

        
        
        // public function store(Request $request)
    // {
    //     $i = 0;
    //     $id = Auth::id();

    //     $request->validate([
    //         'title' => 'required',
    //         'header' => 'required',
    //         'file' => 'image|mimes:jpg,jpeg,gif|max:2048',
    //         'footer' => 'required',
    //     ]);

    //     $fileName = $request->file->getClientOriginalName();
    //     $fileExt = $request->file->getClientOriginalExtension();
    //     $fileNameOnly = explode('.', $fileName)[0];

    //     if (file_exists(public_path('images/' . $fileName))) {
    //         while (file_exists(public_path('images/' . $fileName))) {
    //             $i++;
    //             $fileName = $fileNameOnly . '' . $i . '.' . $fileExt;
    //         }
    //     }
    //     $request->file->move(public_path('images'), $fileName);

    //     Plakatas::create([
    //         'title' => $request['title'],
    //         'header' => $request['header'],
    //         'footer' => $request['footer'],
    //         'img' => '/images/' . $fileName,
    //         'user_id' => $id
    //     ]);
    //     return redirect()->route('sukurtiPlakata')->with('success', 'Plakatas sėkmingai sukurtas');
    // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
