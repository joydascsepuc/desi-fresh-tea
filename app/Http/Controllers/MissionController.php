<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class MissionController extends Controller
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
        $missions = Mission::orderBy('created_at','desc')->get();
        return view('pages.admin.missions.index')->with(array(
            'justify' => $justify,
            'missions' => $missions
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
        return view('pages.admin.missions.create')->with('justify',$justify);
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

        $data = new Mission();
        $data->point = $request->input('point');
        $data->save();
        return redirect('/mission')->with('success','Mission Added Successfully');
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
        $mission = Mission::find($id);
        return view('pages.admin.missions.edit')->with(array(
            'justify' => $justify,
            'mission' => $mission
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

        $data = Mission::Find($id);
        $data->point = $request->input('point');
        $data->save();
        return redirect('/mission')->with('success','Mission Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mission::Find($id);
        $data->delete();
        return redirect('/mission')->with('success','Mission Deleted Successfully..');
    }
}
