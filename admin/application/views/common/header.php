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
		 	$AdminId=$this->session->userdata('AdminId');
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
                    <a href="<?php echo base_url();?>Dashboard" class="logo">
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
					<!-- <li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li> -->
					<!-- /Search -->
					
					
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<?php if($this->session->userdata('RoleId')==1)
							{
								echo "Super Admin";
							}
							else if($this->session->userdata('RoleId')==2)
							{
								echo "Admin";
							}
							?>
						</a>
						
					</li>
				
	
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
							
							<?php 
							if(($ProfileImage!=''))
							{ ?>
								<img src="<?php echo base_url(); ?>upload/admin/<?php echo $this->session->userdata('ProfileImage'); ?>" alt="">
							<?php
							}
							else
							{
							?>
								<img src="<?php echo base_url(); ?>upload/default/avtar.jpg" alt="">
							<?php
							}
							?>
								
							<span class="status online"></span></span>
							<span><?php echo $this->session->userdata('FirstName');?> <?php echo $this->session->userdata('LastName');?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/admin_master_profile">My Profile</a>
							<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/change_password">Change Password</a>
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
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/admin_master_profile">My Profile</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Adminmaster/change_password">Change Password</a>
						<a class="dropdown-item" href="<?php echo base_url();?>Login/logout">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->

			<?php 
                  }
       ?>         

