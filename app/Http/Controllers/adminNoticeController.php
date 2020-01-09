<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticeModel;
use Validator;

class adminNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $db = new noticeModel();
        $show = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.notice',['special'=>$show]);
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
     $db = new noticeModel();
        $valid = Validator::make($request->all(),
            ['title'=>'required'],
            ['description'=>'required']
    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

            $image = $request->file('image');
            if($image){
            $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('file',$image_name);
            }
            else{
            $image_name = "noimage.jpg";
            }
        
            $title = $request->input('title');
            $description = $request->input('description');

            $db->title = $title;
            $db->description = $description;
            $db->file = $image_name;

            $db->save();
        return redirect()->back()->with('success', 'Successfully Upload !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\noticeModelandController  $noticeModelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = noticeModel::find($id);
          if(file_exists('file/'.$db->file) AND !empty($db->file)){
         unlink('file/'.$db->file);
         }
    
       $db->delete();
       return redirect()->route('AdminNotice.index')->with('success', 'Delete Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = noticeModel::find($id);
       return view('admin.noticeEdit',['view'=>$db]);
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
       $db = noticeModel::find($id);
        
        
            $title = $request->input('title');
            $description = $request->input('description');
             $image = $request->file('image');
             if($image){
            $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('file',$image_name);

            if(file_exists('file/'.$db->file) AND !empty($db->file)){
                unlink('file/'.$db->file);
            }
           }
           else{
               $image_name = $db->image;
           }

        $db->title = $title;
        $db->description = $description;
        $db->file = $image_name;
       

        $db->update();
        return redirect()->route('AdminNotice.index')->with('success', 'Update Success!');
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
