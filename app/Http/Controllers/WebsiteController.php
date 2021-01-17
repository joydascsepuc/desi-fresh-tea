<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteContent;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = WebsiteContent::find($id);
        return view('pages.admin.websiteContents.editWebsiteContent')->with(array(
            'justify' => $justify,
            'data' => $data
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
            'about_company' => 'required',
            'ceo_message' => 'required',
            'csr' => 'required'
        ]);

        $data = WebsiteContent::Find($id);
        $data->about_company = $request->input('about_company');
        $data->ceo_message = $request->input('ceo_message');
        $data->corporate_social_responsibility = $request->input('csr');
        $data->save();
        return redirect('/adminHome')->with('success','Website Contents Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
