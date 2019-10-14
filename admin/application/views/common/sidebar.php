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

								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-user-circle" aria-hidden="true"></i> <span>Admin</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

									<li><a href="<?php echo base_url();?>adminmaster/adminlist"><span>List of Admin</span></a></li>			

								</ul>

							</li>



							<li class="submenu">

								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-building-o" aria-hidden="true"></i><span>Company</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">
									<li><a href="<?php echo base_url();?>company/companytype"><span>Type Company </span></a></li>
									<li><a href="<?php echo base_url();?>company/compliance"><span>Compliance </span></a></li>
									<li><a href="<?php echo base_url();?>company"><span>Company</span></a></li>
									<li><a href="<?php echo base_url();?>company/Sendnotification"><span>Send Notification</span></a></li>
									<li><a href="<?php echo base_url();?>invoice">Invoice Report </a></li>
									<li><a href="<?php echo base_url();?>leave/leavelist">Leave Type</a></li>
								</ul>
							</li>



							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-building-o" aria-hidden="true"></i><span>Company Qutation</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="<?php echo base_url();?>invoice/quotation_list">List of Company Qutation</a></li>
								</ul>

							</li>



							<?php

							}

							?>	



							<li class="submenu">

								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-user-o" aria-hidden="true"></i> <span>Hr</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

								<li><a href="<?php echo base_url();?>hr"><span>List of Hr</span></a></li>

								</ul>

							</li>



							<li class="submenu">

								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-users" aria-hidden="true"></i><span>Employees</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

								<li><a href="<?php echo base_url();?>employee">List of Employees</a></li>
                                <li><a href="<?php echo base_url();?>Attendance">Employee Attendance</a></li>
								<!-- <li><a href="<?php //echo base_url();?>employeesalary">Employee Salary </a></li> -->

								</ul>

							</li>



						    <!-- <li class="submenu">

								<a href="<?php //echo base_url();?>Dashboard"><i class="fa fa-calendar-check-o"></i> <span>Leave</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

								<li><a href="<?php //echo base_url();?>holiday/holidaylist">List of Holidays</a></li>

									<li><a href="<?php// echo base_url();?>leave/leavelist">List of Leave Type</a></li>

								</ul>

							</li> -->



							<!-- <li class="submenu">

								<a href="<?php// echo base_url();?>Dashboard"><i class="fa fa-clipboard" aria-hidden="true"></i> <span>Invoice</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

								<li><a href="<?php// echo base_url();?>invoice"> List of Invoice Report </a></li>

								</ul>

							</li> -->



							<!-- <li class="submenu">

								<a href="<?php //echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Attendance</span> <span class="menu-arrow"></span></a>

								<ul style="display: none;">

								<li><a href="<?php// echo base_url();?>attendance">List of Attendance</a></li>

								</ul>

							</li> -->



						</ul>

					</div>

                </div>

            </div>



			<!-- /Sidebar -->