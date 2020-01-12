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
                            <h3 class="text-center">Heading News Information</h3>

                            <hr/>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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

                                            <form action="" method="post" enctype="multipart/form-data"
                                                  class="form-horizontal" id="sample-form">

                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                                    <div class="form-group">
                                                        <label for="title">News</label>
                                                        {{ csrf_field()}}

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="News" placeholder="News" id="News" class="width-100"/>
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title">Icon</label>
                                                        {{ csrf_field()}}

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="icon" placeholder="icon" id="icon" class="width-100"/>
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit"
                                                                   name="Subject_name_submit"
                                                                   class="btn btn-primary"/>


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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-title"><h3>View Header News information</h3></div>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>

                            @foreach($news AS $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->News}}</td>
                                    <td><i class="fa {{$value->icon}}" aria-hidden="true"></i></td>


                                    <td>
                                        <div class="action-buttons">
                                            <a class="green" href="{{ route('addnewsheader.edit',$value->id) }}">
                                                <span class="glyphicon glyphicon-edit fa-2x"></span>
                                            </a>

                                            <form action="{{ route('addnewsheader.destroy',$value->id) }}"
                                                  method="post">
                                                {{ csrf_field()}}
                                                {{ method_field('DELETE')}}
                                                <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </form>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    {{--                    {{$Blog->links()}}--}}
                </div>


            </div>


        </div>
    </div>



@endsection

