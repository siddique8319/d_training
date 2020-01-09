<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialvideoModel;
use App\studentfeedback;
use App\upcomingseminarmodel;
use App\coursemodel;
use App\certificationmodel;
use App\ourProgrammodel;

class MainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special = specialvideoModel::orderBy('id','DESC')->limit(10)->get(); 

        $feedback = studentfeedback::orderBy('id','DESC')->limit(10)->get(); 

        $upcome = upcomingseminarmodel::orderBy('id','DESC')->limit(10)->get(); 

        $coursFirst = coursemodel::orderBy('id','ASC')->limit(8)->get(); 
        $coursSecend = coursemodel::orderBy('id','ASC')->limit(9,8)->get(); 

      $Certification = certificationmodel::orderBy('id','DESC')->limit(6)->get(); 

      $ourProgram = ourProgrammodel::orderBy('id','DESC')->limit(6)->get(); 

      return view('index',['Special'=>$special,'Feedback'=>$feedback,'UpcomingSeminar'=>$upcome,'coursInfo'=>$coursFirst,'courseSecend'=>$coursSecend,'Certification'=>$Certification,'OurProgramInfo'=>$ourProgram]);
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
