@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-header">
                            <h3>Our Training Blog</h3>
                            <b>DoofazIT In Media</b>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        @foreach($blog AS $view)

                            <div class="col-md-12 col-sm-12 col-xs-12 blog_top text-center">

                                <div class="col-md-4 col-sm-4 col-xs-5 padding">
                                    <img src="{{url('photo/'.$view->image)}}" class="blog_img">
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 blog_top">
                                    <h4><span class="glyphicon glyphicon-hand-right"></span> {{$view->title}} </h4>
                                    <p>
                                        {!!html_entity_decode($view->description)!!}
                                    </p>

                                    <div class="col-md-12">
                                        <a href="{{route('Blog.edit',$view->id)}}" class="btn btn-default pull-left">See
                                            More</a> &nbsp;&nbsp;
                                        <a href="{{route('Blog.edit',$view->id)}}" class="btn btn-default pull-left">Share</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection