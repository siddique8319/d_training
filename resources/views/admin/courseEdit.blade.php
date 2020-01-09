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
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div>
        </div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="widget-body">
<div class="widget-main">
<div id="fuelux-wizard-container">
    <h3 class="text-center">Course Information Update </h3>

    <hr/>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">

    <div class="step-content pos-rel">
        <div class="step-pane active" data-step="1">
             

                <form action="{{route('CourseAdmin.update',$view->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                
                    <div class="col-md-12">
                          <div class="form-group">
                            <label for="title">Course name</label>
                                {{ csrf_field()}}
                                  {{ method_field('PUT')}}

                            <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="course_name" placeholder="Course name" value="{{$view->course_name}}" id="title" class="width-100" />
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title1">Course title</label>
                              

                            <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="course_title" value="{{$view->course_title}}" placeholder="Course title" id="title1" class="width-100" />
                                   
                                </span>
                            </div>
                        </div> 

                        

                        <div class="form-group">
                         <label for="price">Course Fee</label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="price" placeholder="Course Fee" id="price"  value="{{$view->course_fee}}" class="width-100"/>
                                    <i class="ace-icon fa fa-leaf"></i>
                                </span>
                            </div>
                        </div>
                         <div class="form-group">
                         <label for="d">Total class</label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="total_class" placeholder="Total class" id="d"  value="{{$view->total_class}}" class="width-100"/>
                                  
                                </span>
                            </div>
                        </div>
                         <div class="form-group">
                         <label for="dur">Class duration</label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <input type="text" name="class_duration" placeholder="Class duration" id="dur"  value="{{$view->class_duration}}" class="width-100"/>
                                  
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="des">Course Discription</label>
                              

                            <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <textarea class="form-control" name="course_description"  id="des"  value="{{$view->course_description}}" placeholder="Course Discription">{{$view->course_description}}</textarea>
                                   
                                </span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="des">Career Support</label>
                              

                            <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <span class="block input-icon input-icon-right">
                                    <textarea class="form-control" name="career_support"  id="des"  value="{{$view->career_suport}}" placeholder="Career Support Discription">{{$view->career_suport}}</textarea>
                                   
                                </span>
                            </div>
                        </div> 

                        <div class="form-group">
                         <label for="des">Course Module</label>
                            <div class="col-md-12 col-sm-12 col-xs-12  padding">
                                @foreach($course = App\CoursemoduleInfo::orderBy('id','ASC')->get() AS $course_name)
                                    <div class="col-md-4 col-sm-4 col-xs-4  padding">
                                        <span class="block input-icon input-icon-right">
                                         <input type="checkbox" name="course_module[]" value="{{$course_name->id}}"> {{$course_name->title}}
                                           
                                        </span>
                                    </div>

                                @endforeach
                                    

                            </div>
                        </div>

                       <div class="form-group">
                         <label for="des">Software Module</label>
                            <div class="col-md-12 col-sm-12 col-xs-12  padding">
                                 @foreach($soft = App\SoftwaremoduleInfo::orderBy('id','ASC')->get() AS $software)
                                    <div class="col-md-4 col-sm-4 col-xs-4  padding">
                                        <span class="block input-icon input-icon-right">
                                         <input type="checkbox" name="software_module[]" value="{{$software->id}}"> {{$software->title}}
                                           
                                        </span>
                                    </div>
                                    
                                 @endforeach
                            </div>
                        </div>


                    
                    

                        <div class="form-group">
                            <label for="img">Course banner</label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <input type="file" name="image" id="img">
                                 
                       

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Course image </label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <input type="file" name="image_course" id="image">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="image2">Course icon </label>
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                <input type="file" name="course_icon" id="image2">
                            </div>
                        </div>


                        <div class="form-group">
                             <div class="col-xs-12 col-sm-12 col-md-12 padding">
                       
                                 <input type="submit" value="Update" name="Subject_name_submit" class="btn btn-success" />
                       

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