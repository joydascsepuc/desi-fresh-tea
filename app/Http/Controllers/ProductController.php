<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $justify = 'adminWork';
        $products = Product::orderBy('created_at','desc')->get();
        return view('pages.admin.products.index')->with(array(
            'justify' => $justify,
            'products' => $products
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $justify = 'adminWork';
        return view('pages.admin.products.create')->with('justify',$justify);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'description' => 'required'
        ]);

        $data = new Product();
        $data->product_name = $request->input('product_name');
        $data->description = $request->input('description');
        $data->save();
        return redirect('/product')->with('success','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $justify = 'adminWork';
        $product = Product::find($id);
        return view('pages.admin.products.edit')->with(array(
            'justify' => $justify,
            'product' => $product
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'description' => 'required'
        ]);

        $data = Product::Find($id);
        $data->product_name = $request->input('product_name');
        $data->description = $request->input('description');
        $data->save();
        return redirect('/product')->with('success','Product Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::Find($id);
        $data->delete();
        return redirect('/product')->with('success','Product Deleted Successfully..');
    }
}
