@extends('layouts.header')
@section('main-container')
<section class="techdegree">
<div class="container">
    <div class="row">

      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-12 col-sm-12 col-xs-12 padding">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student_project">
                  <h3> STUDENT'S WORK </h3>
                  <b>Latest Amazing Work By DoofazIT Students </b>
              </div>
          </div>

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 student-song">
            <h3>
              DoofazIT students take pride in the work they do. Check out the gallery of their work or watch as they share their experiences.
            </h3>
          </div>

         <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding" style="margin-bottom: 10px;">
                <h3>  STUDENT'S WORK </h3>
            </div>
             <div class='list-group gallery'>
                    @foreach($work AS $gallery)
                      <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 '>
                          <a class="thumbnail fancybox" rel="ligthbox" href="{{url('photo/',$gallery->image)}}">
                              <img class="img-responsive studentGallery-image" alt="" src="{{url('photo/',$gallery->image)}}" />
                           </a>
                      </div> 
                    @endforeach
                       
                      
              </div>

        </div>
      </div>

<!-- --------------End--model-thumbnai -->






        </div>
    </div>
    </div>
</section>
<script type="text/javascript">
  $(document).ready(function(){
    
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
</script>


@endsection