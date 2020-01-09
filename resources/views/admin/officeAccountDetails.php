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
					
									<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
									<button onclick="myFunction()" class="pull-right  btn btn-success">Print</button>
										<h3 class="header smaller lighter blue"> Show information </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										<?php 
 									 		 $month_name = "January,February,March,April,May,June,July,August,September,October,November,December";
 									 		$brack = explode(",", $month_name);
 									 		$count = count($brack);


 									 		
										 ?>


										<div class="table-header">
											All accounting information 
										</div>

						<!-- ---------------month Earn -start------------------ -->

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<h4 class="text-center">Earn Month Account</h4>
									<?php
									  $year = date('Y');
									  $ms = date('m');
									  $month = $ms-1;
									for($m=0; $count>$m; $m++){
									    $name = $brack["$m"];
									    if($month>=$m){
									 ?>
										<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
											<thead>
											 <tr>
											   <th colspan="3" class="text-center bg-primary"><?php echo $name; ?></th>
											   <tr>
													
													<tr>
														 <th> Sl </th>  <th> Date </th> <th> Amount  </th> 
													</tr>
													<?php 
													   $sum=0;
														$date = "$m-$year";
														$account = earnMonthAccount($link,$date);
														while($fetch_account = mysqli_fetch_array($account)){
													 ?>
													<tr>
														  <td><?php echo $fetch_account['account_id']; ?></td>  <td><?php echo $fetch_account['submit_date']; ?></td>  <td><?php echo $earn = $fetch_account['amount']; ?></td>
													</tr>
													
													<?php 
													$sum = $sum+$earn;
													   }
													 ?>
													<tr>
													  <th colspan="2">Total </th> <td>= <?php echo $sum; ?></td>
													</tr>
												</thead>

											</table>

											<?php } }?>
											
										</div>
						<!-- ---------------month Earn -End-->

						<!-- ---------------month Cost -start-->
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<h4 class="text-center">Cost Month Account</h4>
									<?php
									  $year = date('Y');
									  $Cm= date('m');
									  $Cmonth = $Cm-1;
									for($m=0; $count>$m; $m++){
									    $name = $brack["$m"];
									    if($Cmonth>=$m){
									 ?>
										<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
											<thead>
											 <tr>
											   <th colspan="3" class="text-center bg-danger"><?php echo $name; ?></th>
											   <tr>
													
													<tr>
														 <th> Sl </th>  <th> Date </th> <th> Amount  </th> 
													</tr>
													<?php 
													   $sum=0;
														$date = "$m-$year";
														$account = costMonthAccount($link,$date);
														while($fetch_account = mysqli_fetch_array($account)){
													 ?>
													<tr>
														  <td><?php echo $fetch_account['account_id']; ?></td>  <td><?php echo $fetch_account['submit_date']; ?></td>  <td><?php echo $earn = $fetch_account['amount']; ?></td>
													</tr>
													
													<?php 
													$sum = $sum+$earn;
													   }
													 ?>
													<tr>
													  <th colspan="2">Total  </th> <td>= <?php echo $sum; ?></td>
													</tr>
												</thead>

											</table>

											<?php } }?>
											
										</div>

					<!-- ---------------month Cost -end------------------ -->

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<h4 class="text-center">Total Account of Year </h4>
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
												 <tr>
												 <th colspan="4" class="text-center bg-primary">Earn Account Years </th></tr>
													
													<tr>
														
													 <th>Description</th> <th> Taka </th>
													</tr>
													<?php 
													$sum=0;
													$s=1;
													 $start = date('01-01-Y');
													 $last = date('31-m-Y');
														$history = earnYearAccount($link,$start,$last);
														foreach ($history as $value) {
														
													 ?>
												<!-- 	<tr>
														<td><?php echo $s++; ?></td> 
														<td><?php echo $value['submit_date']; ?></td>
														 <td><?php echo $tk = $value['amount']; ?></td>
														 <td><?php echo admin_information($link,$value['admin_id']); ?></td>
													</tr> -->
													<?php
														$sum = $sum+$tk;
													 } 
													 ?>
													<tr>
														<th>Tolal</th> 
														<td>= <?php echo $sum; ?></td>
													</tr>

												</thead>
											</table>


											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
												 <tr>
												 <th colspan="4" class="text-center bg-danger">Cost Account Years </th></tr>
													
													<tr>
														
													 <th>Description</th> <th> Taka </th>
													</tr>
													<?php 
													$sum=0;
													 $start = date('01-01-Y');
													 $last = date('31-m-Y');
														$historycs = costYearAccount($link,$start,$last);
														foreach ($historycs as $value) {
														
													 ?>
													<!-- <tr>
														<td><?php echo $s++; ?></td> 
														<td><?php echo $value['submit_date']; ?></td>
														 <td><?php echo $tk = $value['amount']; ?></td>
														 <td><?php echo admin_information($link,$value['admin_id']); ?></td>
													</tr>  -->
													<?php
														$sum = $sum+$tk;
													 } 
													 ?>
													<tr>
														<th>Tolal</th> 
														<td>= <?php echo $sum; ?></td>
													</tr>

												</thead>

												


											</table>
											
										</div>

									</div>
								</div>


						</div>


		
<?php include'footer.php' ?>