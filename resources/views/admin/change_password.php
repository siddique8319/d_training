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

					
									

									<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-md-6  col-lg-6 col-sm-6 col-xs-12">
										<h3 class="header smaller lighter blue"> Password information</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										
										<?php 
										$profile = Profile($link,$_SESSION['admin_info']);
										 ?>

										<div class="table-header text-center">
										  Update information
										</div>

										<div>
											<form action="worker.php" method="post" enctype="multipart/form-data">
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
											 <tr>
											  <th>Old Password </th><td><input type="password" name="old_password" class="form-control" placeholder="Old Password"></td>
											</tr>
 											

											<tr>
											  <th>New password </th><td><input type="password" name="new_password" class="form-control" placeholder="New password"></td>
											</tr>	
											<tr>
											  <th>Current password </th><td><input type="password" name="current_password" class="form-control" placeholder="Current password"></td>
											</tr>	
											
											<input type="hidden" name="admin_id" value="<?php echo $profile['admin_id']; ?>">
										 
											<tr>
											<th> </th><td><input type="submit" class="btn btn-defult" name="change_password" value="Change"></td>
											</tr>


												


											</table>
											
										</div>
									</div>
								</div>


						</div>


		
<?php include'footer.php' ?>