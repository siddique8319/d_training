@extends('layouts.header')
@section('main-container')
    <section class="">
        <div class="container-fluid">
            <div class="row">
                @include('slider')

            </div>
        </div>
    </section>


    <section class="service bouncelnLeft">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-12 col-xs-12 service_heading_details wobbl wow fadeInLeft animated"
                         data-wow-delay=".5s">
                        <div class="col-md-12 col-sm-12 col-xs-12 running_course padding">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding">
                                <img src="{{url('icon/nunning.png')}}" width="100%" height="50" alt="smile">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);"
                                         onmouseout="this.setAttribute('scrollamount', 6, 0);">
                                    <img src="{{url('icon/doofazit.png')}}" width="30" height="30" alt="smile"> <span> Project Update Now !</span>
                                    &nbsp; &nbsp;

                                </marquee>
                            </div>
                        </div>
                        <!-- ---------------------speach Video gallery-->
                        <div class="col-md-12 col-sm-12 col-xs-12 welcome-speech padding">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                <div class="carousel slide media-carousel" id="media">
                                    <div class="carousel-inner">
                                        <?php $s = 1; ?>
                                        @foreach($Special AS $specialVideo)

                                            <div class="item @if($s==1){{'active'}} @endif">
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                        <iframe width="100%" height="320"
                                                                src="{{$specialVideo->url_link}}" frameborder="0"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <?php $s++; ?>
                                            </div>
                                    @endforeach
                                    <!-- <div class="item">
                                        <div class="row" >

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                               <iframe width="100%" height="320" src="https://www.youtube.com/embed/MKP6p7nXTVc" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div> -->

                                    </div>
                                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                </div>
                            </div>


                        </div>
                        <!-- -----------------end speech video-->
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 service_full-box">
                        <div class="col-md-12 col-sm-12 col-xs-12 service_headed padding">
                            <h3 class="text-center hidden-xs">Apply Form</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md hidden-sm"
                                 style="margin-top: 20px;">
                                <a href="">
                                    <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-4 col-sm-offset-4 service_box3">
                                        <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1">
                                            <img src="icon/apply-now.png" class="img-responsive service_image2">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{Route('Professional.index')}}">
                                    <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 service_box wow fadeInLeft animated"
                                         data-wow-delay=".5s">
                                        <div class="col-md-8 col-sm-8 col-xs-12 padding">
                                            <h2 style="font-size: 13px;">Professional Course</h2>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 padding-top">
                                            <img src="icon/Courses-100.png" class="img-responsive service_image">
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{Route('DiplomaCourse.index')}}">
                                    <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-3 service_box2 wow fadeInRight animated"
                                         data-wow-delay=".5s">
                                        <div class="col-md-8 col-sm-8 col-xs-12 padding">
                                            <h2 style="font-size: 13px;">Diploma Course</h2>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 padding">
                                            <img src="icon/Diploma 2-100.png" class="img-responsive service_image">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-12 col-sm-12 hidden-xs">
                                <a href="">
                                    <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-4 col-sm-offset-4 service_box3">
                                        <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1">
                                            <img src="icon/apply-now.png" class="img-responsive service_image2">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 full_service_box">
                                <a href="{{Route('FreeSeminner.index')}}">
                                    <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 service_box4 wow fadeInLeft animated"
                                         data-wow-delay=".5s">
                                        <div class="col-md-8 col-sm-8 col-xs-12 padding">
                                            <h2 style="font-size: 13px;">Free Seminar</h2>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 padding">
                                            <img src="icon/One Free-100.png" class="img-responsive service_image">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{Route('ITsecurity.index')}}">
                                    <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-2 service_box5 wow fadeInRight animated"
                                         data-wow-delay=".5s">
                                        <div class="col-md-8 col-sm-8 col-xs-12 padding">
                                            <h2 style="font-size: 13px">IT Security</h2>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 padding">
                                            <img src="icon/Security Checked-100.png"
                                                 class="img-responsive service_image">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Start-student feedback and Upcoming seminer -->



    <section class="feedback_Upcoming">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feedback-upcoming-area padding">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                        <h3> STUDENT FEEDBACK </h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feedback-student padding">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                            <div id="carousel-example-generic" class="carousel slide wow fadeInLeft animated"
                                 data-wow-delay=".5s" data-ride="carousel">
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
                                                              aria-hidden="true"></i> {!!html_entity_decode($backView->description)!!} <i
                                                                    class="fa fa-quote-right" aria-hidden="true"></i>
                                                        </p>
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
                <!-- --------UPCOMING SEMINAR start-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                        <h3>UPCOMING SEMINAR</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upcoming-seminer padding">

                        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel"
                             data-ride="carousel" style="margin-top: 10px;">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php $us = 0; ?>
                                @foreach($UpcomingSeminar AS $seminar)
                                    <li data-target="#transition-timer-carousel" data-slide-to="{{$us++}}"
                                        class="active"></li>
                                @endforeach

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php $us = 0; ?>
                                @foreach($UpcomingSeminar AS $seminar)
                                    <div class="item @if($us==1) {{'active'}} @endif">
                                        <img src="{{url('photo/'.$seminar->image)}}"
                                             style="height: 300px; width: 100%;"/>
                                        <div class="carousel-caption">
                                            <h1 class="carousel-caption-header">{{$seminar->title}}</h1>
                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                {!!html_entity_decode($seminar->description)!!}
                                            </p>
                                        </div>
                                    </div>
                                    <?php $us++; ?>
                                @endforeach


                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>

                            <!-- Timer "progress bar" -->
                            <hr class="transition-timer-carousel-progress-bar animate"/>
                        </div>

                    </div>
                    <!-- --end upcoming -->

                </div>
            </div>
        </div>
    </section>

    <!-- Emd-student feedback and Upcoming seminer-->

    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 career-development-area">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 techdegree_heading text-center wow fadeInLeft animated"
                         data-wow-delay=".5s">
                        <h1> Career Development Courses</h1>

                    </div>

                    <!-- ----------for big mid small  -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs padding">
                        <div class="carousel slide media-carousel-develop" id="media-develop">
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                            @foreach($coursInfo AS $course)
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    <a href="{{Route('TrainingHome.show',$course->id)}}">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated"
                                                             data-wow-delay=".5s">
                                                            <img src="{{url('photo/'.$course->course_image)}}"
                                                                 class="img-responsive service_imege">


                                                        </div>
                                                    </a>
                                                </div>
                                        @endforeach
                                        <!--
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <a href="traning.php">
                                    <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                        <img src="{{url('image/training_image/webdevelopment.jpg')}}" class="img-responsive service_imege">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <a href="traning.php">
                                    <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                        <img src="{{url('image/training_image/softwaredevelopment.jpg')}}" class="img-responsive service_imege">

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <a href="traning.php">
                                    <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                        <img src="{{url('image/training_image/graphicsdesign.jpg')}}" class="img-responsive service_imege">

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <a href="traning.php">
                                    <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                        <img src="{{url('image/training_image/oracle.jpg')}}" class="img-responsive service_imege">

                                    </div>
                                </a>
                               </div>
                                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <a href="traning.php">
                                        <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                            <img src="{{url('image/training_image/csharfdotnet.jpg')}}" class="img-responsive service_imege">

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <a href="traning.php">
                                        <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                            <img src="{{url('image/training_image/windowsserver.jpg')}}" class="img-responsive service_imege">

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <a href="traning.php">
                                        <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                            <img src="{{url('image/training_image/windowsserver.jpg')}}" class="img-responsive service_imege">
                                        </div>
                                    </a>
                                </div> -->
                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">

                                            @foreach($courseSecend AS $courseInfo)
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    <a href="{{Route('TrainingHome.show',$courseInfo->id)}}">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated"
                                                             data-wow-delay=".5s">
                                                            <img src="{{url('photo/'.$courseInfo->course_image)}}"
                                                                 class="img-responsive service_imege">

                                                        </div>
                                                    </a>
                                                </div>
                                        @endforeach
                                        <!--  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/csharfdotnet.jpg')}}" class="img-responsive service_imege">

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/windowsserver.jpg')}}" class="img-responsive service_imege">

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/softwaredevelopment.jpg')}}" class="img-responsive service_imege">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/websitedesign.jpg')}}" class="img-responsive service_imege">


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/webdevelopment.jpg')}}" class="img-responsive service_imege">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/softwaredevelopment.jpg')}}" class="img-responsive service_imege">

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <a href="traning.php">
                            <div class="col-md-12 col-sm-12 col-xs-12 degree_box wow fadeInDown animated" data-wow-delay=".5s">
                                <img src="{{url('image/training_image/graphicsdesign.jpg')}}" class="img-responsive service_imege">

                            </div>
                        </a>
                    </div> -->
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <a data-slide="prev" href="#media-develop" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#media-develop" class="right carousel-control">›</a>
                        </div>
                    </div>


                    <!-- ---------End-for big mid small  -->

                    <!-- ---------Start-for exta small  -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md hidden-sm padding">
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 padding'>
                            <div class="carousel slide media-carouselSmall" id="mediaSmall">
                                <div class="carousel-inner">

                                    <?php $m = 0; ?>
                                    @foreach($coursInfo AS $mobileCourse)
                                        <div class="item @if($m==1){{'active'}} @endif">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a class="thumbnail"
                                                       href="{{Route('TrainingHome.show',$mobileCourse->id)}}"><img
                                                                alt=""
                                                                src="{{url('photo/'.$mobileCourse->course_image)}}"></a>
                                                </div>


                                            </div>
                                        </div>
                                    <?php $m++; ?>
                                @endforeach

                                <!-- div class="item  active">
            <div class="row">
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/softwaredevelopment.jpg')}}"></a>
              </div>
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/graphicsdesign.jpg')}}"></a>
              </div>

            </div>
          </div> -->

                                <!-- <div class="item">
            <div class="row">
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/websitedesign.jpg')}}"></a>
              </div>
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/graphicsdesign.jpg')}}"></a>
              </div>

            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/softwaredevelopment.jpg')}}"></a>
              </div>
              <div class="col-xs-6">
                <a class="thumbnail" href="#"><img alt="" src="{{url('image/training_image/csharfdotnet.jpg')}}"></a>
              </div>

            </div>
          </div> -->
                                </div>
                                <a data-slide="prev" href="#mediaSmall" class="left carousel-control">‹</a>
                                <a data-slide="next" href="#mediaSmall" class="right carousel-control">›</a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- ---------End-for exta small  -->


            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 certification-program-area padding">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fadeInLeft animated">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                            <h3>CERTIFICATIONS PROGRAM</h3>
                            <!-- https://www.youtube.com/embed/MT_29MVvQTE -->
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  padding">
                            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php $c = 0; ?>
                                    @foreach($Certification AS $certificat)
                                        <div class="item @if($c==1) {{'active'}} @endif">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <img src="{{url('photo/'.$certificat->image)}}"
                                                             class="img-responsive" style="height: 100%;">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php $c++; ?>
                                @endforeach
                                <!--  <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url('photo/20160618_184821.jpg')}}" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url('photo/20160304_203005.jpg')}}" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url('photo/20160304_202830.jpg')}}" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
         <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url('photo/20160618_184821.jpg')}}" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div>
         <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="{{url('photo/20160618_185015.jpg')}}" class="img-responsive">
                        </div>

                    </div>
                </div>
            </div> -->


                                    <!-- End Item -->
                                </div>
                                <a data-slide="prev" href="#custom_carousel" class="izq carousel-control">‹</a>
                                <a data-slide="next" href="#custom_carousel" class="der carousel-control">›</a>
                                <!-- End Carousel Inner -->
                                <div class="controls draggable ui-widget-content col-lg-12 col-md-12 col-xs-12">
                                    <ul class="nav ui-widget-header">
                                        <?php $f = 0; ?>
                                        @foreach($Certification AS $valueInfo)

                                            <li data-target="#custom_carousel" data-slide-to="{{$f++}}" class="active">
                                                <a href="#"><img
                                                            src="{{url('photo/'.$valueInfo->image)}}"><small> {{$valueInfo->title}}</small></a>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fadeInRight animated" data-wow-delay=".5s">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                            <h3>OURS PROGRAM</h3>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                            <div id="custom_carousel_our" class="carousel slide" data-ride="carousel"
                                 data-interval="4000">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php $p = 0; ?>
                                    @foreach($OurProgramInfo AS $program)
                                        <div class="item @if($p==1){{'active'}} @endif">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="top col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                        <iframe width="100%" height="310" src="{{$program->url_link}}"
                                                                frameborder="0" allowfullscreen></iframe>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php $p++; ?>
                                @endforeach




                                <!-- End Item -->
                                </div>
                                <a data-slide="prev" href="#custom_carousel_our" class="izq carousel-control">‹</a>
                                <a data-slide="next" href="#custom_carousel_our" class="der carousel-control">›</a>
                                <!-- End Carousel Inner -->
                                <div class="controls draggable ui-widget-content col-lg-12 col-md-12 col-xs-12">
                                    <ul class="nav ui-widget-header">

                                        <?php $im = 0; ?>
                                        @foreach($OurProgramInfo AS $program)
                                            <?php
                                            $ex = explode("/", $program->url_link);
                                            $id = $ex[4];
                                            ?>
                                            <li data-target="#custom_carousel_our" data-slide-to="{{$im++}}"
                                                class="active"><a href="#">
                                                    <img src="http://img.youtube.com/vi/<?php echo $id;?>/0.jpg"><small>
                                                        One</small></a></li>

                                        @endforeach


                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>


            </div>

        </div>
    </section>



    <!-- <section class="work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 padding">
                    <div class="col-md-12 col-sm-12 col-xs-12 work_heading_details text-center">
                        <h1>Successfully Completed Work</h1>

                        <div class="home-doctors  clearfix">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-delay=".5s">
                                    <div class="col-lg-12 col-md-12 col-sm-12 padding text-center doc-item">
                                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

                                            <div class="col-lg-12 col-sm-12 col-xs-12 padding image_box">
                                                <figure>
                                                    <img src="admin/" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2">
                                                </figure>
                                            </div>

                                            <a href="#">
                                                <div class="col-lg-12 col-sm-12 col-xs-12 work_zoom">
                                                    <h2>Hi .............</h2>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>





                                <div class="visible-sm clearfix margin-gap"></div>


                                <div class="button">
                                    <a href="work.php" class="btn btn-primary seemore_btn">See More</a>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <footer class="footer">
        <div class="container-fluid">

            <div class="row footer_top">

                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0  col-xs-offset-0">

                    <div class="col-md-4 col-sm-4 col-xs-12  footer_box">
                        <h4>ADDRESS</h4>

                        <ul class="list-unstyled footer_list">
                            <!--<li><b> Doofaz IT</b></li>-->
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address :HOUSE : #99,1st Floor SHER
                                SHAH SURI ROAD, TOWN HALL, MOHAMMADPUR, DHAKA-1207
                            </li>
                            <!--                        <li>Town hall, Mohammadpur, Dhaka-1207</li>-->
                            <li><i class="fa fa-phone" aria-hidden="true"></i> Call: (+88)01812-454358</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail:training@DOOFAZIT.COM</li>
                            <li><i class="fa fa-globe" aria-hidden="true"></i> Web :WWW.DOOFAZIT.COM</li>
                        </ul>
                    </div>


                    <div class="col-md-4 col-sm-4 col-xs-12 footer_box">

                        <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4>RECENT PROJECT</h4>
                        </div>


                            <div class="col-md-12 col-sm-12 col-xs-12 padding">
                                <div class="col-md-12 col-sm-12 col-xs-12 padding">
                                    <a href="https://"> <img src="" class="img-responsive project_image"></a>
                                    <P>fghgfh</P>
                                    <a href=""> See More </a>
                                </div>
                            </div>
                      -->


                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 footer_box">
                        <h4> ABOUT US</h4>
                        <P>DoofazIT Working two types activity (1) IT Training Institute (2) World class Software
                            Solutions. Our Training and Software Department managing Quality & Experience IT Skill
                            Person there have World class IT Solutions Capacity. In a software Department currently we
                            are working Software solutions building your Requirement. We fill Proud for our valuable
                            Client that our business main part.</P>
                    </div>

                </div>

            </div>
            @endsection

            <script type="text/javascript">
                // ---------welcome-speech-video slide-----
                $(document).ready(function () {

                    $('.btn-vertical-slider').on('click', function () {

                        if ($(this).attr('data-slide') == 'next') {
                            $('#myCarousel').carousel('next');
                        }
                        if ($(this).attr('data-slide') == 'prev') {
                            $('#myCarousel').carousel('prev')
                        }

                    });
                });

                // ------upcoming slide--
                $(document).ready(function () {

                    $("#transition-timer-carousel").on("slide.bs.carousel", function (event) {
                        //The animate class gets removed so that it jumps straight back to 0%
                        $(".transition-timer-carousel-progress-bar", this)
                            .removeClass("animate").css("width", "0%");
                    }).on("slid.bs.carousel", function (event) {
                        //The slide transition finished, so re-add the animate class so that
                        //the timer bar takes time to fill up
                        $(".transition-timer-carousel-progress-bar", this)
                            .addClass("animate").css("width", "100%");
                    });

                    //Kick off the initial slide animation when the document is ready
                    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
                        .css("width", "100%");
                });


                // --------------OURS Video ---
                $(document).ready(function (ev) {
                    var items = $(".nav li").length;
                    var leftRight = 0;
                    if (items > 5) {
                        leftRight = (items - 5) * 50 * -1;
                    }
                    $('#custom_carousel').on('slide.bs.carousel', function (evt) {


                        $('#custom_carousel .controls li.active').removeClass('active');
                        $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
                    })
                    $('.nav').draggable({
                        axis: "x",
                        stop: function () {
                            var ml = parseInt($(this).css('left'));
                            if (ml > 0)
                                $(this).animate({left: "0px"});
                            if (ml < leftRight)
                                $(this).animate({left: leftRight + "px"});

                        }

                    });
                });

            </script>