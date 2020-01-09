@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-header">
                            <h3>Our Training Blog</h3>
                            <b>DoofazIT Blog</b>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">


                        <div class="col-md-12 col-sm-12 col-xs-12 blog_top text-center">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 padding">
                                <img src="{{url('photo/'.$blog->image)}}" class="blog_img">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_top">
                                <h4><span class="glyphicon glyphicon-hand-right"></span> {{$blog->title}} </h4>
                                <p>
                                    {{$blog->description}}
                                </p>


                            </div>

                        </div>


                    </div>


                </div>


            </div>
        </div>
    </section>


@endsection