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
 									 		$info_id = $_GET['TransitionDetails'];
 									 		$fetch = student_information($link,$info_id);
										 ?>


										<div class="table-header">
											Personal Profile 
										</div>

										<!-- <div class="col-md-8 col-md-offset-2">
         									
              									<div class="alert alert-success text-center">
                 									 {{ session('success') }}
              									</div>
         								
          								</div> -->
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
												 <tr><th colspan="2" class="text-center success"> Student Information</th></tr>
													<tr>
														
														<th>Photo </th> <td> <img src="img/profile.PNG" class="img-responsive img-thumbnail" style="height: 80px;"></td>
													</tr>
													<tr>
														
													  <th>Sudent name </th> <td><?php echo $fetch['student']; ?></td>
													</tr>
													<tr>
														<th>Email</th> <td> <?php echo $fetch['email']; ?> </td>
													</tr>
													<tr>
														<th>mobile</th> <td> <?php echo $fetch['mobile']; ?> </td>
													</tr>
													<tr>
														<th>Subject</th> <td> <?php echo $fetch['subject'];  ?> </td>
													</tr>
													<tr>
														<th>Division</th> <td> <?php echo $fetch['division']; ?> </td>
													</tr>
													<tr>
														<th>Comment</th> <td> <?php echo $fetch['comment']; ?> </td>
													</tr>

												</thead>

												


											</table>
											
										</div>

										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-11 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
												 <tr>
												 <th colspan="4" class="text-center danger"> Account history</th></tr>
													
													<tr>
														
													  <th>Sl</th> <th>Date</th> <th> Taka </th> <th>Receive</th>
													</tr>
													<?php 
													$s=1;
													$sum =0;
														$history = student_personalAccount($link,$info_id);
														foreach ($history as $value) {
														
													 ?>
													<tr>
														<td><?php echo $s++; ?></td> 
														<td><?php echo $value['date']; ?></td>
														 <td><?php echo $tk = $value['amount']; ?></td>
														 <td><?php echo admin_information($link,$value['admin_id']); ?></td>
													</tr>
													<?php
														$sum = $sum+$tk;
													 } 
													 ?>
													<tr>
														<th colspan="2">Tolal</th> 
														<td colspan="2">= <?php echo $sum; ?></td>
													</tr>

												</thead>

												


											</table>
											
										</div>

									</div>
								</div>


						</div>


		
<?php include'footer.php' ?>