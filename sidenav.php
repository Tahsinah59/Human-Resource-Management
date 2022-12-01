<?php
include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	<?php include 'style.css';?>
	</style>
</head>
<body>

<div id="sidebar">
			<div class="sidebar__title">
				<div class="sidebar__img">
					 <img src="image/.png" alt="">
					 <h1>HRM</h1>
				</div>
				<i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar"></i>
			</div>

			<div class="sidebar__menu">
				<div class="sidebar__link active_menu_link">
					<i class="fa fa-home"></i>
					<a href="index.php">Dashboard</a>
				</div>
				<h2>ADMIN</h2>
			
				
				<div class="sidebar__link">
					<i class="fa fa-user-secret"></i>
					<a href="#">Admin Management</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-building-o"></i>
					<a href="company_structure.php">Company Structure</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-envelope-o"></i>
					<a href="job_detail.php">Job details Setup</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-graduation-cap"></i>
					<a href="qualification.php">Qualification Setup</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-life-ring"></i>
					<a href="training.php">Training Setup</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-tasks"></i>
					<a href="project.php">Project/Client Setup</a>
					
				</div>
				<div class="sidebar__link">
					<i class="fa fa-question"></i>
					<a href="request.php">Requests For job</a>
				</div>
				<h2>EMPLOYEE</h2>
				<div class="sidebar__link">
					<i class="fa fa-wrench"></i>
					<a href="employee.php">Employee List</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-archive"></i>
					<a href="overtime.php">Overtime</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-handshake-o"></i>
					<a href="contracts.php">Contracts</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-calendar-o"></i>
					<a href="schedule.php">Schedule</a>
				</div>
				
				<div class="sidebar__link">
					<i class="fa fa-sign-out"></i>
					<a href="leavepolicy.php">Leave Policy</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-calendar"></i>
					<a href="specialdays.php">Special Days</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-files-o"></i>
					<a href="applyforleave.php">Apply for leave</a>
				</div>
				<h2>PAYROLL</h2>
				<div class="sidebar__link">
					<i class="fa fa-money"></i>
					<a href="payroll.php">Payroll</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-briefcase"></i>
					<a href="paygrade.php">Paygrade</a>
				</div>
				<div class="sidebar__link">
					<i class="fa fa-power-off"></i>
					<a href="#">Log out</a>
				</div>
				
			</div>
		</div>

	</div>

	<!--We will use Apex Charts cdn-->
	<!--<script src="https://cdn.jsdeliver.net/npm/apexcharts"></script>
	<script src="script.js"></script>
	<script>-->
	</body>
	</html>
