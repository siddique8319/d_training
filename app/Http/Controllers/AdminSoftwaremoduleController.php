<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SoftwaremoduleInfo;
use Validator;

class AdminSoftwaremoduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new SoftwaremoduleInfo();
        $show = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.softwareModule',['special'=>$show]);
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
     $db = new SoftwaremoduleInfo();
        $valid = Validator::make($request->all(),
            ['title'=>'required']

    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }  
            $title = $request->input('title');
           

            $db->title = $title;
       

            $db->save();
        return redirect()->back()->with('success', 'Successfully Upload !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aboutourtrainingmodelandController  $aboutourtrainingmodelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = SoftwaremoduleInfo::find($id);
    
    
       $db->delete();
       return redirect()->route('SoftwareModule.index')->with('success', 'Delete Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = SoftwaremoduleInfo::find($id);
       return view('admin.softwareModule_edit',['view'=>$db]);
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
       $db = SoftwaremoduleInfo::find($id);
        
        
            $title = $request->input('title');    

            $db->title = $title;
         
          
       

        $db->update();
        return redirect()->route('SoftwareModule.index')->with('success', 'Update Success!');
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
