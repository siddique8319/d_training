@extends('admin.layouts.header')
@section('admin-container')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{Route('admin.index')}}">Home</a>
                    </li>

                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                               autocomplete="off"/>
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                    </form>
                </div>
            </div>


            <div class="col-md-6 col-md-offset-3">
                @if (session('success'))
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="head-title"><h3>Professional Course Application information</h3></div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Father</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Date of Birth</th>
                            <th>Nationality</th>
                            <th>Religion</th>
                            <th>Blood</th>
                            <th>Present_address</th>
                            <th>Permanent_address</th>
                            <th>Gender</th>
                            <th>Marital status</th>
                            <th>Image</th>
                            <th>Institute Name</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Company Name</th>
                            <th>Sector</th>
                            <th>End Year</th>
                            <th>Course Name</th>
                            <th>Class Days</th>
                            <th>Class Time</th>
                            <th>Know Us</th>
                            <th>Serialize Number</th>
                            <th>Action</th>

                        </tr>


                        @foreach($data AS $value)
                            @if ($value->status == 0)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->student_name}}</td>
                                    <td>{{$value->father}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->mobile}}</td>
                                    <td>{{$value->date_of_birth}}</td>
                                    <td>{{$value->nationality}}</td>
                                    <td>{{$value->religion}}</td>
                                    <td>{{$value->blood_group}}</td>
                                    <td>{{$value->present_address}}</td>
                                    <td>{{$value->pramanent_address}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->marital}}</td>
                                    <td>{{$value->image}}</td>
                                    <td>{{$value->institute_name}}</td>
                                    <td>{{$value->department}}</td>
                                    <td>{{$value->year}}</td>
                                    <td>{{$value->company_name}}</td>
                                    <td>{{$value->sector}}</td>
                                    <td>{{$value->end_year}}</td>
                                    <td>{{$value->course_name}}</td>
                                    <td>{{$value->class_days}}</td>
                                    <td>{{$value->class_time}}</td>
                                    <td>{{$value->know_us}}</td>
                                    <td>{{$value->serialize_number}}</td>


                                    <td>
{{--                                        <div class="action-buttons">--}}
{{--                                            <a class="green" href="">--}}
{{--                                                <span class="glyphicon glyphicon-edit fa-2x"></span>--}}
{{--                                            </a>--}}
{{--                                                                                    <a class="green" href="{{ route('StudentApplicationBackend.edit',$value->id)}}">--}}
{{--                                                                                        Approved--}}
{{--                                                                                    </a>--}}

                                            <form action="{{ route('StudentApplicationBackend.edit',$value->id) }}">
                                                <button class="btn btn-success"><i
                                                            class="glyphicon glyphicon-check"></i>
                                                </button>
                                            </form>

                                            <form action="{{ url('StudentApplicationBackend/'.$value->id) }}"
                                                  method="post">
                                                {{ csrf_field()}}
                                                {{ method_field('DELETE')}}
                                                <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </form>


                                    </td>
                                </tr>
                            @endif
                        @endforeach


                    </table>
                </div>
            </div>
            {{--            {{$feedback->links()}}--}}
        </div>


    </div>

@endsection
