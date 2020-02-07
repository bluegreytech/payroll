<?php 
$this->hrRights=getRights();
//echo "<pre>";print_r($this->hrRights['Leave']);die;
if(count($this->hrRights)==0 && !checkSuperHr())
{

}
?>
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active"> 
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							
							<?php  if((isset($this->hrRights['Hr'])) || checkSuperHr()){  ?>
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Hr</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>hr/hrlist"><span>List of Hr</span></a>
								</li>
								</ul>
							</li>
						<?php } if((isset($this->hrRights['Employee'])) || checkSuperHr()){  ?>
     
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>employee/emplist">List of Employees</a></li>
								<li><a href="<?php echo base_url();?>salarysetting/setsalary">Employee Set Salary </a></li>							
								</ul>
							</li>
						<?php }  if((isset($this->hrRights['Leave'])) || checkSuperHr()){  ?>
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="fa fa-calendar-check-o"></i> <span>Leave</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
							
									<li><a href="<?php echo base_url();?>leave/empleavelist">List of Leaves<span class="badge badge-pill bg-primary float-right">1</span></a></li>
								</ul>
							</li>
							<?php } if((isset($this->hrRights['Payoll'])) || checkSuperHr()){  ?>
							<li class="submenu">
                                <a href="javascript:void(0);"><i class="la la-money"></i> <span>Payroll</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span>Payroll Input</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);"><span>Salary</span></a></li>
                                            <li><a href="<?php echo base_url();?>loan/loan_det"><span>loan</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Income Tax</span></a></li>
                                           <li><a href="<?php echo base_url();?>Claim/claim_det"><span>Reimbursement</span></a></li>
                                           <!--  <li class="submenu">
                                                <a href="javascript:void(0);"> <span>Bank Transfer</span> <span class="menu-arrow"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                </ul>
                                            </li> -->
                                          <!--   <li><a href="javascript:void(0);"> <span>Level 2</span></a></li> -->
                                        </ul>


                                    </li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span>Payout</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="<?php echo base_url();?>salarysetting/empchequelist"><span>Chaque / Cash Statement</span></a></li>
                                            <li><a href="<?php echo base_url();?>salarysetting/empbanklist"><span>Bank Transfer</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Payslip</span></a></li>
                                           <!--  <li class="submenu">
                                                <a href="javascript:void(0);"> <span>Bank Transfer</span> <span class="menu-arrow"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                </ul>
                                            </li> -->
                                          <!--   <li><a href="javascript:void(0);"> <span>Level 2</span></a></li> -->
                                        </ul>
                                        

                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> <span>Level 1</span></a>
                                    </li>
                                </ul>
                            </li>
                           <?php } if((isset($this->hrRights['Attendance'])) || checkSuperHr()){  ?>
     
							<li class="submenu">
								<a href="<?php echo base_url();?>Dashboard"><i class="la la-user"></i> <span>Attendance</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url();?>attendance/attendancelist">List of Attendance</a></li>
								</ul>
							</li>
							<?php } if((isset($this->hrRights['Setting'])) || checkSuperHr()){  ?>
     
							<li class="submenu">
								   <a href="javascript:void(0);"><i class="la la-cog"></i> <span>Setting</span> <span class="menu-arrow"></span></a>								
								<ul style="display: none;">
									<?php if((isset($this->hrRights['Setting'])) &&$this->hrRights['Setting']->rights_view==1 || checkSuperHr()){ ?>
                                    <li><a href="<?php echo base_url();?>company/company_setting"> <span>Company setting</span> </a></li>
                                	<?php } ?>
                                 <!--    <li><a href="<?php echo base_url();?>salarysetting/empbanklist"><span>Permisions</span></a></li> -->
                                 <?php if((isset($this->hrRights['LeaveType'])) &&$this->hrRights['LeaveType']->rights_view==1 || checkSuperHr()){ ?>
                                 	<li><a href="<?php echo base_url();?>holiday/holidaylist">List of Holidays</a></li>
                                 <?php } ?>
                                  <?php if((isset($this->hrRights['Holiday'])) &&$this->hrRights['Holiday']->rights_view==1 || checkSuperHr()){ ?>
									<li><a href="<?php echo base_url();?>leave/leavelist">List of Leave Type</a></li>
									   <?php } ?>
                                </ul>
							</li>
						<!-- <?php } if((isset($this->hrRights['Setsalarymonth'])) || checkSuperHr()){  ?>
							<li class="">
								<a href="<?php echo base_url();?>company/setsalarymonth"><i class="la la-cog"></i> <span>Set Salary Month</span> </a> -->
						<?php } if((isset($this->hrRights['Reports'])) || checkSuperHr()){  ?>
							
                         <!--       <li class="submenu">
								<a href="#"><i class="la la-list"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
								<li><a href="<?php echo base_url()?>Reports/reportsalary"><span>Total gross salary report</span></a>
								</li>
								<li><a href="<?php echo base_url()?>Reports/reportnetpaysalary"><span>Netpay salary report</span></a>
								</li>
								<li><a href="<?php echo base_url()?>Reports/empsalaryreport"><span>Employee wise  salary report</span></a>
								</li>
								</ul>
							</li> -->
						<?php } ?>
							<!-- <li class="">
								<a href="<?php echo base_url();?>salarysetting/reportsalary"><i class="la la-cog"></i> <span>Reports</span> </a>
								
							</li> -->
						</ul>
					</div>
                </div>
            </div>
				