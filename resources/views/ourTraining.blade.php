@extends('layouts.header')
@section('main-container')
	<section class="techdegree">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="col-md-12 col-sm-12 col-xs-12 traning_top text-center">
                    <div class="col-md-6 col-sm-6 col-xs-12 traning_top">
                        <h4 style="color:#FE2E00">স্বল্প  খরচে  অভিজ্ঞ  এবং  প্রেশনাল  প্রশিক্ষক  ধারা  আপনার  পছন্দের  কোর্স  এ  ভর্তি  হওয়ার  সুবর্ণ  সুযোগ  </h4>
                        
                            <ul style="list-style:none">
                          <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;আমাদের ইন্ডাস্ট্রি এর অভিজ্ঞ  শিক্ষক  দ্বারা প্রজেক্ট ভিত্তিক  ক্লাস করানো  হয় </li>
                           <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;আমাদের টার্গেট আপনাকে প্রফেশনাল কাজ এর  জন্য অভিজ্ঞ  করে  তোলা </li>
                           
                           <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;আমাদের লক্ষ্য আপনাকে সমস্যা সমাধান এর দূরত তৈরী করা </li>
                           
                           <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;আপনার  ব্রেইনকে  লজিকেল  করে তোলার জন্য আমাদের কিছু  ইউনিক  পদ্দতি থাকে </li>
                           
                           <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;ক্লাস টাইম এর  বাহিরে ও আমাদের   শিক্ষক  দ্বারা  সমস্যা সমাদান  এর সুযোগ থাকে </li>
                           
                           <li><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;পরিশ্রমী এবং  দক্ষ  ছাত্র /ছাত্রী  কে  কর্মসংস্থান  এর  সুযোগ করে দেওয়া  হয় </li>
                            </ul>
                       
                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 traning_top">
                        <img src="image/traning.jpg" class="traning_img" width="119%" height="300">
                    </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12 padding">

                @foreach($training AS $value)

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding training_box">
                        <div class="col-md-12 col-sm-12 col-xs-12 traning_heading">
                            <h5><img src="{{url('photo/'.$value->course_icon)}}" class="icon_img"> {{$value->course_name}}   <small class="pull-right">Fee ( {{$value->course_fee}}/-)
                          </small> </h5>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 training_details">

                            <h4> {{$value->course_title}}  </h4> <small class="pull-right">Class ({{$value->total_class}}+)</small>

                            <ul class="list-unstyled course_list">


                            @if ($value->course_module != "")
                                @foreach(array_slice(explode(',', $value->course_module),0,7) as $info) 

                                 @if($module = App\CoursemoduleInfo::find($info))
                                <li><a href=""><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{$module->title}}</a></li>
                                 @endif
                                @endforeach
                            @endif
                               
                            </ul>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="{{Route('TrainingHome.show',$value->id)}}" class="btn btn-default btn_traning">See More</a>  
                                 <a href="{{Route('Professional.index')}}" class="btn btn-primary btn_traning">Application</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                @endforeach

                


            </div>

            {{$training->links()}}
          </div>




        </div>
    </div>
</section>


@endsection