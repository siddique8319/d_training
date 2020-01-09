

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
                            <h3 class="text-center">Update Sub Category Information</h3>

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





                                            <form action="{{ route('addSubCategory.update',$subcategory->id) }}" method="post"
                                                  enctype="multipart/form-data" class="form-horizontal"
                                                  id="sample-form">
                                                {{ csrf_field()}}
                                                {{ method_field('PUT') }}
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">




                                                    <div class="form-group">
                                                        <label for="title">Select Category</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <select name="title" id="title" class="form-control show-tick" data-live-search="true" >
                                                                @foreach($categories as $category)
                                                                    <option {{$subcategory->category_id == $category->id? 'selected' : ''}}

                                                                            value="{{ $category->id }}">{{ $category->title }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>






                                                    <div class="form-group">
                                                        <label for="title">Sub Category Title</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="sub_title" placeholder="Title" id="title" value="{{ $subcategory->sub_title }}" class="width-100"/>
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="title">URL</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="sub_link" placeholder="URL" id="url" value="{{ $subcategory->sub_link }}" class="width-100"/>
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title">Position</label>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                                <span class="block input-icon input-icon-right">
                                                                    <input type="number" name="position" placeholder="Position" id="icon"
                                                                           value="{{ $subcategory->position }}"    class="width-100"/>
                                                                    <i class="ace-icon fa fa-leaf"></i>
                                                                </span>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="checkbox" id="publish" class="filled-in" name="publish" value="1"{{ $subcategory->publish == true ? 'checked' : '' }}>
                                                                 <label for="publish">Publish</label>

                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="checkbox" id="publish" class="filled-in" name="status" value="1"{{ $subcategory->status == true ? 'checked' : '' }}>
                                                                 <label for="publish">Sub_Title_status</label>

                                                            </span>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit"
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



            </div>


        </div>
    </div>

@endsection

@push('js')


@endpush