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
										<h3 class="header smaller lighter blue"> Show information </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										


										<div class="table-header">
										All sub-admin view
										</div>

										<!-- <div class="col-md-8 col-md-offset-2">
         									
              									<div class="alert alert-success text-center">
                 									 {{ session('success') }}
              									</div>
         								
          								</div> -->
										<div>
											<table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Name</th>
														
														<th>Email</th>
														<th>password</th>
														<th>Mobile</th>
														<th>Address</th>
														<th>Photo</th>
													
														<th> Edit / Delete</th>
													</tr>
												</thead>

												<tbody>

											<?php 
											$i = 1;
											$select = sub_adminView($link);
											while($fetch = mysqli_fetch_array($select)){
											 ?>   
													<tr>
														<td class="center">
															 <?php echo $i++; ?>
															</label>
														</td>

														<td>
															<a href="#"> <?php echo $fetch['admin_name'];?> </a>
														</td>
														<td>
														
															<a href="#"><?php echo $fetch['email']; ?> </a>
													    
														</td>
														<td>
															<a href="#"> <?php echo $fetch['password']; ?> </a>
														</td>

														<td>
															<a href="#"> <?php echo $fetch['mobile']; ?> </a>
														</td>
														<td>
															<a href="#"> <?php echo $fetch['address']; ?> </a>
														</td>
														
														<td>
															<a href="#"> <img src="<?php echo $fetch['image'];?>" style="height: 80px;"></a>
														</td>
													
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<!-- <a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a> -->

																<a class="green" href="create_admin.php?payment_edit=<?php echo $fetch['admin_id']; ?>">
																	<span class="glyphicon glyphicon-edit fa-2x"></span>
																</a>

																<a class="red" href="delete.php?Admin_delete=<?php echo $fetch['admin_id']; ?>">
															
																	<i class="fa fa-times fa-2x" aria-hidden="true"></i>
																</a>
															</div>

															
														</td>
													</tr>
													<?php } ?>

										
													
												</tbody>


											</table>
											
										</div>
									</div>
								</div>


						</div>


		
<?php include'footer.php' ?>