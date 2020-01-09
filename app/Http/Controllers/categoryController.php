<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = category::all();
            return view('Menu.category',compact('data'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'position' => 'required|unique:categories',
        ]);

        $data = new category();
        $data->title = $request->title;
        $data->url = $request->url;
        $data->position = $request->position;
        $data->status = $request->status;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $data->sub_status = $request->sub_status;
        if(isset($request->sub_status))
        {
            $data->sub_status = true;
        }else {
            $data->sub_status = false;
        }


        $data->save();
//        return redirect()->back()->with('message','Menu Created Successfully !');
        return redirect()->route('addCategory.store')->with('success', 'category Menu Save Successfully !');



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

        $view  = category::find($id);
        return view('menu.editCategory',compact('view'));
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
        $data = category::find($id);

        $data->title = $request->title;
        $data->url = $request->url;
        $data->position = $request->position;
        $data->status = $request->status;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $data->sub_status = $request->sub_status;
        if(isset($request->sub_status))
        {
            $data->sub_status = true;
        }else {
            $data->sub_status = false;
        }
        $data->update();
        return redirect()->route('addCategory.index')->with('success', 'category Menu Update !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = category::find($id);
        $data->delete();
        return back();
    }
}
