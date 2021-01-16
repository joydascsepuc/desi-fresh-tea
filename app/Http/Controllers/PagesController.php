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

    public function gallery()
    {
        $data = array(
            'header' => 'Our Gallery',
            'firstLine' => 'Home',
            'secondLine' => "Our Gallery"
        );
        return view('pages.web.gallery')->with('data',$data);
    }

    public function history()
    {
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "OUR STORY WITH TEA"
        );
        return view('pages.web.history')->with('data',$data);
    }

    public function ourproduct()
    {
        $data = array(
            'header' => 'Our Product',
            'firstLine' => 'Home',
            'secondLine' => "Product"
        );
        return view('pages.web.products')->with('data',$data);
    }

    public function mission()
    {
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "Vision and Mission"
        );
        return view('pages.web.mission')->with('data',$data);
    }

    public function contact()
    {
        $data = array(
            'header' => 'Contuct Us',
            'firstLine' => 'Home',
            'secondLine' => "Contact Us"
        );
        return view('pages.web.contact')->with('data',$data);
    }
}
