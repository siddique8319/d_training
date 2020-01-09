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
                            <h3 class="text-center">Tutorial Video Update </h3>

                            <hr/>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">

                                    <div class="step-content pos-rel">
                                        <div class="step-pane active" data-step="1">


                                            <form action="{{route('AdminTutorial.update',$view->id)}}" method="post"
                                                  enctype="multipart/form-data" class="form-horizontal"
                                                  id="sample-form">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        {{ csrf_field()}}
                                                        {{ method_field('PUT') }}

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="title" value="{{$view->title}}" id="title"
                                           class="width-100"/>
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title">Course</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                   <select class="form-control" name="option_id">
                                       <option value=""> Select Course </option>
                                       @foreach($course = App\coursemodel::orderBy('id','ASC')->get() AS $value)
                                           @if($value->id == $view->course_id)
                                               <option selected=""
                                                       value="{{$value->id}}">{{$value->course_name}}</option>
                                           @else
                                               <option value="{{$value->id}}">{{$value->course_name}}</option>
                                           @endif
                                       @endforeach
                                   </select>
                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="link">Url link</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="url_link" value="{{$view->url_link}}" id="link"
                                           class="width-100"/>
                                 
                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="photo">Photo</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="file" name="image" id="photo" class="width-100"/>
                                  <img src="{{url('photo/'.$view->image)}}" style="height: 120px;">
                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Update"
                                                                   name="Subject_name_submit" class="btn btn-success"/>


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
                </div>


            </div>
        </div>
    </div>
@endsection