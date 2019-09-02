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

		<!-- Calendar CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/css/fullcalendar.min.css">
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
      
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- External -->
		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
		 -->


</head>

<?php
          if($this->session->userdata('EmailAddress'))
          {
			$UserId=$this->session->userdata('UserId');
			$RoleId=$this->session->userdata('RoleId');
			$FirstName=$this->session->userdata('FirstName');
			$LastName=$this->session->userdata('LastName');
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
                    <a href="index.php" class="logo">
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
					<h3>PAYROLL SYSTEM</h3>
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
													<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-02.jpg">
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
													<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-03.jpg">
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
													<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-06.jpg">
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
													<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-17.jpg">
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
													<img alt="" src="<?php echo base_url(); ?>default/img/profiles/avatar-13.jpg">
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
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<!--li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets\img\profiles\avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets\img\profiles\avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets\img\profiles\avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets\img\profiles\avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets\img\profiles\avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Messages</a>
							</div>
						</div>
					</li-->
					<!-- /Message Notifications -->
	
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
							
							  <?php 
							   if(($ProfileImage!='' && file_exists(base_path().'/upload/admin/'.$ProfileImage))){ ?>
							
							
								<img src="<?php echo base_url(); ?>upload/admin/<?php echo $this->session->userdata('ProfileImage'); ?>" alt="">
							<?php
							}
							else
							{
							?>
								<img src="<?php echo base_url(); ?>uploads/default/avtar.jpg" alt="">
							<?php
							}
							?>
								
							<span class="status online"></span></span>
							<span><?php echo $this->session->userdata('FirstName');?> <?php echo $this->session->userdata('LastName');?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/admin_master_profile/">My Profile</a>
							<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/change_password/<?php echo $UserId ;?>">Change Password</a>
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
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/admin_master_profile/<?php echo $UserId ;?>">My Profile</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/change_password/<?php echo $UserId ;?>">Change Password</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Login/logout">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->

			<?php 
                  }
       ?>         