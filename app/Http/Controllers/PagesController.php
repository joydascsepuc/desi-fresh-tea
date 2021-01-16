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

    public function about()
    {
    	$data = array(
            'header' => 'OUR STORY',
    		'firstLine' => 'Home',
    		'secondLine' => 'About Company'
    	);
    	return view('pages.web.about')->with('data',$data);
    }
}
