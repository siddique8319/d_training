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


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="widget-body">
                    <div class="widget-main">
                        <div id="fuelux-wizard-container">
                            <h3 class="text-center text-primary">Course Information </h3>

                            <hr/>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3>View Information</h3>
                                    </div>

                                </div>

                                <div class="col-md-6 col-md-offset-3">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>

                            </div>

                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <th>Sl</th>
                                    <th>Course name</th>
                                    <th>Course title</th>
                                    <th>Fee</th>
                                    <th> Course time</th>
                                    <th>Banner</th>
                                    <th>Photo</th>
                                    <th>Icon</th>
                                    <th>Delete</th>
                                </tr>

                                @foreach($course AS $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->course_name}}</td>
                                        <td>{{$value->course_title}}</td>
                                        <td>{{$value->course_fee}}</td>
                                        <td>{{$value->total_class}} days</td>
                                        <td><img src="{{url('photo/'.$value->course_banner)}}"
                                                 style="height: 50px; width:80px;"></td>
                                        <td><img src="{{url('photo/'.$value->course_image)}}" class="img img-responsive"
                                                 style=" height: 50px; width:80px;"></td>
                                        <td><img src="{{url('photo/'.$value->course_icon)}}" class="img img-responsive"
                                                 style=" height: 50px; width:80px;"></td>


                                        <td>
                                            <div class="action-buttons">
                                                <a class="green" href="{{Route('CourseAdmin.edit',$value->id)}}">
                                                    <span class="glyphicon glyphicon-edit fa-2x"></span>
                                                </a>

                                                <a class="red" href="{{Route('CourseAdmin.show',$value->id)}}">

                                                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </div>


                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
@endsection