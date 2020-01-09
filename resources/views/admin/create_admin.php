<?php include'header.php' ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="index.php">Home</a>
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
                        @$get_id = $_GET['payment_edit'];
                        $select = mysqli_query($link,"SELECT * FROM notice WHERE notice_id='$get_id'");
                        $fetch_pay = mysqli_fetch_array($select);
                         

                     ?>
        <div class="col-md-12">

            <div class="widget-body">
                <div class="widget-main">
                    <div id="fuelux-wizard-container">
                        <h3 class="text-center"> Create Sub admin</h3>

                        <hr/>
                        <div class="col-md-12">

                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">

                                <div class="step-content pos-rel">
                                    <div class="step-pane active" data-step="1">

                                        <div class="col-md-12 ">
                                            

                                            <form action="worker.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                            
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title"> Name </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="<?php echo $fetch_pay['admin_name']; ?>" name="name" placeholder="Name " id="title" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    
                                                   <div class="form-group">
                                                        <label for="mobile">Email</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" value="<?php echo $fetch_pay['email']; ?>" name="email" placeholder="Email" id="mobile" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="m">Mobile</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="<?php echo $fetch_pay['mobile']; ?>" name="mobile" placeholder="Mobile" id="m" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pas">Password</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" value="<?php echo $fetch_pay['password']; ?>" name="password" placeholder="Password" id="pas" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                             
                                                
                                                
                                                <div class="form-group">
                                                        <label for="price"> Address </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea class="form-control" placeholder="Address" value="<?php echo $fetch_pay['address']; ?>" name="address"><?php echo $fetch_pay['address']; ?></textarea>
                                                            </span>
                                                        </div>
                                                         
                                                </div>
                                                <div class="form-group">
                                                        <label for="photo"> Photo </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="file" name="image" id="photo">
                                                            </span>
                                                        </div>

                                                </div>

                                                
                                                <input type="hidden" name="admin_id" value="<?php echo $fetch_pay['admin_id']; ?>">
                                                       
                                            
                                                

                                                
                                                <?php if($get_id !=0){ ?>
                                                <img src="<?php echo $fetch_pay['image'];?>" class="img-thumbnail" style="height: 100px;">
                                               <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Update" name="Admin_update" class="btn btn-danger" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit" name="admin_create_submit" class="btn btn-danger" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>


                                            </form>



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
    


         </div>


       </div>


    </div>
   </div>
  </div>
 </div>

 <?php include'footer.php' ?>