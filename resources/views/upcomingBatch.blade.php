@extends('layouts.header')
@section('main-container')
<section class="techdegree">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-12 col-sm-12 col-xs-12 padding">
          

  <div class="col-md-12 col-sm-12 col-xs-12 StudentGallery-area padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding" style="margin-top: 10px;">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 padding col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <h3 class="text-center text-primary">Upcoming Batch </h3><br>
                <div class="stepwizard">
                            <div class="stepwizard-row">
                                <div class="stepwizard-step">
                                    Running
                                  <button type="button" class="btn btn-danger btn-circle">1</button>
                                  <p>Web desgin</p>
                                  <p>25-12-2017</p>
                                </div>
                                <div class="stepwizard-step">
                                      Running
                                  <button type="button" class="btn btn-primary btn-circle">2</button>
                                  <p>Web Devlopment</p>
                                  <p>25-11-2017</p>
                                </div>
                        <div class="stepwizard-step">
                              Running
                          <button type="button" class="btn btn-success btn-circle" disabled="disabled">3</button>
                          <p>Graphics</p>
                          <p>30-11-2017</p>
                        </div> 
                    </div>
                </div>
            </div>
            </div>

             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 padding col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <h3 class="text-center text-primary">পুরো  সপ্তাহে    আমাদের ক্লাস টাইম এবং  Running Batch এর ক্লাস  রুটিন </h3><br>
                <table class="table table-bordered" >
                   <!--  <tr>
                        <th>Day</th> <th>Course time </th> <th>Course time </th>  <th>Course time </th>  <th>Course time </th>
                    </tr> -->
                    <tr>
                        <th style="background-color:#C9302C; color:white;"><center>Time</center></th>  <th style="background-color:#5CB85C; color:white; text-align:center;">শনি  </th> <th style="background-color:#5CB85C; color:white;  text-align:center;">সোম  </th> <th style="background-color:#5CB85C; color:white;  text-align:center;">বুধ   </th> <th></th> 

                       <th style="background-color:#286090; color:white;  text-align:center;"> রবি  </th> <th style="background-color:#286090; color:white;  text-align:center;">মঙ্গল  </th>  <th style="background-color:#286090; color:white;  text-align:center;">বৃহস্প্রতি </th>
                    </tr>
                     <tr>
                        <th style="background-color:whitesmoke; text-align:center;">9.00 AM - 11.00 AM</th> 
                        <td colspan="3" class="text-center">Web -45 </td>
                        <td rowspan="6"></td>
                     <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;">Web -42 </td>
                      </tr>
                     <tr>
                        <th style="background-color:whitesmoke; text-align:center;">11.00 AM - 1.00 PM</th> 
                        <td colspan="3" class="text-center">Ghraphics -40 </td>
                       
                          <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;">Graphice - 20 </td>
                    
                      </tr> 
                       <tr>
                        <th style="background-color:whitesmoke; text-align:center;">2.00 PM - 4.00 PM</th> 
                        <td colspan="3" class="text-center">Web -50 </td>
                      
                      <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;" style="background-color:whitesmoke; text-align:center;">Web -45 </td>
                      </tr>
                      
                       <tr>
                        <th style="background-color:whitesmoke; text-align:center;">5.00 PM - 6.00 PM</th> 
                        <td colspan="3" class="text-center">Web -50 </td>
                         
                      <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;">Web -45 </td>
                      </tr>
                      
                       <tr>
                        <th style="background-color:whitesmoke; text-align:center;">6.00 PM - 8.00 PM</th> 
                        <td colspan="3" class="text-center">Web -50 </td>
                         
                      <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;">Web -45 </td>
                      </tr>
                      
                       <tr>
                        <th style="background-color:whitesmoke; text-align:center;">8.00 PM - 10.00 PM</th> 
                        <td colspan="3" class="text-center">Web -50 </td>
                        
                      <td colspan="3" class="text-center" style="background-color:whitesmoke; text-align:center;">Web -45 </td>
                      </tr>
                    
                     
                     
                    
                    
                    
                </table>
                           
                
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