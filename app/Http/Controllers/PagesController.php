<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $justify = 'frontend';
    	$data = 'homepage';
    	return view('pages.index')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function about()
    {
        $justify = 'frontend';
    	$data = array(
            'header' => 'OUR STORY',
    		'firstLine' => 'Home',
    		'secondLine' => 'About Company'
    	);
    	return view('pages.web.about')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function brand()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'BRAND',
            'firstLine' => 'Home',
            'secondLine' => 'CSR'
        );
        return view('pages.web.brand')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function ceomessage()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "CEO's Message"
        );
        return view('pages.web.ceomessage')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function corporatesr()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Corporate Social Responsibility',
            'firstLine' => 'Home',
            'secondLine' => "CSR"
        );
        return view('pages.web.corporateSR')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function faq()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'FAQ',
            'firstLine' => 'Home',
            'secondLine' => "FAQ"
        );
        return view('pages.web.faq')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function gallery()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Gallery',
            'firstLine' => 'Home',
            'secondLine' => "Our Gallery"
        );
        return view('pages.web.gallery')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function history()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "OUR STORY WITH TEA"
        );
        return view('pages.web.history')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function ourproduct()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Product',
            'firstLine' => 'Home',
            'secondLine' => "Product"
        );
        return view('pages.web.products')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function mission()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "Vision and Mission"
        );
        return view('pages.web.mission')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }

    public function contact()
    {
        $justify = 'frontend';
        $data = array(
            'header' => 'Contuct Us',
            'firstLine' => 'Home',
            'secondLine' => "Contact Us"
        );
        return view('pages.web.contact')->with(array(
            'data' => $data,
            'justify' =>$justify
        ));
    }
}
