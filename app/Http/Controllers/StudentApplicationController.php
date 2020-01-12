<?php

namespace App\Http\Controllers;

use App\professional_studentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class StudentApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = professional_studentModel::all();

        return view('admin.newApplication', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new professional_studentModel();

        $data->student_name = $request->application_name;
        $data->father = $request->father;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->date_of_birth = $request->date_of_birth;
        $data->nationality = $request->nationality;
        $data->religion = $request->religion;
        $data->blood_group = $request->blood;

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $db = professional_studentModel::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        professional_studentModel::find($id)->update([
            'status' => 1,
        ]);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('professional_student')->where('id', $id)->delete();
        return back();
    }

}
