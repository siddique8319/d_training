@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-md-12 col-sm-12 col-xs-12 padding">
                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 AboutOurtrainingVideo padding">
                                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/HLRr5kxeBNw"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1  AboutOurtrainingQuesation">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="text-center text-primary">Questions & Answers</h3>
                                    </div>

                                    <ul>
                                        @foreach($aboutTraining AS $training)
                                            <li><p><img src="{{url('photo/',$training->icon)}}">{!!html_entity_decode($training->title)!!}
                                                </p>
                                                <span style="margin-left: 50px;">Ans:</span><span> {!!html_entity_decode($training->description)!!}</span>
                                            </li>

                                        @endforeach


                                    </ul>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 AboutOurtrainingQuesation padding-left">
                                    <div class="row">
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
                                                            <div class="carousel slide media-carousel-develop"
                                                                 id="media-develop">
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

                                                                <a data-slide="prev" href="#media-develop"
                                                                   class="left carousel-control">‹</a>
                                                                <a data-slide="next" href="#media-develop"
                                                                   class="right carousel-control">›</a>
                                                            </div>
                                                        </div>


                                                        <!-- ---------End-for big mid small  -->

                                                        <!-- ---------Start-for exta small  -->
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md hidden-sm padding">
                                                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 padding'>
                                                                <div class="carousel slide media-carouselSmall"
                                                                     id="mediaSmall">
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


                                                                    </div>
                                                                    <a data-slide="prev" href="#mediaSmall"
                                                                       class="left carousel-control">‹</a>
                                                                    <a data-slide="next" href="#mediaSmall"
                                                                       class="right carousel-control">›</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ---------End-for exta small  -->
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
    </section>


    <script type="text/javascript">

    </script>


@endsection