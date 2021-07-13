<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function index()
    {
		$request = Request::create('api/starships', 'GET');
        $results = json_decode(app()->handle($request)->getContent());    	
		return view('starship.index', compact('results'));
    }

    public function show($id){
    	$request = Request::create('api/starships/'.$id.'', 'GET');
    	$results = json_decode(app()->handle($request)->getContent()); 
    	return view('starship.detail', compact('results'));
    }
}
