<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\multiGallerymodel;
use Validator;

class AdminMultiGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new multiGallerymodel();
        $show = $db->orderBy('id','DESC')->paginate(10);
        return view('admin.multiGallery',['special'=>$show]);
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
     $db = new multiGallerymodel();
        $valid = Validator::make($request->all(),
            ['title'=>'required'],
            ['option_id'=>'required']
    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

            $image = $request->file('image');
            if($image){
            $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$image_name);
            }
            else{
            $image_name = "noimage.jpg";
            }
        
            $title = $request->input('title');
            $option_id = $request->input('option_id');

            $db->title = $title;
            $db->option_id = $option_id;
            $db->image = $image_name;

            $db->save();
        return redirect()->back()->with('success', 'Successfully Upload !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\multiGallerymodelandController  $multiGallerymodelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = multiGallerymodel::find($id);
          if(file_exists('photo/'.$db->image) AND !empty($db->image)){
         unlink('photo/'.$db->image);
         }
    
       $db->delete();
       return redirect()->route('AdminMultigallery.index')->with('success', 'Delete Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = multiGallerymodel::find($id);
       return view('admin.multiGalleryEdit',['view'=>$db]);
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
       $db = multiGallerymodel::find($id);
        
            $title = $request->input('title');
            $option_id = $request->input('option_id');

             $image = $request->file('image');
             if($image){
            $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$image_name);

            if(file_exists('photo/'.$db->image) AND !empty($db->image)){
                unlink('photo/'.$db->image);
            }
           }
           else{
               $image_name = $db->image;
           }



            $db->title = $title;
            $db->option_id = $option_id;
            $db->image = $image_name;
       

        $db->update();
        return redirect()->route('AdminMultigallery.index')->with('success', 'Update Success!');
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
