<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $justify = 'adminWork';
        $galleries = Gallery::orderBy('created_at','desc')->get();
        return view('pages.admin.gallery.index')->with(array(
            'justify' => $justify,
            'galleries' => $galleries
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
        return view('pages.admin.gallery.create')->with('justify',$justify);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'image_name' => 'image|max:1999|required'
        ]);

       //Handle File Upload
        if ($request->hasFile('image_name')) {
            //get file name with the extension
            $fileNameWithExt = $request->file('image_name')->getClientOriginalName();
            //Get Just File Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just Ext
            $extension = $request->file('image_name')->getClientOriginalExtension();
            //File Name to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image_name')->storeAs('public/gallery',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Gallery;
        $post->image_name = $fileNameToStore;
        $post->save();

        return redirect('/gallerya')->with('success','Image Added.');
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
        $gallery = Gallery::find($id);
        return view('pages.admin.gallery.edit')->with(array(
            'justify' => $justify,
            'gallery' => $gallery
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
        $this->validate($request,[
            'image_name' => 'image|max:1999|required'
        ]);

       //Handle File Upload
        if ($request->hasFile('image_name')) {
            //get file name with the extension
            $fileNameWithExt = $request->file('image_name')->getClientOriginalName();
            //Get Just File Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just Ext
            $extension = $request->file('image_name')->getClientOriginalExtension();
            //File Name to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image_name')->storeAs('public/gallery',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = Gallery::Find($id);
        $post->image_name = $fileNameToStore;
        $post->save();

        return redirect('/gallerya')->with('success','Image Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::Find($id);
        $data->delete();
        return redirect('/gallerya')->with('success','Gallery Image Deleted Successfully..');
    }
}
