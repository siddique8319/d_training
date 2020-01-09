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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 labProgram-header">
                                <h3>Lab Program</h3>
                                <b>DoofazIT </b>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">

                                <div class='list-group gallery'>
                                    @foreach($lapProgram AS $value)
                                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{url('photo/',$value->image)}}">
                                                <img class="img-responsive labGallery-image" alt=""
                                                     src="{{url('photo/',$value->image)}}"/>
                                            </a>
                                        </div>

                                    @endforeach


                                </div>


                            </div>
                            {{$lapProgram->links()}}


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