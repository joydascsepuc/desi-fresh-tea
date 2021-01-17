<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vision;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $justify = 'adminWork';
        $visions = Vision::orderBy('created_at','desc')->get();
        return view('pages.admin.visions.index')->with(array(
            'justify' => $justify,
            'visions' => $visions
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
        return view('pages.admin.visions.create')->with('justify',$justify);
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
            'point' => 'required'
        ]);

        $data = new Vision();
        $data->point = $request->input('point');
        $data->save();
        return redirect('/vision')->with('success','Vision Added Successfully');
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
        $vision = Vision::find($id);
        return view('pages.admin.visions.edit')->with(array(
            'justify' => $justify,
            'vision' => $vision
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
            'point' => 'required'
        ]);

        $data = Vision::Find($id);
        $data->point = $request->input('point');
        $data->save();
        return redirect('/vision')->with('success','Vision Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vision::Find($id);
        $data->delete();
        return redirect('/vision')->with('success','Vision Deleted Successfully..');
    }
}
