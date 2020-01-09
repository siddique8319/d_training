<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <title>Doofazit Training Center</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('fonts/fontawesome-webfont.svg')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/customis2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/media.css')}}">


    <link rel="icon" type="image/x-icon" href="{{url('icon/doofazit.png')}}">
    <meta name="google-site-verification" content="Hn3Aqdxzkm4bLGq7nERTWBcSEOOO2nNR-en_EWiPOmo"/>

</head>
<body>

<header class="header">
    <div class="container-fluid header_top">
        <!-- Header top -->
        <div class="container">
            <div class="row padding">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 hidden-xs arrow col-lg-offset-1 col-xs-offset-0 ">Latest
                    News <i class="fa fa-caret-right" aria-hidden="true"></i></div>

                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 hidden-xs">


                    @php
                        $news = DB::table('header_news') ->get();
                    @endphp

                    <marquee scrollamount="6" scrolldelay="90" direction="left" onmouseover="this.stop()"
                             onmouseout="this.start()">
                        @foreach($news as $value)
                            <a href="" style="text-decoration: none; color: white; "> <span> <i
                                            class="fa {{ $value->icon }}">
                                                 {{ ($value->News) }}</i>  </span> </a>
                            <span style="color: yellow;">|</span>
                        @endforeach
                    </marquee>


                    {{--                    <marquee>--}}

                    {{--                        <font class="mar"> Project update now ..... some time wait </font>--}}


                    {{--                    </marquee>--}}
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 "><h4><a href="" class="btn btn-primary"
                                                                             style="color: white; text-decoration:none; line-height: 10px; margin-top: -7px;">
                                Software </a></h4>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 social1 text-center"><a
                                    href="https://www.facebook.com/Doofazit/?fref=ts"><i
                                        class="fa fa-facebook fa-1x soy" aria-hidden="true"></i></a></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 social2 text-center"><i
                                    class="fa fa-twitter fa-1x soy" aria-hidden="true"></i></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 social3 text-center"><i
                                    class="fa fa-youtube-play fa-1x soy" aria-hidden="true"></i></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 social4 text-center"><i
                                    class="fa fa-linkedin fa-1x soy" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 header_mid">
                {{--                <a href="https://doofazit.com">--}}
                <a href="{{Route('Homepage.index')}}">
                    <img src="{{url('icon/logo_1.png')}}" class="img-responsive logo_image">
                </a>
                প্রফেশনাল স্কিল ডেভেলপমেন্ট ট্রেইনিং ইনস্টিটিউট
            </div>


            <div class="col-md-6 col-sm-8 col-xs-12 header_mobile col-md-offset-3 wow fadeInDown animated"
                 data-wow-delay="1s">
                <center><h4 class="hidden-xs"><i class="fa fa-phone fa-2x icon_sh" aria-hidden="true"></i> <font
                                style="margin-left: 0px;">Call us:</font> <font style="color: #990000;">+88 01812-454358
                            <br>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+88
                            01749818523</font></h4>
                    <h3 class="hidden-lg hidden-md hidden-sm text-center"><i class="fa fa-phone fa-2x icon_sh"
                                                                             aria-hidden="true"></i> <font
                                style="margin-left: 0px;">Call us:</font> <font style="color: #990000;">+
                            88 01812-454358<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+88
                            01749818523</font></h3></center>

                <div class="col-md-12"> Web Development course এর একবছর মেয়াদি Diploma Batch এ ভর্তি চলিতেছে</div>
            </div>


        </div>
    </div>

    <nav class="menu">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 hidden-xs text-center">

                    @include('menu')


                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 padding text-center hidden-lg hidden-md hidden-sm">


                    <!-- ----------------for mobile-phone or small dives -->

                    <nav class="navbar navbar-default" style="background: none; border: none; margin-top: 0px;">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button style="margin-top: 7px;" type="button" class="navbar-toggle collapsed"
                                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                        aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{Route('Homepage.index')}}">Home</a>
                                <!--                                        <a class="navbar-brand" href="index.php">Training</a>
                                                                        <a class="navbar-brand" href="index.php">Software</a>-->
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                {{--                                <ul>--}}
                                {{--                                    @php--}}
                                {{--                                        $category = DB::table('categories')--}}
                                {{--                                        ->orderBy('Position', 'asc')--}}
                                {{--                                        ->get();--}}
                                {{--                                    @endphp--}}
                                {{--                                    @foreach($category as $value)--}}

                                {{--                                        <li class="menu_active"><a href="{{ url($value->url) }}">--}}
                                {{--                                                {{ ($value->title) }} </a>--}}

                                {{--                                                                @if($value->sub_status == 1)--}}
                                {{--                                                                    @php--}}
                                {{--                                                                        $sub_categories =  DB::table('sub_categories')--}}
                                {{--                                                                                       ->where('category_id', $value->id)--}}
                                {{--                                                                                        ->get();--}}
                                {{--                                                                    @endphp--}}
                                {{--                                                                    <ul class="bb">--}}
                                {{--                                                                        @foreach($sub_categories as $sub_category)--}}
                                {{--                                                                            <li class=''><a href="{{ url($sub_category->url)  }}"><span> <i class="fa {{ $sub_category->icon }}">  {{ $sub_category->title  }} </i></span></a></li>--}}
                                {{--                                                                        @endforeach--}}
                                {{--                                                                    </ul>--}}
                                {{--                                                                @endif--}}
                                {{--                                        </li>--}}
                                {{--                                    @endforeach--}}

                                {{--                                </ul>--}}


                                <ul class="nav navbar-nav navmenu" style="background: #1060A6;">

                                    @php
                                        $category = DB::table('categories')
                                        ->orderBy('Position', 'asc')
                                        ->get();
                                    @endphp

                                    @foreach($category as $value)

                                        <li class="menu_active"><a href="{{ url($value->url) }}">
                                                {{ ($value->title) }} </a>

                                            @if($value->sub_status == 1)
                                                @php
                                                    $sub_categories =  DB::table('subcategories')
                                                                   ->where('category_id',$value->id)
                                                                    ->get();
                                                @endphp
                                                <ul class="bb">
                                                    @foreach($sub_categories as $sub_category)
                                                        <li class=''><a
                                                                    href="{{ url($sub_category->sub_link)  }}"><span>  {{ $sub_category->sub_title  }} </span></a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                        </li>
                                    @endforeach


                                    {{--                                    <li class="menu_active"><a href="{{Route('Homepage.index')}}"> Home </a></li>--}}


                                    {{--                                    <li class="dropdown">--}}
                                    {{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                                    {{--                                           aria-haspopup="true" aria-expanded="false"> About <span class="caret"></span></a>--}}
                                    {{--                                        <ul class="dropdown-menu">--}}
                                    {{--                                            <li class=''><a--}}
                                    {{--                                                        href='{{Route('HomeAbout.index')}}'><span> About Doofazit </span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='{{Route('HomeAbout.create')}}'><span> The Training Cente</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a--}}
                                    {{--                                                        href='international_domain.php'><span> The Training Cente</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a--}}
                                    {{--                                                        href='{{Route('HomeFounderCompany.aboutCompanyFounder')}}'><span>  Founder Of Doofazit</span></a>--}}
                                    {{--                                            </li>--}}

                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li><a href="{{Route('TrainingHome.index')}}">Training</a></li>--}}

                                    {{--                                    <li class="dropdown">--}}
                                    {{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                                    {{--                                           aria-haspopup="true" aria-expanded="false"> Gallery <span--}}
                                    {{--                                                    class="caret"></span></a>--}}
                                    {{--                                        <ul class="dropdown-menu">--}}
                                    {{--                                            <li class=''><a href='{{Route('StudentGallery.index')}}'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i> Student Gallery </span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='{{Route('TeacherGallery.index')}}'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i> Teacher Gallery</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='{{Route('OfficeGallery.index')}}'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i>  Office Gallery </span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='{{Route('DoofazitEvent.index')}}'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i>DoofazIT Events</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='{{Route('LabProgram.index')}}'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i>Lab & Program</span></a>--}}
                                    {{--                                            </li>--}}

                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}

                                    {{--                                    <li><a href="{{Route('Blog.index')}}">Blog</a></li>--}}

                                    {{--                                    <li class="dropdown">--}}
                                    {{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                                    {{--                                           aria-haspopup="true" aria-expanded="false">Student <span--}}
                                    {{--                                                    class="caret"></span></a>--}}
                                    {{--                                        <ul class="dropdown-menu">--}}

                                    {{--                                            <li class=''><a href='email_marketing.php'><span><i--}}
                                    {{--                                                                class="fa fa-caret-right" aria-hidden="true"></i> Student Project</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='sms_marketing.php'><span><i class="fa fa-caret-right"--}}
                                    {{--                                                                                              aria-hidden="true"></i> Student Feedback</span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='sms_marketing.php'><span><i class="fa fa-caret-right"--}}
                                    {{--                                                                                              aria-hidden="true"></i> Achievement & Awards </span></a>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class=''><a href='sms_reseller.php'><span><i class="fa fa-caret-right"--}}
                                    {{--                                                                                             aria-hidden="true"></i> Student Community</span></a>--}}
                                    {{--                                            </li>--}}

                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}

                                    {{--                                    <li class="hidden-sm"><a href="{{Route('Tutorial.index')}}">Tutorial Video</a></li>--}}
                                    {{--                                    <li class="hidden-sm"><a href="{{Route('UpdateBatch.index')}}">Upcoming Batch</a>--}}
                                    {{--                                    </li>--}}


                                    {{--                                    <li class="hidden-sm"><a href="{{Route('NoticeHome.index')}}">Notice</a></li>--}}
                                    {{--                                    <li class="hidden-sm"><a href="{{Route('ContactHome.index')}}">Contact</a></li>--}}
                                    {{--                                    <li><a href="contact.php">Contact</a></li>--}}
                                </ul>


                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>


                </div>


            </div>
        </div>
    </nav>

</header>


<!-- --------------------yield------------------ -->
@yield('main-container')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12"
         style="text-align:center;background: #1060A6; font-family: tahoma;color:white;height: 50px;line-height: 50px;font-size: 15px;font-family: tahoma;">
        Copyright &copy 2018 DoofazIT. All Right Reserved
    </div>
</div>

{{--</div>--}}
{{--</footer>--}}


</body>

<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>


</html>


<script>

    $("#next-btn").click(function () {
        alert(111);
        //$("#carousel-example-generic").carousel("next");
        alert(222);
    });


</script>




