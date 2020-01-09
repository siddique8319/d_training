@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @foreach($category  = App\coursemodel::orderBy('id','ASC')->paginate(10) AS $cat_value)

                            <div class="col-md-12 col-sm-12 col-xs-12 blog_top padding">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding"
                                     style="margin-top: 10px;">
                                    <h3> {{$cat_value->course_name}} </h3>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 padding">
                                    @foreach($select = App\tutorialModel::where('course_id','=',$cat_value->id)->get() AS $tutorial)

                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <a href="" data-toggle="modal" data-target="#myModal">
                                                <img src="{{url('photo/'.$tutorial->image)}}"
                                                     class="img-responsive img-thumbnail tutorial-image">
                                            </a>

                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        @endforeach


                    </div>


                </div>

                <!-- -------------Start---model-thumbnai -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Video Player</h4>
                            </div>
                            <div class="modal-body">

                                <div class="carousel slide media-carousel" id="media">
                                    <div class="carousel-inner">

                                        <?php $c = 1; ?>
                                        @foreach($tutor = App\tutorialModel::orderBy('id','DESC')->get() AS $videolink)
                                            <div class="item @if($c==1) {{'active'}} @endif">
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                                                        <iframe width="100%" height="320" src="{{$videolink->url_link}}"
                                                                frameborder="0" allowfullscreen>

                                                        </iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $c++; ?>
                                    @endforeach
                                    <!-- <div class="item">
                        <div class="row" >

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                               <iframe width="100%" height="320" src="https://www.youtube.com/embed/MKP6p7nXTVc" frameborder="0" allowfullscreen></iframe>
                            </div>        
                        </div>
                    </div> -->

                                    </div>
                                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------End--model-thumbnai -->


            </div>


        </div>

    </section>


@endsection