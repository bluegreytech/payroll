<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="">
		<meta name="robots" content="noindex, nofollow">
        <title>Payroll System</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>default/assets/img/favicon.png">
      
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/line-awesome.min.css">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/style.css">

        <!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap-datetimepicker.min.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/dataTables.bootstrap4.min.css"> 
     <!--   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> -->
    <!--     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
       <link rel="stylesheet" href="<?php echo base_url(); ?>default/css/buttons.bootstrap4.min.css">
      <!--   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.bootstrap4.min.css"> --> 
		<!-- Calendar CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/fullcalendar.min.css">
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
      
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- External -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/bootstrap-select.css" />
	
	
	
		
</head>

<?php
           if(check_admin_authentication())
           {
			
			$ProfileImage=$this->session->userdata('ProfileImage');
  ?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Loader -->
			<!--div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div-->
			<!-- /Loader -->
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="<?php echo base_url(); ?>home/dashboard" class="logo">
						<img src="<?php echo base_url(); ?>default/img/logo.png" width="40" height="40" alt="Payroll System">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
                	<?php // echo  $this->session->userdata('companyid');
                	$cmpdetail= getOneCompany($this->session->userdata('companyid'));
                	// echo "<pre>";print_r($cmpdetail);
                	if(!empty($cmpdetail)){ ?>
                       <h3><?php echo strtoupper($cmpdetail->companyname); ?></h3>
                	<?php }else{ ?>
                		<h3>PAYROLL SYSTEM</h3>
                	<?php } ?>
                	 
					
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
					
					
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="notification.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notification.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notification.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notification.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="notification.php">
											<div class="media">
												<span class="avatar">
													<img alt="" src="<?php echo base_url(); ?>upload/no_image/user_no_image.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="notification.php">View all Notifications</a>
							</div>
						</div>
					</li>
				   <?php $admin_profile=  get_one_admin($this->session->userdata('hr_id')); 
                                          //  echo "<pre>";print_r($admin_profile->ProfileImage);die;
                         ?>
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
							
							  <?php 
							   if(($admin_profile->ProfileImage!='' && file_exists(base_path().'/upload/hr/'.$admin_profile->ProfileImage))){   ?>
							
							
								<img src="<?php echo base_url(); ?>upload/hr/<?php echo $admin_profile->ProfileImage; ?>" alt="">
							<?php
							}
							else
							{
							?>
								<img src="<?php echo base_url(); ?>upload/no_image/user_no_image.png" alt="">
							<?php
							}
							?>
								
							<span class="status online"></span></span>
							<span><?php echo $admin_profile->FullName;?> <?php //echo $this->session->userdata('LastName');?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url();?>home/profile/">My Profile</a>
							<a class="dropdown-item" href="<?php echo base_url();?>home/change_password">Change Password</a>
							<a class="dropdown-item" href="<?php echo base_url();?>Login/logout">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/admin_master_profile/">My Profile</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/change_password/">Change Password</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Login/logout">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->

			<?php 
                 }
       ?>         

