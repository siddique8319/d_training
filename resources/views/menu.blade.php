<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> doofazit.com</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,700,500);

        /* main Styles */

        .full_menubar {
            width: 100%;
            margin: auto;
            z-index: 99999;
        }

        nav {
            background: #1060A6;
            z-index: 9999999;
        }

        nav ul {
            font-size: 0;
            margin: 0;
            padding: 0;
            z-index: 9999999;
        }

        nav ul li {
            display: inline-block;
            position: relative;
            z-index: 9999999;
            background: linear-gradient(#5996DA, #eee, #5996DA);
            background-size: 1px 100%;
            background-repeat: no-repeat;
            background-position: right center;
        }

        nav ul li a {
            color: #fff;
            display: block;
            font-size: 14px;
            padding: 16px 12px;
            transition: 0.3s linear;
            text-decoration: none;
            font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            /*font-weight: 600;*/
        }

        nav ul li:hover {
            background: #2D8AF2;
            color: whitesmoke !important;
        }

        nav ul li:hover a {
            /*background: red;*/
            color: whitesmoke !important;
            text-decoration: none;
        }


        nav ul li ul {
            border-bottom: 5px solid #2ba0db;
            display: none;
            position: absolute;
            width: 230px;
            z-index: 9999999;
        }

        nav ul li ul li {
            border-top: 1px solid #aaa;
            display: block;
            text-align: left;
        }

        nav ul li ul li:first-child {
            border-top: none;
        }

        nav ul li ul li a {
            background: #1060A6;
            display: block;
            padding: 10px 14px;
            text-align: left;
        }

        nav ul li ul li a:hover {
            background: #2D8AF2;
            color: white;
        }

        nav .fa.fa-angle-down {
            margin-left: 6px;
        }
    </style>
</head>

<body>

<nav>
    <div class="full_menubar">

        <ul>
            @php
                $category = DB::table('categories')
                ->orderBy('Position', 'asc')
                ->get();
            @endphp
            @foreach($category as $value)

                <li class="menu_active"><a href="{{ url($value->url) }}">
                                                 {{ ($value->title) }} </a>




{{--                    <------------------------- Sub MEnu------------------------------>--}}



                    @if($value->sub_status == 1)
                        @php
                            $sub_categories =  DB::table('subcategories')
                                           ->where('category_id',$value->id)
                                            ->get();
                        @endphp
                        <ul class="bb">
                            @foreach($sub_categories as $sub_category)
                                <li class=''><a href="{{ url($sub_category->sub_link)  }}"><span>  {{ $sub_category->sub_title  }} </span></a></li>
                            @endforeach
                        </ul>
                    @endif



{{--                    <------------------------- Sub MEnu------------------------------>--}}


                </li>
            @endforeach

        </ul>

    </div>
</nav>

{{--<nav>--}}
{{--    <div class="full_menubar">--}}
{{--        <ul>--}}

{{--            @php--}}
{{--                $category = DB::table('categories')--}}
{{--                ->orderBy('Position', 'asc')--}}
{{--                ->get();--}}
{{--            @endphp--}}
{{--            <li class="menu_active"><a href="{{Route('Homepage.index')}}"> Home </a></li>--}}

{{--            <!--                    <li><a href="Website">Website</a></li>--}}
{{--                                <li><a href="Software$">Software</a></li>-->--}}


{{--            <li><a href="">About <i class='fa fa-angle-down'></i></a>--}}
{{--                <ul class="bb">--}}
{{--                    <li class=''><a href='{{Route('HomeAbout.index')}}'><span> About Doofazit </span></a></li>--}}
{{--                    <li class=''><a href='{{Route('HomeAbout.create')}}'><span> Our Training</span></a></li>--}}
{{--                    <li class=''><a href=''><span> The Training Center</span></a></li>--}}
{{--                    <li class=''><a--}}
{{--                                href='{{Route('HomeFounderCompany.aboutCompanyFounder')}}'><span>Founder Of Doofazit</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="{{Route('TrainingHome.index')}}">Training</a></li>--}}

{{--            <li><a href=""> Gallery <i class='fa fa-angle-down'></i></a>--}}
{{--                <ul class="bb">--}}
{{--                    <li class=''><a href='{{Route('StudentGallery.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                      aria-hidden="true"></i> Student Gallery </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href='{{Route('TeacherGallery.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                      aria-hidden="true"></i> Teacher Gallery </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href='{{Route('OfficeGallery.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                     aria-hidden="true"></i> Office Gallery </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href='{{Route('DoofazitEvent.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                     aria-hidden="true"></i> DoofazIT Events</span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href='{{Route('LabProgram.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                  aria-hidden="true"></i> Lab & Program </span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </li>--}}

{{--            <li class="hidden-sm"><a href="{{Route('Blog.index')}}">Blog</a></li>--}}
{{--            <li class=""><a href=""> Student <i class='fa fa-angle-down'></i></a>--}}

{{--                <ul class="bb">--}}
{{--                    <li class=''><a href='{{Route('StudentProject.index')}}'><span><i class="fa fa-caret-right"--}}
{{--                                                                                      aria-hidden="true"></i> Student Project </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href='{{route('FeedbackStudent.index')}}'><span> <i class="fa fa-caret-right"--}}
{{--                                                                                        aria-hidden="true"></i> Student Feedback </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href=''><span><i class="fa fa-caret-right" aria-hidden="true"></i> Achievement & Awards </span></a>--}}
{{--                    </li>--}}
{{--                    <li class=''><a href=''><span><i class="fa fa-caret-right" aria-hidden="true"></i> Student Community </span></a>--}}
{{--                    </li>--}}


{{--                </ul>--}}

{{--            </li>--}}
{{--            <!--                    <li class="hidden-sm"><a href="">Device <i class='fa fa-angle-down'></i></a>--}}
{{--                                    <ul class="bb">--}}
{{--                                        <li class=''><a href='ComputerAcessories'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Computer Accessories </span></a></li>--}}
{{--                                        <li class=''><a href='AttendenceMachine'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Attendance Machine</span></a></li>--}}
{{--                                        <li class=''><a href='SecurityCamera'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Security Camera</span></a></li>--}}

{{--                                    </ul>--}}

{{--                                </li>-->--}}
{{--            <li class="hidden-sm"><a href="{{Route('Tutorial.index')}}">Tutorial Video</a></li>--}}
{{--            <li class=""><a href="{{Route('UpdateBatch.index')}}">Upcoming Batch</a></li>--}}
{{--            <!--                    <li><a href="">Company  <i class='fa fa-angle-down'></i></a>--}}

{{--                                    <ul class="bb">--}}
{{--                                        <li class=''><a href='Founder'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Massage Form Founder </span></a></li>--}}
{{--                                        <li class=''><a href='CompanyProfile'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Company Profile</span></a></li>--}}
{{--                                        <li class=''><a href='Skill'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Our Skill</span></a></li>--}}
{{--                                        <li class=''><a href='client'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Our Client</span></a></li>--}}
{{--                                        <li class=''><a href='Payment'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Payment</span></a></li>--}}
{{--                                        <li class=''><a href='Proposal'><span><i class="fa fa-caret-right" aria-hidden="true"></i> Proposal Download</span></a></li>--}}
{{--                                    </ul>--}}

{{--                                </li>-->--}}
{{--            <li class=""><a href="{{Route('NoticeHome.index')}}">Notice</a></li>--}}
{{--            <li class=""><a href="{{Route('ContactHome.index')}}">Contact</a></li>--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}

<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $('nav li').hover(
        function () {
            $('ul', this).stop().slideDown(200);
        },
        function () {
            $('ul', this).stop().slideUp(200);
        }
    );
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>