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
										 Office Credit Account View
										</div>

										
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
														<th>Title </th>
														<th>Amount</th>
														<th>Submit date</th>
														<th>Description</th>
														<th>Month</th>
														<th>Admin</th>
														<th> Edit / Delete</th>
													</tr>
												</thead>

												<tbody>

											<?php 
											$i = 1;
											$select = office_accountEarn($link);
											while($fetch = mysqli_fetch_array($select)){
											 ?>   
													<tr>
														<td class="center">
															 <?php echo $i++; ?>
															</label>
														</td>

														<td>
															<a href=""> <?php echo $fetch['title']; ?> </a>
														</td>
														<td>
														
															<a href="#"><?php echo $fetch['amount']; ?> </a>
													    
														</td>
														<td>
															<a href="#"> <?php echo $fetch['submit_date']; ?> </a>
														</td>
														<td>
															<a href="#"> <?php echo $fetch['description']; ?> </a>
														</td>
														
														<td>
															<a href="#"><?php echo $fetch['month_date']; ?>  </a>
														</td>
														<td>
														<a href="#"><?php echo admin_information($link,$fetch['admin_id']); ?>  </a>
														</td>
													
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<!-- <a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a> -->

																<a class="green" href="office_account.php?payment_edit=<?php echo $fetch['account_id']; ?>">
																	<span class="glyphicon glyphicon-edit fa-2x"></span>
																</a>

																<a class="red" href="delete.php?officeAccount_delete=<?php echo $fetch['account_id']; ?>">
															
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