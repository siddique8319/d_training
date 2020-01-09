@extends('layouts.header')
@section('main-container')
<section class="techdegree">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-12 col-sm-12 col-xs-12 padding">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Feedback-header">
                <!--   <h3> PREVIOUS Notice Information </h3>
                  <b>DoofazIT </b> -->
              </div>
          </div>

         <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-header padding">
                <h3> Feedback Information </h3>
                </div>  
                    
             

             <div class="col-md-12 col-sm-12 col-xs-12 notice-board">

              <h3 class="text-center text-primary"> Help Us Improve Our training </h3><hr>
               <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
               <p style="text-align: justify">
                Your feedback and questions are crucial in helping us provide a useful and usable website for all members of our community. We welcome your input and hope that that you will take a moment to send us your questions and comments.
               </p>
                   <br>
                   <h4 class="text-center text-primary">I have a question about an academic program or application</h4>
                   <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2">
                   <form action="{{route('FeedbackStudent.store')}}" method="post">
                    {{csrf_field()}}

                     <div class="form-group">
                       <label for="name">Your name: (required) </label>
                       <input type="text" name="userName" class="form-control" id="name" placeholder="Your name" required="">
                     </div>

                      <div class="form-group">
                       <label for="email">Your email: (required) </label>
                       <input type="email" name="userEmail" class="form-control" id="email" placeholder="Your email" required="">
                     </div>
                      <div class="form-group">
                       <label for="info">What program(s) are you interested in? (required) </label>
                       <textarea type="email" name="userIntersted" class="form-control" id="info" required=""></textarea>
                     </div> 
                     <div class="form-group">
                       <label for="qu">Your question: (required) </label>
                       <textarea type="email" name="userQuestion" class="form-control" id="qu" required=""></textarea>
                     </div>

                     <div class="form-group">
                       <label for="qu"></label>
                       <input type="submit"  class="btn btn-primary" name="Feedback_Submit">
                     </div>
                   </form>
                 </div>


                @if (session('message'))
                 <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-success">
                            <strong>   {{ session('message') }}</strong> 
                        </div>  
                 </div>   
                @endif    
             </div>

           
              
                    
             </div>

            
        </div>
      </div>

<!-- --------------End--model-thumbnai -->







        </div>
    </div>
</section>
<script type="text/javascript">
   
</script>


@endsection