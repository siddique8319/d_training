<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title> doofazit.com </title>
    <link rel="icon" type="image/x-icon" href="{{url('icon/doofazit.png')}}">
    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/logo.png')}}">

    <link rel="stylesheet" href="{{url('assets/css/fonts.googleapis.com.css')}}"/>

    <link rel="stylesheet" href="{{url('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style"/>


    <link rel="stylesheet" href="{{url('assets/css/ace-skins.min.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/css/ace-rtl.min.css')}}"/>


    <script src="{{url('assets/js/ace-extra.min.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!-- --------------textarea editor-------------- -->
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>


</head>
<style type="text/css">
    .padding {
        padding: 0px;
    }
</style>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="{{Route('admin.index')}}" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Doofazit
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="" alt=""/>
                        <span class="user-info">
									<small>  {{ Auth::user()->name }} </small>
								
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                        <li class="divider"></li>

                        <li>


                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="{{Route('admin.index')}}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{Route('admin.index')}}" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								Home
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Home top

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="{{Route('Slider.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Slider
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Update news
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="{{Route('SpeacialVideo.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Speacial Video
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="{{Route('Studentfeedback.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student Feedback
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{Route('UpcomingSeminar.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Upcoming Seminar
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="{{ Route('addnewsheader.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Header News
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Home bottom
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="{{Route('CourseAdmin.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Courses

                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{Route('CertificationAdmin.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Certification Program

                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="{{Route('OurProgramAdmin.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ours Program
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>


                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text">About</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{Route('AboutOurTrainingAdmin.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Our training
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{Route('AboutOurTrainingAdmin.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            The training center
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>

            <li class="">
                <a href="" class="dropdown-toggle">
                    <i class="menu-icon fa fa-calendar"></i>
                    <span class="menu-text">
							 Training
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Module information
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="{{Route('CourseModule.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Course module
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{Route('SoftwareModule.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Software module
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <!-- <li class="">
                                <a href="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Order Cancel
                                </a>

                                <b class="arrow"></b>
                            </li>
                             -->
                        </ul>
                    </li>
                    <ul class="submenu">
                        <li class="">
                            <a href="{{Route('CourseAdmin.index')}}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Course
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Sub Course
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <!-- <li class="">
                            <a href="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Order Cancel
                            </a>

                            <b class="arrow"></b>
                        </li>
                         -->
                    </ul>
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Training
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="{{Route('CourseAdmin.index')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Course Category
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{Route('CourseAdmin.create')}}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Course View
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>

                    <!-- <li class="">
                        <a href="">
                         <i class="menu-icon fa fa-caret-right"></i>
                            Populer show
                        </a>

                        <b class="arrow"></b>
                    </li> -->


                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text">Gallery</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{Route('AdminMultigallery.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Multi gallery
                        </a>

                        <b class="arrow"></b>
                    </li>
                <!-- <li class="">
								<a href="{{Route('AdminMultigallery.index')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Student
								</a>

								<b class="arrow"></b>
							</li> -->


                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>
                    <span class="menu-text"> Blog</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">

                    <li class="">
                        <a href="{{route('AdminBlog.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add blog
                        </a>

                        <b class="arrow"></b>
                    </li>



                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">Tutorial Video</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{route('AdminTutorial.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add tutorial
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{route('AdminTutorial.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tutorial View
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">Sdutent Project</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{route('StudentAdminProject.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add student project
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{route('StudentAdminProject.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student project View
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>




            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text">Notice information</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{route('AdminNotice.index')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add notice
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Notice View
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <!-- <li class="">
                        <a href="inbox.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Inbox
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="pricing.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pricing Tables
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="invoice.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Invoice
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="timeline.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Timeline
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="search.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Search Results
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="email.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Email Templates
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="login.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Login &amp; Register
                        </a>

                        <b class="arrow"></b>
                    </li> -->
                </ul>
            </li>

            <li class="">
                <a href="{{route('FeedbackShow.create')}}">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Student Feedback </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Contact us </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="">
                <a href="{{Route('admin.index')}}" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								Setup
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Menusetup

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="{{ route('addCategory.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add Category
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="{{ route('addSubCategory.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add SubCategory
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>


                </ul>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Slider
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Option
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>


                </ul>
            </li>

            <li class="">
                <a href="" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								Student Application
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            New Application

                        </a>

                        <b class="arrow"></b>

                    </li>


                </ul>

                <ul class="submenu">
                    <li class="">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Approved Application
                        </a>

                        <b class="arrow"></b>

                    </li>


                </ul>
            </li>


        </ul>


        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>


    @yield('admin-container')


    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"> DoofazIT  </span>
						 &copy; 2017
						</span>

                &nbsp; &nbsp;

            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>
<script src="{{url('assets/js/jquery-2.1.4.min.js')}}"></script>


<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>

<script src="{{url('assets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{url('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{url('assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{url('assets/js/jquery.sparkline.index.min.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.min.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.pie.min.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.resize.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{url('assets/js/ace-elements.min.js')}}"></script>
<script src="{{url('assets/js/ace.min.js')}}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        $('.easy-pie-chart.percentage').each(function () {
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size / 10),
                animate: ace.vars['old_ie'] ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function () {
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html',
                {
                    tagValuesAttribute: 'data-values',
                    type: 'bar',
                    barColor: barColor,
                    chartRangeMin: $(this).data('min') || 0
                });
        });


        //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
        //but sometimes it brings up errors with normal resize event handlers
        $.resize.throttleWindow = false;

        var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
        var data = [
            {label: "social networks", data: 38.7, color: "#68BC31"},
            {label: "search engines", data: 24.5, color: "#2091CF"},
            {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
            {label: "direct traffic", data: 18.6, color: "#DA5430"},
            {label: "other", data: 10, color: "#FEE074"}
        ]

        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt: 0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin: [-30, 15]
                }
                ,
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }

        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);


        //pie chart tooltip example
        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if (item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });

        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function (e) {
            $tooltip.remove();
        });


        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
        $.plot("#sales-charts", [
            {label: "Domains", data: d1},
            {label: "Hosting", data: d2},
            {label: "Services", data: d3}
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: {show: true},
                points: {show: true}
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: {colors: ["#fff", "#fff"]},
                borderWidth: 1,
                borderColor: '#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }


        $('.dialogs,.comments').ace_scroll({
            size: 300
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if (ace.vars['touch'] && ace.vars['android']) {
            $('#tasks').on('touchstart', function (e) {
                var li = $(e.target).closest('#tasks li');
                if (li.length == 0) return;
                var label = li.find('label.inline').get(0);
                if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
            });
        }

        $('#tasks').sortable({
                opacity: 0.8,
                revert: true,
                forceHelperSize: true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize: true,
                tolerance: 'pointer',
                stop: function (event, ui) {
                    //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                    $(ui.item).css('z-index', 'auto');
                }
            }
        );
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function () {
            if (this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });


        //show the dropdowns on top or bottom depending on window height and menu position
        $('#task-tab .dropdown-hover').on('mouseenter', function (e) {
            var offset = $(this).offset();

            var $w = $(window)
            if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                $(this).addClass('dropup');
            else $(this).removeClass('dropup');
        });

    })

    // ------------------print for -----

    function myFunction() {
        window.print();
    }
</script>

<script>
    CKEDITOR.replace('editor1');
</script>


</body>
</html>

