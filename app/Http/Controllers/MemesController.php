<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Image;

class MemesController extends Controller
{


	function saveMeme(Request $request){
		
		
			
	}
	function htmlrequestas(Request $request){

		$i = 0;
		$id = Auth::id();
		$request->validate([
            'title' => 'required',
            'header' => 'required',
            'footer' => 'required',
			'memepic' => 'required'
        ]);
		$response = Http::withHeaders([
			'x-rapidapi-key' => 'da9b526b78msh3a7b1a7974131b8p1c3bcbjsn0973b256d409',
			'x-rapidapi-host' => 'ronreiter-meme-generator.p.rapidapi.com'
		])->get('https://ronreiter-meme-generator.p.rapidapi.com/meme', [
			'meme' => $request['memepic'],
			'bottom' => $request['footer'],
			'top' => $request['header'],
			'font' => 'Impact',
			'font_size' => '25'
		]);
		// $fileName = $response->file->getClientOriginalName();
        // $fileExt = $request->file->getClientOriginalExtension();
        // $fileNameOnly = explode('.', $fileName)[0];

        // if (file_exists(public_path('images/' . $fileName))) {
        //     while (file_exists(public_path('images/' . $fileName))) {
        //         $i++;
        //         $fileName = $fileNameOnly . '' . $i . '.' . $fileExt;
        //     }
        // }
		$image = $response;  // your base64 encoded
		
         $image = str_replace('data:image/jpg;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
		
         $imageName = "paveikslas".'.'.'jpg';
		 
	
         //Storage::put('images'. '/' . $imageName, base64_decode($image));
		 \File::put(public_path('images'). '/' . $imageName, base64_encode($image));
		return response($response)->header('Content-Type', 'image/jpeg');
		//return base64_encode(file_get_contents((public_path('images/' . $imageName))));
	}
	
   function list(){

    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://ronreiter-meme-generator.p.rapidapi.com/meme?meme=Condescending-Wonka&bottom=Bottom%20Text&top=Top%20Text&font=Impact&font_size=50",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: ronreiter-meme-generator.p.rapidapi.com",
		"x-rapidapi-key: da9b526b78msh3a7b1a7974131b8p1c3bcbjsn0973b256d409"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;
    return response($response)->header('Content-Type', 'image/jpeg');
}
}
function images(){

    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://ronreiter-meme-generator.p.rapidapi.com/images",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: ronreiter-meme-generator.p.rapidapi.com",
		"x-rapidapi-key: da9b526b78msh3a7b1a7974131b8p1c3bcbjsn0973b256d409"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;
	 $items = explode('"', $response);
	 $items = array_diff($items, [", ", "[", "]"]);
                    
                          
    return view('meme_api', compact('items'));
}
}
}

//return response($response)->header('Content-Type', 'application/json');
    