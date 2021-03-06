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
                            <h3 class="text-center"> Slide Information </h3>

                            <hr/>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">

                                    <div class="step-content pos-rel">
                                        <div class="step-pane active" data-step="1">
                                            <div class="col-md-8 col-md-offset-2">
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>

                                            <form action="{{route('Slider.store')}}" method="post"
                                                  enctype="multipart/form-data" class="form-horizontal"
                                                  id="sample-form">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        {{ csrf_field()}}

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="title" placeholder="Title" id="title" class="width-100"/>
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="course_id" value="">

                                                    <div class="form-group">
                                                        <label for="img">Photo</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <input type="file" name="image" id="img">


                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit"
                                                                   name="Subject_name_submit" class="btn btn-primary"/>


                                                        </div>
                                                    </div>
                                                </div>


                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>


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


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-10 col-md-8 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sx-offset-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  padding">
                            <h3>View Information</h3>
                        </div>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Delete</th>
                            </tr>

                            @foreach($slider AS $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->title}}</td>
                                    <td><img src="{{url('photo/'.$value->image)}}" class="img img-responsive"
                                             style=" height: 120px;"></td>


                                    <td>
                                        <div class="action-buttons">
                                            <a class="green" href="{{Route('Slider.edit',$value->id)}}">
                                                <span class="glyphicon glyphicon-edit fa-2x"></span>
                                            </a>

                                            <a class="red" href="{{Route('Slider.show',$value->id)}}">

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
@endsection