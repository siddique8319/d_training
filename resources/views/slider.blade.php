<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>doofazit.com</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="doofaz_new_slider/css/fractionslider.css"/>
    <link rel="stylesheet" href="doofaz_new_slider/css/style-fraction.css"/>

    <link rel="stylesheet" href="doofaz_new_slider/css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" type="text/css" href="doofaz_new_slider/css/switcher.css" media="screen"/>

</head>
<body>
<!--Start Header-->

<!--End Header-->


<!--start wrapper-->
<section class="wrapper">

    <?php
    $data = DB::table('slider')->get();
    ?>

    <div class="slider-wrapper">
        <div class="slider">
            <div class="fs_loader"></div>
            @foreach($data as $value)


            <div class="slide slide1">

                <img src="{{url('photo/'.$value->image)}}" width="1920" data-in="fade"
                     class="slider_image" data-out="fade"/>


{{--                <img src="doofaz_new_slider/banner/training/trainig2.png" width="755" height="400"--}}
{{--                     data-position="50,100" data-in="top" data-out="left" data-delay="1500"/>--}}
{{--                <img src="doofaz_new_slider/banner/training/trainig1.png" width="1920" height="210"--}}
{{--                     data-position="430,0" data-in="right" data-out="fade" data-delay="2000"/>--}}
{{--                <img src="doofaz_new_slider/banner/training/trainig.png" width="1132" height="558" data-position="0,788"--}}
{{--                     data-in="left" data-out="fade" data-delay="1000"/>--}}
            </div>
            @endforeach

{{--            <div class="slide slide2">--}}

{{--                <img src="doofaz_new_slider/banner/software/software_background.jpg" widsoftwareth="1920" data-in="fade"--}}
{{--                     class="slider_image" data-out="fade"/>--}}


{{--                <img src="doofaz_new_slider/banner/software/software.png" width="1055" height="650" data-position="0,0"--}}
{{--                     data-in="top" data-out="left" data-delay="100"/>--}}
{{--                <img src="doofaz_new_slider/banner/software/software2.png" width="800" height="140"--}}
{{--                     data-position="350,1058" data-in="down" data-out="fade" data-delay="2000"/>--}}
{{--                <img src="doofaz_new_slider/banner/software/software1.png" width="800" height="180"--}}
{{--                     data-position="120,1058" data-in="left" data-out="fade" data-delay="1500"/>--}}


{{--            </div>--}}

{{--            <div class="slide slide3">--}}
{{--                <img src="doofaz_new_slider/banner/website/website.jpg" widsoftwareth="1920" data-in="fade"--}}
{{--                     class="slider_image" data-out="fade"/>--}}


{{--                <img src="doofaz_new_slider/banner/website/website1.jpg" width="755" height="150" data-position="230,0"--}}
{{--                     data-in="top" data-out="left" data-delay="1500"/>--}}
{{--                <img src="doofaz_new_slider/banner/website/website.png" width="1132" height="560" data-position="30,788"--}}
{{--                     data-in="left" data-out="fade" data-delay="1000"/>--}}


{{--            </div>--}}
{{--            <div class="slide slide4">--}}
{{--                <img src="doofaz_new_slider/banner/graphics/graphics_background.png" widsoftwareth="1920" data-in="fade"--}}
{{--                     class="slider_image" data-out="fade"/>--}}


{{--                <img src="doofaz_new_slider/banner/graphics/graphics.png" width="955" height="530" data-position="120,0"--}}
{{--                     data-in="top" data-out="left" data-delay="2000"/>--}}
{{--                <img src="doofaz_new_slider/banner/graphics/graphics1.png" width="500" height="400"--}}
{{--                     data-position="240,1300" data-in="down" data-out="fade" data-delay="1500"/>--}}
{{--                <img src="doofaz_new_slider/banner/graphics/graphics2.png" width="1100" height="160"--}}
{{--                     data-position="40,808" data-in="left" data-out="fade" data-delay="1000"/>--}}

{{--            </div>--}}
{{--            <div class="slide slide5">--}}
{{--                <img src="doofaz_new_slider/banner/securty/security.jpg" widsoftwareth="1920" data-in="fade"--}}
{{--                     class="slider_image" data-out="fade"/>--}}


{{--                <img src="doofaz_new_slider/banner/securty/security.png" width="950" height="650" data-position="0,0"--}}
{{--                     data-in="top" data-out="left" data-delay="1500"/>--}}
{{--                <img src="doofaz_new_slider/banner/securty/security1.png" width="1100" height="150"--}}
{{--                     data-position="400,820" data-in="down" data-out="fade" data-delay="1000"/>--}}
{{--                <img src="doofaz_new_slider/banner/securty/security2.png" width="550" height="250"--}}
{{--                     data-position="0,1370" data-in="left" data-out="fade" data-delay="2500"/>--}}
{{--            </div>--}}
        </div>
    </div>
    <!--End Slider-->

    <script type="text/javascript" src="doofaz_new_slider/js/jquery-1.10.2.min.js"></script>
    <!--<script src="doofaz_new_slider/js/bootstrap.min.js"></script>-->
    <script src="doofaz_new_slider/js/jquery.easing.1.3.js"></script>
    <script src="doofaz_new_slider/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="doofaz_new_slider/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="doofaz_new_slider/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/swipe.js"></script>
    <script type="text/javascript" src="doofaz_new_slider/js/jquery-scrolltofixed-min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(window).load(function () {
            $('.slider').fractionSlider({
                'fullWidth': true,
                'controls': true,
                'responsive': true,
                'dimensions': "1920,500",
                'timeout': 5000,
                'increase': true,
                'pauseOnHover': true,
                'slideEndAnimation': false,
                'autoChange': true
            });
        });
    </script>

    <!-- WARNING: Wow.js doesn't work in IE 9 or less -->
    <!--[if gte IE 9 | !IE ]><!-->
    <script type="text/javascript" src="doofaz_new_slider/js/wow.min.js"></script>
    <script>
        // WOW Animation
        new WOW().init();
    </script>
    <![endif]-->

</body>
</html>