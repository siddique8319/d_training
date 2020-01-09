
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title> doofazit.com </title>   
		 <link rel="shortcut icon" href="../img/logo.png"> 
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		 <link rel="shortcut icon"  type="image/x-icon"  href="img/logo.png">

		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		
		<script src="assets/js/ace-extra.min.js"></script>
				<!-- --------------textarea editor-------------- -->
	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 



	</head>
	<style type="text/css">
		.padding{
			padding: 0px;
		}
	</style>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<?php echo admin_information($link,$_SESSION['admin_info']); ?>
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo admin_photo($link,$_SESSION['admin_info']); ?>" alt="" />
								<span class="user-info">
									<small><?php echo admin_information($link,$_SESSION['admin_info']); ?></small>
								
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>
								<li>
									<a href="change_password.php">
										<i class="ace-icon fa fa-cog"></i>
										Change password
									</a>
								</li>
								<li>
									<a href="logout.php">
										<!-- <i class="ace-icon fa fa-user"></i> -->
										<i class="fa fa-sign-out" aria-hidden="true"></i>
										Logout
									</a>
								</li>

								<li class="divider"></li>

								<li>
								    
									
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="index.php" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Home
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Student Information
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="student_registration.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Student Registration
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="student_registrationCancel.php">
											<i class="menu-icon fa fa-caret-right"></i>
											 Registration Cancel
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="student_approve.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Approve Student
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="student_complete.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Complete Student
										</a>

										<b class="arrow"></b>
									</li>

									


									
								</ul>
							</li>
							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Student Account
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="studentPayment.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Student Payment
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="studentPayment_view.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Student Payment view
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="student_account.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Student account
										</a>

										<b class="arrow"></b>
									</li>

									
								</ul>
							</li>
							<!-- <li class="">
								<a href="">
								 <i class="menu-icon fa fa-caret-right"></i>
									Populer Product
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="">
								 <i class="menu-icon fa fa-caret-right"></i>
									Populer show
								</a>

								<b class="arrow"></b>
							</li> -->

							
						</ul>
					</li>
					<li class="">
						<a href="index.php" class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text">
							Client information
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									 Order view
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="client_order.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Order request
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="order_approve.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Order Approve
										</a>

										<b class="arrow"></b>
									</li>
									<!-- <li class="">
										<a href="">
											<i class="menu-icon fa fa-caret-right"></i>
											Order Cancel
										</a>

										<b class="arrow"></b>
									</li>
									 -->
								</ul>
							</li>
							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Client Account
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="clientPayment.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Client Payment
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="clientPayment_view.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Client Payment view
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="client_account.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Client account
										</a>

										<b class="arrow"></b>
									</li>

									
									
								</ul>
							</li>
							<!-- <li class="">
								<a href="">
								 <i class="menu-icon fa fa-caret-right"></i>
									Populer Product
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="">
								 <i class="menu-icon fa fa-caret-right"></i>
									Populer show
								</a>

								<b class="arrow"></b>
							</li> -->

							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">Employ</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="employer_create.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employ create
								</a>

								<b class="arrow"></b>
							</li>

							
							<li class="">
								<a href="employer_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employer view
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="employerPayment.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employer Salary
								</a>

								<b class="arrow"></b>
							</li>
						
							<li class="">
								<a href="employerPaymentView.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employ Salary view
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="employerAccount.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Employ Account
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Office Account</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							


							<!-- <li class="">
								<a href="{{route('GalleryAdmin.index')}}" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									  Gallery 
									<b class="arrow fa fa-angle-down"></b>
							 </a> 

							<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="">
											<i class="menu-icon fa fa-caret-right"></i>
										  Contact
										</a> 

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="">
											<i class="menu-icon fa fa-caret-right"></i>
											Be A part
										</a>

										<b class="arrow"></b>
									</li>

									
								</ul>
							</li> -->

							


							<li class="">
								<a href="office_account.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add account
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="officeAccountView.php">
									<i class="menu-icon fa fa-caret-right"></i>
									 Balance Credit
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="officeAccountCostView.php">
									<i class="menu-icon fa fa-caret-right"></i>
									 Balance Debit
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="officeAccountDetails.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Account Details
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Other's </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							


							<li class="">
								<a href="" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									  Gallery 
									 <b class="arrow fa fa-angle-down"></b>
							    </a> 

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="student_gallery.php">
											<i class="menu-icon fa fa-caret-right"></i>
										 Student Gallery
										</a> 

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="student_galleryView.php">
											<i class="menu-icon fa fa-caret-right"></i>
										 Student Gallery view
										</a> 

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="teacher_gallery.php">
											<i class="menu-icon fa fa-caret-right"></i>
										 Teacher Gallery
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="teacherGalleryView.php">
											<i class="menu-icon fa fa-caret-right"></i>
										 Teacher Gallery view
										</a>

										<b class="arrow"></b>
									</li>
									

									
								</ul>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Student Works
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="course.php">
											<i class="menu-icon fa fa-caret-right"></i>
										Subject Category
										</a> 

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="studentWork.php">
											<i class="menu-icon fa fa-caret-right"></i>
										 Student Project
										</a>

										<b class="arrow"></b>
									</li>

									
								</ul>
							</li>


							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									.............
								</a>

								<b class="arrow"></b>
							</li>
							

							
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text">Notice information</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="notice.php">
									<i class="menu-icon fa fa-caret-right"></i>
						         Add notice
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="notice_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
						         Notice View
								</a>

								<b class="arrow"></b>
							</li>

							<!-- <li class="">
								<a href="inbox.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Inbox
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="pricing.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Pricing Tables
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="invoice.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Invoice
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="timeline.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Timeline
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="search.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Search Results
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="email.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Templates
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="login.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li> -->
						</ul>
					</li>

					<li class="">
						<a href="">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Contact us </span>
						</a>

						<b class="arrow"></b>
					</li>

					<!-- <li class="">
						<a href="">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Create admin

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li> -->

					<!-- <li class="">
						<a href="gallery.html">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Gallery </span>
						</a>

						<b class="arrow"></b>
					</li> -->

					<?php 
					if($_SESSION['admin_info']==1){

					 ?>
				

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Admin information

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="create_admin.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Create
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="admin_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									View
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>

					<?php } ?>
				</ul>


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>