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

    public function brand()
    {
        $data = array(
            'header' => 'BRAND',
            'firstLine' => 'Home',
            'secondLine' => 'CSR'
        );
        return view('pages.web.brand')->with('data',$data);
    }

    public function ceomessage()
    {
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "CEO's Message"
        );
        return view('pages.web.ceomessage')->with('data',$data);
    }

    public function corporatesr()
    {
        $data = array(
            'header' => 'Corporate Social Responsibility',
            'firstLine' => 'Home',
            'secondLine' => "CSR"
        );
        return view('pages.web.corporateSR')->with('data',$data);
    }

    public function faq()
    {
        $data = array(
            'header' => 'FAQ',
            'firstLine' => 'Home',
            'secondLine' => "FAQ"
        );
        return view('pages.web.faq')->with('data',$data);
    }
}
