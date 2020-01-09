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
                         $fetch_pay = office_accountEdit($link,$get_id);
                      

                     ?>
        <div class="col-md-12">

            <div class="widget-body">
                <div class="widget-main">
                    <div id="fuelux-wizard-container">
                        <h3 class="text-center">Office Earn and Cost information entry </h3>

                        <hr/>
                        <div class="col-md-12">

                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">

                                <div class="step-content pos-rel">
                                    <div class="step-pane active" data-step="1">

                                        <div class="col-md-12 ">
                                            

                                            <form action="worker.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                            
                                                <div class="col-md-12">
                                                    
                                                  
                                                <div class="form-group">
                                                    <label for="t"> Title </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" value="<?php echo $fetch_pay['title']; ?>"  name="title" placeholder="Title" id="t" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="d"> Account type </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                       <select class="form-control" name="account_type" required="">
                                                           <option value="">Select type</option>
                                                           <option value="1">Earn</option>
                                                           <option value="2">Cost</option>
                                                       </select>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="price"> Amount </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="<?php echo $fetch_pay['amount']; ?>"  name="amount" placeholder="Amount" id="price" required="" class="width-100"/>
                                                               
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="quantity"> Date of time </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="date" value="<?php echo $fetch_pay['month_date']; ?>"  name="date_month" placeholder="D-M-Y" required="" id="quantity" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                        <label for="price"> Description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea class="form-control" placeholder="Description" value="<?php echo $fetch_pay['description']; ?>" name="description"><?php echo $fetch_pay['description']; ?></textarea>
                                                            </span>
                                                        </div>
                                                </div>
                                                
                                               
                                                <div class="form-group">
                                                       
                                                        <input type="hidden" name="employer_pay_id" value="<?php echo $fetch_pay['account_id']; ?>">
                                                </div>

                                                
                                                <?php if($get_id !=0){ ?>
                                               <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Update" name="OfficeAccount_update" class="btn btn-danger" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit" name="OfficeAccount_submit" class="btn btn-danger" />
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