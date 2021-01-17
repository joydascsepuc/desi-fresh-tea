<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $justify = 'adminWork';
        $faqs = Faq::orderBy('created_at','desc')->get();
        return view('pages.admin.faqs.index')->with(array(
            'justify' => $justify,
            'faqs' => $faqs
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
        return view('pages.admin.faqs.create')->with('justify',$justify);
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
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = new Faq();
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->save();
        return redirect('/faq')->with('success','FAQ Added Successfully');
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
        $faq = Faq::find($id);
        return view('pages.admin.faqs.edit')->with(array(
            'justify' => $justify,
            'faq' => $faq
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
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = Faq::Find($id);
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->save();
        return redirect('/faq')->with('success','FAQ Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Faq::Find($id);
        $data->delete();
        return redirect('/faq')->with('success','FAQ Deleted Successfully..');
    }
}
