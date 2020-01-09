<?php

namespace App\Http\Controllers;

use App\slideModelandController;
use Illuminate\Http\Request;
use App\slideModel;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $db = new slideModel();
          $view = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.slide',['slider'=>$view]);
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
        $db = new slideModel();
        $valid = Validator::make($request->all(),
            ['title'=>'required']
    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }
        
            $title = $request->input('title');

            $image = $request->file('image');
                if($image){
                $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
                $image->move('photo',$image_name);
                }
                else{
                $image_name = "noimage.jpg";
                }

            $db->title = $title;

            $db->image = $image_name;
            $db->save();
        return redirect()->back()->with('success', 'File uploaded successfully.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slideModelandController  $slideModelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
      $db = slideModel::find($id);
     if(file_exists('photo/'.$db->image) AND !empty($db->image)){
     unlink('photo/'.$db->image);
            
    }
    $db->delete();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = slideModel::find($id);
       return view('admin.sliderEdit',['view'=>$db]);
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
       $db = slideModel::find($id);

        $title = $request->input('title');
        
        $image = $request->file('image');
        
        if($image){
        $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
        $image->move('photo/',$image_name);

        if(file_exists('photo/'.$db->image) AND !empty($db->image)){
            unlink('photo/'.$db->image);
        }
       }
       else{
         $image_name = $db->image;
       }

        $db->title = $title;
        $db->image = $image_name;
        $db->update();
        return redirect()->route('Slider.index')->with('success', 'Slider Update !');
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
