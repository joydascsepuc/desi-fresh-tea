<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$data = 'homepage';
    	return view('pages.index')->with('data',$data);
    }
}
