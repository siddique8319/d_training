@extends('layouts.header')
@section('main-container')
    <section class="techdegree">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-md-12 col-sm-12 col-xs-12 padding">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Notice-header">
                                <h3> PREVIOUS Notice Information </h3>
                                <b>DoofazIT </b>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                                    <h3> Notice Information </h3>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4  notice-board">
                                    <h3 class="text-center text-primary">Previous Notice</h3>
                                    <hr>
                                    <ul>
                                        @foreach($OldNotice AS $old)
                                            <li><a href="{{route('NoticeHome.edit',$old->id)}}">{{$old->title}} </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-8 notice-board padding">

                                    <h3 class="text-center text-primary"> Recent Notice Information </h3>
                                    <hr>
                                    <ul>
                                        @foreach($Notice AS $recent)
                                            <li>
                                                <a href="{{route('NoticeHome.edit',$recent->id)}}"> {{$recent->title}} </a>
                                                <p>
                                                    {!!html_entity_decode($recent->description)!!}
                                                </p>
                                                @if(!empty($recent->file))
                                                    <a href="{{url('file/'.$recent->file)}}">Download</a>
                                                @endif
                                            </li>

                                        @endforeach

                                    </ul>


                                </div>
                            </div>
                        </div>

                        <!-- --------------End--model-thumbnai -->


                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">

    </script>


@endsection