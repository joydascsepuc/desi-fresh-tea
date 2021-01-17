<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$justify = 'adminWork';
    	return view('pages.admin.index')->with('justify',$justify);
    }
}
