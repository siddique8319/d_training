<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freeSeminarModel;
use Illuminate\Support\Facades\DB;
use Validator;

class FreeSeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('freeCourse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = freeSeminarModel::all();

        return view('admin.freeseminarBackend', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $db = new freeSeminarModel();
//       $valid = Validator::make($request->all(),
//        [
//            'application_name'=>'required',
//            'father'=>'required',
//            'email'=>'required'
//        ]);
//
//       if($valid->fails()){
//           return redirect()->back()->withErrors($valid)->withInput();
//       }

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

          $how_know_doofazit = $request->input('how_know_doofazit');

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
             $db->know_us = $how_know_doofazit;
             $db->serialize_number = $serialize_number;
             $db->active = 0;
             $db->disable = 0;
          
            $db->save();

            return redirect()->back()->with('seminer','Your request Successful !');
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
        freeSeminarModel::find($id)->update([
            'status' => 1,
        ]);
//        return back();

        return redirect()->route('FreeSeminner.create')->with('success', 'Free Seminar application Approved Successfully !');
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
        DB::table('free_course_student')->where('id', $id)->delete();
//        return back();
        return redirect()->route('FreeSeminner.create')->with('success', 'Free Seminar application Deleted Successfully !');
    }
}
