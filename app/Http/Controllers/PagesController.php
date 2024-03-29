<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Product;
use App\Models\WebsiteContent;

class PagesController extends Controller
{
    public function index()
    {
        /*All in One in Home Page*/
        $content = WebsiteContent::find(1);
        $faqs = Faq::orderBy('created_at','desc')->get();
        $images = Gallery::orderBy('created_at','asc')->take(12)->get()->toArray();
        $points = History::orderBy('created_at','desc')->take(8)->get();
        $products = Product::orderBy('created_at','asc')->take(6)->get()->toArray();
        $missions = Mission::orderBy('created_at','desc')->take(4)->get();
        $visions = Vision::orderBy('created_at','desc')->take(4)->get();



        $justify = 'frontend';
    	$data = 'homepage';
    	return view('pages.index')->with(array(
            'data' => $data,
            'justify' =>$justify,
            /*All data from db to show on the front page-----All in One-----Joy Das*/
            'content' => $content,
            'faqs' => $faqs,
            'images' => $images,
            'points' => $points,
            'products' => $products,
            'missions' => $missions,
            'visions' => $visions
        ));
    }

    public function ourstory()
    {
        $content = WebsiteContent::find(1);
        $points = History::orderBy('created_at','desc')->get();
        $missions = Mission::orderBy('created_at','desc')->get();
        $visions = Vision::orderBy('created_at','desc')->get();
        $justify = 'frontend';
        $data = array(
            'header' => 'OUR STORY',
            'firstLine' => 'Home',
            'secondLine' => 'About Company'
        );
        return view('pages.web.ourstory')->with(array(
            'data' => $data,
            'justify' =>$justify,       
            'content' => $content,
            'points' => $points,
            'missions' => $missions,
            'visions' => $visions
        ));
    }

    public function about()
    {
        $content = WebsiteContent::find(1);
        $justify = 'frontend';
    	$data = array(
            'header' => 'OUR STORY',
    		'firstLine' => 'Home',
    		'secondLine' => 'About Company'
    	);
    	return view('pages.web.about')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'content' => $content
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
        $content = WebsiteContent::find(1);
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "CEO's Message"
        );
        return view('pages.web.ceomessage')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'content' => $content
        ));
    }

    public function corporatesr()
    {
        $content = WebsiteContent::find(1);
        $justify = 'frontend';
        $data = array(
            'header' => 'Corporate Social Responsibility',
            'firstLine' => 'Home',
            'secondLine' => "CSR"
        );
        return view('pages.web.corporateSR')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'content' => $content
        ));
    }

    public function faq()
    {
        $faqs = Faq::orderBy('created_at','desc')->get();
        $justify = 'frontend';
        $data = array(
            'header' => 'FAQ',
            'firstLine' => 'Home',
            'secondLine' => "FAQ"
        );
        return view('pages.web.faq')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'faqs' => $faqs
        ));
    }

    public function gallery()
    {
        $images = Gallery::orderBy('created_at','asc')->take(12)->get()->toArray();
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Gallery',
            'firstLine' => 'Home',
            'secondLine' => "Our Gallery"
        );
        return view('pages.web.gallery')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'images' => $images
        ));
    }

    public function history()
    {
        $points = History::orderBy('created_at','asc')->take(8)->get();
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "OUR STORY WITH TEA"
        );
        return view('pages.web.history')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'points' => $points
        ));
    }

    public function ourproduct()
    {
        $products = Product::orderBy('created_at','asc')->take(6)->get()->toArray();
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Product',
            'firstLine' => 'Home',
            'secondLine' => "Product"
        );
        return view('pages.web.products')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'products' => $products
        ));
    }

    public function mission()
    {
        $missions = Mission::orderBy('created_at','desc')->take(4)->get();
        $visions = Vision::orderBy('created_at','desc')->take(4)->get();
        $justify = 'frontend';
        $data = array(
            'header' => 'Our Story',
            'firstLine' => 'Home',
            'secondLine' => "Vision and Mission"
        );
        return view('pages.web.mission')->with(array(
            'data' => $data,
            'justify' =>$justify,
            'missions' => $missions,
            'visions' => $visions
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
