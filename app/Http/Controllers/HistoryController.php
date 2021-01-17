<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $justify = 'adminWork';
        $histories = History::orderBy('created_at','desc')->get();
        return view('pages.admin.history.index')->with(array(
            'justify' => $justify,
            'histories' => $histories
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
        return view('pages.admin.history.create')->with('justify',$justify);
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

        $data = new History();
        $data->point = $request->input('point');
        $data->save();
        return redirect('/historya')->with('success','History Added Successfully');
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
        $history = History::find($id);
        return view('pages.admin.history.edit')->with(array(
            'justify' => $justify,
            'history' => $history
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

        $data = History::Find($id);
        $data->point = $request->input('point');
        $data->save();
        return redirect('/historya')->with('success','History Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = History::Find($id);
        $data->delete();
        return redirect('/historya')->with('success','History Deleted Successfully..');
    }
}
