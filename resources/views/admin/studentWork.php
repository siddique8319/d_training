<?php include'header.php' ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
               
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div>
        </div>
<?php 
  @$get_id = $_GET['course_edit'];
  $select_edit = studentWorkEdit($link,$get_id);
  $fetch_edit = mysqli_fetch_array($select_edit);
 ?>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="widget-body">
                <div class="widget-main">
                    <div id="fuelux-wizard-container">
                        <h3 class="text-center"> Student Work Information </h3>

                        <hr/>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">

                                <div class="step-content pos-rel">
                                    <div class="step-pane active" data-step="1">

                                            <form action="worker.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                            
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="title"> Subject name</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <select class="width-100" name="category">
                                                                <option value=""> Select Subject</option>
                                                                <?php 
                                                                 $subject = SubjectNameView($link);
                                                                 while($fetch_subject = mysqli_fetch_array($subject))
                                                                 {
                                                                     if($fetch_subject['course_id'] == $fetch_edit['course_id']){
                                                                 ?>
                                                                <option selected="" value="<?php echo $fetch_subject['course_id']; ?>"><?php echo $fetch_subject['course_name'] ?></option>
                                                                <?php } else{ ?>
                                                                <option value="<?php echo $fetch_subject['course_id']; ?>"><?php echo $fetch_subject['course_name'] ?></option>
                                                                <?php } } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="img">Photo</label>
                                                        <input type="file" name="image" id="img">
                                                    </div>
                                                
                                                <input type="hidden" name="course_id" value="<?php echo $fetch_edit['work_id']; ?>">

                                                    <div class="form-group">


                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                        <?php if($get_id!=0){ ?>
                                                        <img src="<?php echo $fetch_edit['image']; ?>" class="img-responsive" style="height: 80px;">
                                                        <br>
                                                    <input type="submit" value="Update" name="StudentWork_udpate" class="btn btn-success" /> 
                                                    <?php } else{ ?>
                                                    <input type="submit" value="Submit" name="Student_Work_submit" class="btn btn-primary" />
                                                    <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>


                                            </form>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
<!-- 
           <div class="col-md-8 col-md-offset-2">
         
              <div class="alert alert-success text-center">
                  {{ session('success') }}
              </div>
     
          </div> -->


                


         </div>



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sx-offset-1">
                 <table class="table table-bordered table-responsive">
                     <tr>
                         <th>Sl</th>  <th>Subject name</th> <th>Photo</th> <th>Submit</th> <th>Delete</th>
                     </tr>
                     <?php  
                     $course = studnetProjectView($link);
                     while($fetch = mysqli_fetch_array($course)){
                        $id = $fetch['course_id'];
                     ?>
                     <tr>
                         <td><?php echo $fetch['work_id'];  ?></td>
                        
                         <td><?php echo SubjectInformation($link,$id); ?></td>
                         <td><img src="<?php echo $fetch['image']; ?>" class="img-responsive" style="height: 100px;"></td>
                          <td><?php echo admin_information($link,$fetch['admin_id']);  ?></td>
                            <td>
                                 <div class="action-buttons">
                                     <a class="green" href="studentWork.php?course_edit=<?php echo $fetch['work_id']; ?>">
                                            <span class="glyphicon glyphicon-edit fa-2x"></span>
                                     </a>

                                     <a class="red" href="delete.php?StudentWork_delete=<?php echo $fetch['work_id']; ?>">
                                                            
                                         <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                     </a>
                                </div>

                                                            
                            </td>
                     </tr>
                     <?php } ?>
                 </table>
            </div>
        </div>


       </div>


    </div>
   </div>
  </div>
 </div>

 <?php include'footer.php' ?>