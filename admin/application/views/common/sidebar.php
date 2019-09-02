<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active"> 
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							<?php
							if($this->session->userdata('RoleId')==1 || $this->session->userdata('RoleId')==2){
							?>	
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Admin User</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url();?>adminmaster/adminlist"><span>List of Admin</span></a></li>			
								</ul>
							</li>
							
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Company</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url();?>company/companytype"><span>Company Type</span></a></li>
									<li><a href="<?php echo base_url();?>company/compliance"><span>Compliance </span></a></li>
									<li><a href="<?php echo base_url();?>company"><span>Company</span></a></li>
								</ul>
							</li>

							<?php
							}
							?>	

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Hr</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>hr"><span>List of Hr</span></a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Client</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>client"><span>List of Clients</span></a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Invoice</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>invoice"> List of Invoice Report </a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Leave</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>holiday">List of Holidays</a></li>
									<li><a href="<?php echo base_url();?>leave">List of Leave Type</a></li>
									<li><a href="<?php echo base_url();?>leave/Leaveadd">List of Leaves<span class="badge badge-pill bg-primary float-right">1</span></a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Attendance</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>attendance">List of Attendance</a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Overtime</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>overtime">List of Overtime</a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>employee">List of Employees</a></li>
								<li><a href="<?php echo base_url();?>employeesalary">Employee Salary </a></li>
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>HR Policy</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url();?>hrpolicy"> HR Policy </a></li>
									
								</ul>
							</li>

							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Salary Setting</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>salarysetting"> Salary Setting </a></li>
								</ul>
							</li>

						
							<!-- <li class="submenu">
								<a href="<?php// echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Hr Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php// echo base_url();?>hr"><span>Hr</span></a></li>
									<li><a href="<?php// echo base_url();?>client"><span>Clients</span></a></li>
									<li><a href="<?php// echo base_url();?>invoice"> Invoice Report </a></li>
									<li><a href="<?php// echo base_url();?>holiday">Holidays</a></li>
									<li><a href="<?php// echo base_url();?>leave">Leave Type</a></li>
									<li><a href="<?php// echo base_url();?>leave/Leaveadd">Leaves<span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="<?php// echo base_url();?>attendance">Attendance</a></li>
									<li><a href="<?php// echo base_url();?>overtime">Overtime</a></li>
									<li><a href="<?php// echo base_url();?>employee">All Employees</a></li>
									<li><a href="<?php// echo base_url();?>employeesalary">Employee Salary </a></li>
									<li><a href="<?php// echo base_url();?>hrpolicy"> HR Policy </a></li>
									<li><a href="<?php// echo base_url();?>salarysetting"> Salary Setting </a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Admin Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employees.php">All Employees</a></li>
									<li><a href="salary.php"> Employee Salary </a></li>
									<li><a href="holidays.php">Holidays</a></li>
									<li><a href="leave-type.php">Leave Type</a></li>
									<li><a href="leaves.php">Leaves<span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="attendance.php">Attendance</a></li>
									<li><a href="overtime.php">Overtime</a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-users"></i> <span> Employee Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employee-profile.php">Profile</a></li>
									<li><a href="leaves-employee.php">Leaves</a></li>
									<li><a href="attendance-employee.php">Attendance</a></li>
									<li><a href="holidays-employee.php">Holidays</a></li>
								</ul>
							</li> -->
							<!--li> 
								<a href="contacts.html"><i class="la la-book"></i> <span>Contacts</span></a>
							</li-->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="estimates.php">Estimates</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="payments.php">Payments</a></li>
									<li><a href="expenses.php">Expenses</a></li>
									</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="salary.php"> Employee Salary </a></li>
									<li><a href="salary-view.php"> Payslip </a></li>
									<li><a href="payroll-items.php"> Payroll Items </a></li>
								</ul>
							</li> -->
							<!-- <li> 
								<a href="events.php"><i class="la la-calendar"></i> <span>Events</span></a>
							</li> -->
							<!-- <li> 
								<a href="leads.php"><i class="la la-user-secret"></i> <span>Leads</span></a>
							</li> -->
							<!--li> 
								<a href="users.php"><i class="la la-user-plus"></i> <span>Users</span></a>
							</li-->
							<!--li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="expense-reports.php"> Expense Report </a></li>
									<li><a href="invoice-reports.php"> Invoice Report </a></li>
								</ul>
							</li-->
							<!-- <li> 
								<a href="theme-settings.php"><i class="la la-cog"></i> <span>App Setting</span></a>
							</li> -->
							<!--li> 
								<a href="components.php" target="_blank"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
							</li-->
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->