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
					
									<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
										<h3 class="header smaller lighter blue"> Show information </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										


										<div class="table-header">
											All student account 
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
														<th>Sudent name </th>
														<th>Email</th>
														<th>mobile</th>
														<th>Subject</th>
														<th>Division</th>
														<th> Transition money </th>
													</tr>
												</thead>

												<tbody>

											<?php 
											$i = 1;
											$select = student_account($link);
											while($fetch = mysqli_fetch_array($select)){
											 ?>   
													<tr>
														<td class="center">
															 <?php echo $i++; ?>
															</label>
														</td>

														<td>
															<a href="#"> <?php echo $fetch['student']; ?> </a>
														</td>
														<td>
														
															<a href="#"><?php echo $fetch['email']; ?> </a>
													    
														</td>
														<td>
															<a href="#"> <?php echo $fetch['mobile']; ?> </a>
														</td>
														<td>
															<a href="#"> <?php echo $fetch['subject']; ?> </a>
														</td>
														<td>
															<a href="#"><?php echo $fetch['division']; ?>  </a>
														</td>
													
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<!-- <a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a> -->

																<a class="green" href="account_details.php?TransitionDetails=<?php echo $fetch['reg_id'] ?>">
																	<span class="glyphicon glyphicon-screenshot fa-3x"></span>
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