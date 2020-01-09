<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedbackModel;
use Validator;

class feedback_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student_feedback');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $db = new FeedbackModel();
           $select = $db::orderBy('id','DESC')->paginate(20);
        return view('admin.feedback_comment',['feedback'=>$select]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $db = new FeedbackModel();
       $valid = Validator::make($request->all(),['userName'=>'required'],['userEmail'=>'required']);
       if($valid->fails()){
         return redirect()->back()->withErrors($valid)->withInput();
        }

       $name = $request->input('userName');
       $email = $request->input('userEmail');
       $userIntersted = $request->input('userIntersted');
       $userQuestion = $request->input('userQuestion');

       $db->name=$name;
       $db->email=$email;
       $db->userInterested=$userIntersted;
       $db->question=$userQuestion;
       $db->save();

         return redirect()->back()->with('message','Message Sent Successfully !');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = FeedbackModel::find($id);
        $db->delete();
        return redirect()->back()->with('success','Delete Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
