<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ourProgrammodel;
use Validator;
class ourProgramadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $db = new ourProgrammodel();
        $show = $db->orderBy('id','ASC')->paginate(10);
        return view('admin.ourProgram',['special'=>$show]);
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
     $db = new ourProgrammodel();
        $valid = Validator::make($request->all(),
            ['title'=>'required']
    );
         if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }
        
            $title = $request->input('title');
            $url_link = $request->input('url_link');
            $db->title = $title;
            $db->url_link = $url_link;
            $db->save();
        return redirect()->back()->with('success', 'Uploaded Message !.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ourProgrammodelandController  $ourProgrammodelandController
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
     $db = ourProgrammodel::find($id);
    
    $db->delete();
       return redirect()->route('OurProgramAdmin.index')->with('success', 'Delete Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = ourProgrammodel::find($id);
       return view('admin.ourProgramEdit',['view'=>$db]);
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
       $db = ourProgrammodel::find($id);

        $title = $request->input('title');
        $url_link = $request->input('url_link');
        $db->title = $title;
        $db->url_link = $url_link;

        $db->update();
        return redirect()->route('OurProgramAdmin.index')->with('success', 'Update Success!');
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
