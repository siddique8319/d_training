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

					
									<div class="col-md-6  col-lg-6 col-sm-6 col-xs-12">
										<h3 class="header smaller lighter blue"> Profile information </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										


										<div class="table-header text-center">
										 Profile
										</div>
										<?php 
										$profile = Profile($link,$_SESSION['admin_info']);
										 ?>
										
										<div>
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
													<td colspan="2" class="center"><img src="<?php echo $profile['image']; ?>" style="height: 120px; width: 110px;border-radius:100%;"></td>
													<tr>
														<th>Name</th> <td><?php echo $profile['admin_name']; ?></td>
													</tr>

													<tr>
														<th>Email</th> <td><?php echo $profile['email']; ?></td>
													</tr>
													<tr>
														<th>Mobile</th> <td><?php echo $profile['mobile']; ?></td>
													</tr>

													<tr>
														<th>Address</th> <td><?php echo $profile['address']; ?></td>
													</tr>

													


												</thead>

												


											</table>
											
										</div>
									</div>

									<div class="col-md-6  col-lg-6 col-sm-6 col-xs-12">
										<h3 class="header smaller lighter blue"> Profile Update </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										


										<div class="table-header text-center">
										  Update information
										</div>

										<div>
											<form action="worker.php" method="post" enctype="multipart/form-data">
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
											 <tr>
											  <th>Name </th><td><input type="text" name="admin_name" class="form-control" value="<?php echo $profile['admin_name']; ?>"></td>
											</tr>
 											

											<tr>
											  <th>Mobile </th><td><input type="text" name="mobile" class="form-control" value="<?php echo $profile['mobile']; ?>"></td>
											</tr>	
											<tr>
											  <th>Address </th><td><textarea name="address" class="form-control" value="<?php echo $profile['address']; ?>"><?php echo $profile['address']; ?></textarea></td>
											</tr>
											<input type="hidden" name="admin_id" value="<?php echo $profile['admin_id']; ?>">
										    <tr>
											   <th> Photo <th>
											   	<input type="file"  name="image"></td>
											</tr>
											<tr>
											<th> </th><td><input type="submit" class="btn btn-defult" name="Profile_update" value="Update"></td>
											</tr>


												


											</table>
											
										</div>
									</div>
								</div>


						</div>


		
<?php include'footer.php' ?>