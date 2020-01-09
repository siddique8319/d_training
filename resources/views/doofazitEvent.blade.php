@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-md-12 col-sm-12 col-xs-12 padding">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 studentGallery-header">
                                <h3>PREVIOUS EVENT GALLERY</h3>
                                <b>DoofazIT </b>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                                    <h3> Recent Events </h3>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6 padding" style="margin-top: 10px;">
                                    <div class="col-md-12 col-sm-12 col-xs-12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                            <div class="col-sm-12" id="carousel-bounding-box">
                                                <div class="carousel slide" id="myCarousel">
                                                    <!-- Carousel items -->
                                                    <div class="carousel-inner">
                                                        <?php $i = 0; ?>
                                                        @foreach($doofazitEvent AS $info)
                                                            <div class="@if($i==1) {{'active'}} @endif item"
                                                                 data-slide-number="{{$i++}}">
                                                                <img src="{{url('photo/',$info->image)}}"
                                                                     class="events-slide"></div>
                                                        @endforeach


                                                    </div>
                                                    <!-- Carousel nav -->
                                                    <a class="left carousel-control" href="#myCarousel" role="button"
                                                       data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" role="button"
                                                       data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6 padding" id="slider-thumbs">
                                    <!-- Bottom switcher of slider -->
                                    <ul class="hide-bullets">
                                        <?php $j = 0; ?>
                                        @foreach($doofazitEvent AS $info)
                                            <li class="col-md-3 col-sm-3 col-xs-3">
                                                <a class="thumbnail" id="carousel-selector-{{$j++}}">
                                                    <img src="{{url('photo/',$info->image)}}" class="events-smallimage">
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>
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
        jQuery(document).ready(function ($) {

            $('#myCarousel').carousel({
                interval: 50000
            });

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
                var id_selector = $(this).attr("id");
                try {
                    var id = /-(\d+)$/.exec(id_selector)[1];
                    console.log(id_selector, id);
                    jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                    console.log('Regex failed!', e);
                }
            });
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-' + id).html());
            });
        });
    </script>


@endsection