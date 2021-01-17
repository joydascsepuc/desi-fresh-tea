<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$justify = 'adminWork';
    	return view('pages.admin.index')->with('justify',$justify);
    }
}
