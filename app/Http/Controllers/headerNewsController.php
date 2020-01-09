<?php

namespace App\Http\Controllers;

use App\headerNews;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class headerNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = headerNews::all();
        return view('admin.headerNews', compact('news'));
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
     */
    public function store(Request $request)
    {
        $db = new headerNews();

        $request->validate([
            'News' => 'required'
//            'icon' => 'required'
        ]);

        $title = $request->input('News');
        $icon = $request->input('icon');

        $db->News = $title;
        $db->icon = $icon;
        $db->save();
        return redirect()->back()->with('success', 'File uploaded successfully.');;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = headerNews::find($id);
        return view('admin.editHeaderNews', ['view' => $db]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = headerNews::find($id);
        $data->News = $request->News;
        $data->icon = $request->icon;

        $data->update();

        return redirect()->route('addnewsheader.index')->with('success', 'Heading news Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = headerNews::find($id);
        $db->delete();

        return redirect()->route('addnewsheader.index')->with('success', 'Heading news Deleted Successfully !');
    }
}
