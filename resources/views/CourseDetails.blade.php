@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 courseDetails-header">
                            <!--  <h3>Our Training Blog</h3>
                             <b>DoofazIT In Media</b> -->
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 left-area padding">
                            <div class="col-lg-12 col-md-12 padding">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                                    <h3> COURSES </h3>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 course-menu padding">
                                    <ul>
                                        @foreach($course = App\coursemodel::orderBy('id','ASC')->get() AS $courseInfo)
                                            <li><a href="{{Route('TrainingHome.show',$courseInfo->id)}}"><i
                                                            class="fa fa-arrow-circle-o-right"
                                                            aria-hidden="true"></i> {{$courseInfo->course_name}} </a>
                                            </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                                    <h3> STUDENT'S WORK </h3>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student-work padding">
                                    <img src="{{url('icon/seminar/gallery-1.jpg')}}"
                                         style="height: 300px; width: 100%;">
                                </div>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                                    <h3> STUDENT FEEDBACK </h3>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feedback-student padding">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                                        <div id="carousel-example-generic"
                                             class="carousel slide wow fadeInLeft animated" data-wow-delay=".5s"
                                             data-ride="carousel">
                                            <!-- Indicators -->


                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <?php $b = 0; ?>
                                                @foreach($Feedback AS $backView)
                                                    <div class="item @if($b==1) {{'active'}} @endif">
                                                        <div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonial_heading">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <p><i class="fa fa-quote-left"
                                                                          aria-hidden="true"></i> {!!html_entity_decode($backView->description)!!}
                                                                        <i class="fa fa-quote-right"
                                                                           aria-hidden="true"></i></p>
                                                                </div>
                                                                <div class="col-md-12 text-center">
                                                                    <img src="{{url('photo/'.$backView->image)}}"
                                                                         class="img-responsive service_image">

                                                                    <h4> {{$backView->name}} </h4>
                                                                    <h5> {{$backView->designation}} </h5>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $b++; ?>

                                                @endforeach


                                            </div>

                                            <ol class="carousel-indicators">
                                                <?php $b = 0; ?>
                                                @foreach($Feedback AS $backView)
                                                    <li data-target="#carousel-example-generic" data-slide-to="{{$b++}}"
                                                        class="active"></li>
                                                @endforeach
                                            </ol>

                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>


                        <div class="col-md-9 col-sm-9 col-xs-9 right-area padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 course-title padding">
                                <h3> {{$moreInfo->course_name}}</h3>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 couresBanner padding">
                                <img src="{{url('photo/',$moreInfo->course_banner)}}" style="width:100%;height: 280px;">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 couresBanner">
                                <h3> {{$moreInfo->course_title}}</h3>
                                <p>
                                    {!!html_entity_decode($moreInfo->course_description)!!}
                                </p>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 courseTopInformation">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 couresBannerlist padding">
                                    <h3>MODULES</h3>
                                    <ul>

                                        @if ($moreInfo->course_module != "")

                                            @foreach(array_slice(explode(',', $moreInfo->course_module),0,20) as $info)

                                                @if($module = App\CoursemoduleInfo::find($info))
                                                    <li>{{$module->title}}</li>

                                                @endif
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 couresBannerlist padding">
                                    <h3>SOFTWARE TAUGHT</h3>
                                    <ul>
                                        @if ($moreInfo->software_module != "")

                                            @foreach(array_slice(explode(',', $moreInfo->software_module),0,20) as $soft)

                                                @if($software = App\SoftwaremoduleInfo::find($soft))
                                                    <li>{{$software->title}}</li>
                                                @endif
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 courseTopInformation">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 couresBannerlist padding">
                                    <h3>CAREER SUPPORT</h3>
                                    <ul>
                                        <li>{{$moreInfo->career_suport}}</li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 couresBannerlist padding">
                                    <h3>DAY AND TIMES</h3>
                                    <ul>
                                        <li><b>Class({{$moreInfo->total_class}}+) </b></li>
                                        <li><b>Duration : {{$moreInfo->class_duration}} hours</b></li>


                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 couresBannerlist padding">
                                    <h3>COURSE FEE</h3>
                                    <ul>
                                        <li>BDT = {{$moreInfo->course_fee}}/-</li>


                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>


            </div>


        </div>

    </section>


@endsection