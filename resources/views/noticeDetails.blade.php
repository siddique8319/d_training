@extends('layouts.header')
@section('main-container')
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
                                <h3 class="text-center"> Notice Information Details </h3>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12  notice-board">
                                <h3>{{$info->title}}</h3>
                                <p>
                                    {{$info->description}}
                                </p>

                            </div>


                        </div>
                    </div>

                    <!-- --------------End--model-thumbnai -->


                </div>
            </div>
        </div>
        <script type="text/javascript">

        </script>

    </div>
@endsection