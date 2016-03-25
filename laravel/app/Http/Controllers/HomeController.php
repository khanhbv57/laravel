<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function showview(){
    	return view('layout.view');
    }
    public function show(){
    	return redirect()->route("cntt");
    }
}
