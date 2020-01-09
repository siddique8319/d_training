@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <link rel="stylesheet"
                          href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

                    <div class="col-md-12 col-sm-12 col-xs-12 padding">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 studentGallery-header">
                                <h3>Teacher Gallery</h3>
                                <b>Trainer Of DoofazIT</b>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">

                                <div class='list-group gallery'>
                                    <div class='col-lg-6 col-md-4 col-sm-6 col-xs-12 teacher-area'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                            <h3 class="text-center text-danger"> Founder & CEO Doofazit Trining
                                                Institute </h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 teacher-info padding">
                                            <h3 style=""> Saiful islam </h3>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Writing course
                                                outlines.</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Teaching Graphic
                                                design,Web design, </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Web devlopment, SEO,
                                                CCN </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Recording new
                                                tutorials.</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Researching Creative
                                                idea. </p>
                                            <button class="btn btn-default btn-sm">See more</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding">
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/default_man_photo.jpg')}}">
                                                <img class="img-responsive teacher-image" alt=""
                                                     src="{{url('photo/default_man_photo.jpg')}}"/>
                                            </a>
                                        </div>

                                    </div>
                                    <div class='col-lg-6 col-md-4 col-sm-6 col-xs-12 teacher-area'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                            <h3 class="text-center text-danger"> Founder & Senior Programmer </h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 teacher-info padding">
                                            <h3 style=""> Nazmul huda </h3>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Writing course
                                                outlines.</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Teaching Graphic
                                                design,Web design, </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Web devlopment, SEO,
                                                CCN </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Recording new
                                                tutorials.</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Researching Creative
                                                idea. </p>
                                            <button class="btn btn-default btn-sm">See more</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding">
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/default_man_photo.jpg')}}">
                                                <img class="img-responsive teacher-image" alt=""
                                                     src="{{url('photo/default_man_photo.jpg')}}"/>
                                            </a>
                                        </div>

                                    </div>
                                    <div class='col-lg-6 col-md-4 col-sm-6 col-xs-12 teacher-area'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                            <h3 class="text-center text-danger"> Programmer Doofazit Trining
                                                Institute </h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 teacher-info padding">
                                            <h3 style=""> OLiullah </h3>

                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Teaching Web design,
                                            </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Web devlopment
                                                (PHP,laravel)</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> ........</p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Researching Project
                                                idea. </p>
                                            <button class="btn btn-default btn-sm">See more</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding">
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/default_man_photo.jpg')}}">
                                                <img class="img-responsive teacher-image" alt=""
                                                     src="{{url('photo/default_man_photo.jpg')}}"/>
                                            </a>
                                        </div>

                                    </div>
                                    <div class='col-lg-6 col-md-4 col-sm-6 col-xs-12 teacher-area'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                            <h3 class="text-center text-danger"> Designation </h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 teacher-info padding">
                                            <h3 style="">Name </h3>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i>...........................
                                            </p>
                                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i>............................
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding">
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/default_man_photo.jpg')}}">
                                                <img class="img-responsive teacher-image" alt=""
                                                     src="{{url('photo/default_man_photo.jpg')}}"/>
                                            </a>
                                        </div>

                                    </div>


                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">

                                    <div class='list-group gallery'>
                                        <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <h3 class="text-center"> CEO </h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <a class="thumbnail fancybox" rel="ligthbox"
                                                   href="{{url('img/005.jpg')}}">
                                                    <img class="img-responsive studentGallery-image" alt=""
                                                         src="{{url('img/005.jpg')}}"/>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <p>Name : Saiful islam </p>
                                                <p>Email : saiful@doofazit.com</p>
                                                <p>Mobile : 01812454358</p>
                                            </div>
                                        </div>

                                        <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <h3 class="text-center"> Programmer </h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <a class="thumbnail fancybox" rel="ligthbox"
                                                   href="{{url('img/006.jpg')}}">
                                                    <img class="img-responsive studentGallery-image" alt=""
                                                         src="{{url('img/006.jpg')}}"/>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <p>Name : Saiful islam </p>
                                                <p>Email : saiful@doofazit.com</p>
                                                <p>Mobile : 01812454358</p>
                                            </div>
                                        </div>
                                        <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <h3 class="text-center"> Web Designer </h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <a class="thumbnail fancybox" rel="ligthbox"
                                                   href="{{url('photo/default_man_photo.jpg')}}">
                                                    <img class="img-responsive studentGallery-image" alt=""
                                                         src="{{url('photo/default_man_photo.jpg')}}"/>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <p>Name : Saiful islam </p>
                                                <p>Email : saiful@doofazit.com</p>
                                                <p>Mobile : 01812454358</p>
                                            </div>
                                        </div>
                                        <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <h3 class="text-center"> Graphics Designer </h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <a class="thumbnail fancybox" rel="ligthbox"
                                                   href="{{url('img/013.jpg')}}">
                                                    <img class="img-responsive studentGallery-image" alt=""
                                                         src="{{url('img/013.jpg')}}"/>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                <p>Name : Saiful islam </p>
                                                <p>Email : saiful@doofazit.com</p>
                                                <p>Mobile : 01812454358</p>
                                            </div>
                                        </div>


                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- --------------End--model-thumbnai -->


                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function () {

            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });


    </script>


@endsection