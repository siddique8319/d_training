<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentfeedback;
use Validator;

class studentFeedbackAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new studentfeedback();
        $show = $db->orderBy('id','ASC')->paginate(5);
        return view('admin.studentFeedback',['special'=>$show]);
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
     $db = new studentfeedback();
        $valid = Validator::make($request->all(),
            ['title'=>'required'],
            ['designation'=>'required']
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
            $designation = $request->input('designation');
            $description = $request->input('description');

            $db->name = $title;
            $db->designation = $designation;
            $db->description = $description;
            $db->image = $image_name;

            $db->save();
        return redirect()->back()->with('success', 'Successfully Upload !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentfeedbackandController  $studentfeedbackandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = studentfeedback::find($id);
          if(file_exists('photo/'.$db->image) AND !empty($db->image)){
         unlink('photo/'.$db->image);
         }
    
       $db->delete();
       return redirect()->route('Studentfeedback.index')->with('success', 'Delete Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = studentfeedback::find($id);
       return view('admin.studentFeedbackEdit',['view'=>$db]);
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
       $db = studentfeedback::find($id);
        
        
            $title = $request->input('title');
            $designation = $request->input('designation');
            $description = $request->input('description');
             $image = $request->file('image');
             if($image){
            $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$image_name);

            if(file_exists('photo/'.$db->image) AND !empty($db->image)){
                unlink('photo/'.$db->image);
            }
           }
           else{
//             $image_name = "noimage.jpg";
               $image_name = $db->image;
           }

            $db->name = $title;
            $db->designation = $designation;
            $db->description = $description;
            $db->image = $image_name;

        $db->update();
        return redirect()->route('Studentfeedback.index')->with('success', 'Update Success!');
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
