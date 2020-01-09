<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coursemodel;
use Validator;

class courseadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $db = new coursemodel();
          $view = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.course',['course'=>$view]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
         $db = new coursemodel();
          $view = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.courseView',['course'=>$view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
     $db = new coursemodel();
        $valid = Validator::make($request->all(),
            ['course_title'=>'required'],
            ['price'=>'required']
    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

            $image = $request->file('image');
            if($image){
            $course_banner = md5(time().rand()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$course_banner);
            }
            else{
            $course_banner = "noimage.jpg";
            } 

              $image_course = $request->file('image_course');
            if($image_course){
            $imageCourse_name = md5(time().rand()).'.'.$image_course->getClientOriginalExtension();
            $image_course->move('photo',$imageCourse_name);
            }
            else{
            $imageCourse_name = "noimage.jpg";
            }

         $course_icon = $request->file('course_icon');
            if($course_icon){
            $courseIconName = md5(time().rand()).'.'.$course_icon->getClientOriginalExtension();
            $course_icon->move('photo',$courseIconName);
            }
            else{
            $courseIconName = "noimage.jpg";
            }
        
            $course_name = $request->input('course_name');
            $course_title = $request->input('course_title');
            $price = $request->input('price');
            $total_class = $request->input('total_class');
            $class_duration = $request->input('class_duration');
            $course_description = $request->input('course_description');
            $career_support = $request->input('career_support');



            $course_module_arr = '';

            if(is_array($request->input('course_module'))){

                foreach($request->input('course_module') as $check) {

                    $course_module_arr .= $check.',';

                }
            }

           

            $software_module_arr = '';

            if(is_array($request->input('software_module'))) {

                foreach($request->input('software_module') as $check) {

                    $software_module_arr .= $check.',';

                }
            }

           // return $course_module_arr;

            $db->course_name = $course_name;
            $db->course_title = $course_title;
            $db->course_fee = $price;
            $db->total_class = $total_class;
            $db->class_duration = $class_duration;
            $db->course_description = $course_description;
            $db->career_suport = $career_support;


            $db->course_module = "$course_module_arr";
            $db->software_module = "$software_module_arr";

            $db->course_banner = $course_banner;
            $db->course_image = $imageCourse_name;
            $db->course_icon = $courseIconName;

            $db->save();
        return redirect()->back()->with('success', 'Course Uploaded !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coursemodelandController  $coursemodelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = coursemodel::find($id);

        if(file_exists('photo/'.$db->course_banner) AND !empty($db->course_banner)){
            unlink('photo/'.$db->course_banner);
        }

        if(file_exists('photo/'.$db->course_image) AND !empty($db->course_image)){
            unlink('photo/'.$db->course_image);
        }
        if(file_exists('photo/'.$db->course_icon) AND !empty($db->course_icon)){
            unlink('photo/'.$db->course_icon);
        }

       $db->delete();
       return redirect()->route('CourseAdmin.create')->with('success', 'Delete Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = coursemodel::find($id);
       return view('admin.courseEdit',['view'=>$db]);
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
       $db = coursemodel::find($id);
        
        
            $title = $request->input('title');
            $price = $request->input('price');
            $total_class = $request->input('total_class');
            
             $image = $request->file('image');
             if($image){
            $course_banner = md5(time().rand()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$course_banner);

            if(file_exists('photo/'.$db->image) AND !empty($db->image)){
                unlink('photo/'.$db->image);
            }
           }
           else{
//             $course_banner = "noimage.jpg";
               $image_name = $db->image;
           }


            $image_course = $request->file('image_course');
             if($image_course){
            $imageCourse_name = md5(time().rand()).'.'.$image_course->getClientOriginalExtension();
            $image_course->move('photo',$imageCourse_name);

            if(file_exists('photo/'.$db->course_image) AND !empty($db->course_image)){
                unlink('photo/'.$db->course_image);
            }
           }
           else{
             $imageCourse_name = "noimage.jpg";
           }


           $course_icon = $request->file('course_icon');
             if($course_icon){
            $courseIconName = md5(time().rand()).'.'.$course_icon->getClientOriginalExtension();
            $course_icon->move('photo',$courseIconName);

            if(file_exists('photo/'.$db->course_icon) AND !empty($db->course_icon)){
                unlink('photo/'.$db->course_icon);
            }
           }
           else{
             $imageCourse_name = "noimage.jpg";
           }

       
            $course_name = $request->input('course_name');
            $course_title = $request->input('course_title');
            $price = $request->input('price');
            $total_class = $request->input('total_class');
            $class_duration = $request->input('class_duration');
            $course_description = $request->input('course_description');
            $career_support = $request->input('career_support');



            $course_module_arr = '';

            if(is_array($request->input('course_module'))){

                foreach($request->input('course_module') as $check) {

                    $course_module_arr .= $check.',';

                }
            }

           

            $software_module_arr = '';

            if(is_array($request->input('software_module'))) {

                foreach($request->input('software_module') as $check) {

                    $software_module_arr .= $check.',';

                }
            }

           // return $course_module_arr;

            $db->course_name = $course_name;
            $db->course_title = $course_title;
            $db->course_fee = $price;
            $db->total_class = $total_class;
            $db->class_duration = $class_duration;
            $db->course_description = $course_description;
            $db->career_suport = $career_support;


            $db->course_module = "$course_module_arr";
            $db->software_module = "$software_module_arr";

            $db->course_banner = $course_banner;
            $db->course_image = $imageCourse_name;
            $db->course_icon = $courseIconName;
           
       

        $db->update();
        return redirect()->route('CourseAdmin.index')->with('success', 'Update Success!');
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
