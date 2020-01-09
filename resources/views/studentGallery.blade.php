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
                                <h3>Student Gallery</h3>
                                <b>DoofazIT </b>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">

                            <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding" style="margin-top: 10px;">
                               <h3> GRAPHIC DESIGN </h3>
                             </div> -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">

                                <div class='list-group gallery'>
                                    @foreach($Student AS $gallery)
                                        <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/',$gallery->image)}}">
                                                <img class="img-responsive studentGallery-image" alt=""
                                                     src="{{url('photo/',$gallery->image)}}"/>
                                            </a>
                                        </div>
                                    @endforeach


                                </div>


                            </div>


                        </div>
                    </div>
                </div>

                <!-- --------------End--model-thumbnai -->


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