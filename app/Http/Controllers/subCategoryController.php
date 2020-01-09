<?php

namespace App\Http\Controllers;

use App\category;
use App\subcategory;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value= category::all();
        $data = subcategory::all();
        return view('Menu.sub_category',compact('data','value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $data = new subcategory();
        $data->category_id = $request->title;
        $data->sub_title = $request->sub_title;
        $data->sub_link = $request->sub_link;
        $data->position = $request->position;
        $data->publish = $request->publish;
        if(isset($request->publish))
        {
            $data->publish = true;
        }else {
            $data->publish = false;
        }

        $data->status = $request->status;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $data->save();
//        return back();
        return redirect()->route('addSubCategory.store')->with('success', 'Subcategory Menu Save Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = subcategory::find($id);

        $categories = category::all();

        return view('Menu.EditSub_category',compact('subcategory','categories'));
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

        $data = subcategory::find($id);
        $data->category_id = $request->title;
        $data->sub_title = $request->sub_title;
        $data->sub_link = $request->sub_link;
        $data->position = $request->position;
        $data->publish = $request->publish;
        if(isset($request->publish))
        {
            $data->publish = true;
        }else {
            $data->publish = false;
        }

        $data->status = $request->status;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }
        $data->update();

//        return redirect()->route('addSubCategory.index');

        return redirect()->route('addSubCategory.index')->with('success', 'Subcategory Menu Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = subcategory::find($id);
        $data->delete();
        return redirect()->route('addSubCategory.index')->with('success', 'Subcategory Menu Deleted Successfully !');
    }
}
