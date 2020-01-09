<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itsecurityModel;
use Validator;

class ITsecurityCourseConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('itSecurity');
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
         $db = new itsecurityModel();
       $valid = Validator::make($request->all(),
        [
            'application_name'=>'required',
            'father'=>'required',
            'email'=>'required'
        ]);

       if($valid->fails()){
           return redirect()->back()->withErrors($valid)->withInput();
       }

// ------- get input by form----
          $application_name = $request->input('application_name');
          $father = $request->input('father');
          $email = $request->input('email');
          $mobile = $request->input('mobile');
          $date_of_birth = $request->input('date_of_birth');
          $nationality = $request->input('nationality');
          $religion = $request->input('religion');
          $blood = $request->input('blood');
          $present_address = $request->input('present_address');
          $parmanent_address = $request->input('parmanent_address');
          $gender = $request->input('gender');
          $marital = $request->input('marital');
          $institute_name = $request->input('institute_name');
          $department = $request->input('department');
          $session_year = $request->input('session_year');

          $serialize_number = rand();


            $image = $request->file('user_image');
                if($image){
                $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
                $image->move('photo',$image_name);
                }
                else{
                $image_name = "noimage.jpg";
                }

// ------------select db table field------

             $db->student_name = $application_name;
             $db->father = $father;
             $db->email = $email;
             $db->mobile = $mobile;
             $db->date_of_birth = $date_of_birth;
             $db->nationality = $nationality;
             $db->religion = $religion;
             $db->blood_group = $blood;
             $db->present_address = $present_address;
             $db->pramanent_address = $parmanent_address;
             $db->gender = $gender;
             $db->marital = $marital;
             $db->image = $image_name;
             $db->institute_name = $institute_name;
             $db->department = $department;
             $db->year = $session_year;
             $db->serialize_number = $serialize_number;
             $db->active = 0;
             $db->disable = 0;
          
            $db->save();

            return redirect()->back()->with('ITsecurity','Your request Successful !');


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
