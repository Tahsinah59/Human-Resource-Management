<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Dashboard</title>

</head>
<body>
	<div class="container">
		<nav class="navbar">
			<div class="nav_icon" onclick="toggleSidebar()">
				<i class="fa fa-bars"></i>
			</div>
			<div class="navbar__left">
				<a href="#">Subscribers</a>
				<a href="#">Video Management</a>
				<a class="active_link" href="#">Admin</a>
			</div>
			<div class="navbar__right">
				<a href="#">
					<i class="fa fa-search"></i>
				</a>
				<a href="#">
					<i class="fa fa-clock-o"></i>
				</a>
				<a href="login.php">
					<img width="30" src="image/avator.png">
				</a>
			</div>
		</nav>

		<main>
			<div class="main__container">
				<div class="main__title">
					<img src="image/hello.png" alt="">
					<div class="maun__greeting">
						<h1>Human Resource Management </h1>
						<p>Welcome to your Admin <b>Dashboard</b></p>
					</div>
					
				</div>
				<div class="main__cards">
					<div class="card">
						<i class="fa fa-user-o fa-2x text-lightblue"></i>
						<div class="card__inner">
							<p class="text-primary-p">People</p>
							<span class="font-bold text-title">57</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-calendar fa-2x text-red"></i>
						<div class="card__inner">
							<p class="text-primary-p">Company Structure</p>
							<span class="font-bold text-title">24</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-video-camera fa-2x text-yellow"></i>
						<div class="card__inner">
							<p class="text-primary-p">Users</p>
							<span class="font-bold text-title">32</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-thumbs-up fa-2x text-green"></i>
						<div class="card__inner">
							<p class="text-primary-p">Projects</p>
							<span class="font-bold text-title">40</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-graduation-cap fa-2x text-yellow"></i>
						<div class="card__inner">
							<p class="text-primary-p">Qualification</p>
							<span class="font-bold text-title">44</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-question fa-2x text-green"></i>
						<div class="card__inner">
							<p class="text-primary-p">Request</p>
							<span class="font-bold text-title">25</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-archive fa-2x text-red"></i>
						<div class="card__inner">
							<p class="text-primary-p">Overtime</p>
							<span class="font-bold text-title">65</span>
						</div>
					</div>

					<div class="card">
						<i class="fa fa-life-ring fa-2x text-orange"></i>
						<div class="card__inner">
							<p class="text-primary-p">Training</p>
							<span class="font-bold text-title">45</span>
						</div>
					</div>
					
				</div>

				<div class="charts">
					<div class="charts__left">
					<div class="charts__left__title">
						<div>
							<h1>Daily Reports</h1>
							<p>Cupertino, California, USA</p>
						</div>
						<i class="fa fa-usd"></i>
					
					<div id="apex1"></div>
				</div>
			</div>

					<div class="charts__right">
						<div class="charts__right__title">
							<div>
								<h1>Stats Report</h1>
								<p>Cupertino, California, USA</p>
							</div>
							<i class="fa fa-usd"></i>
						</div>
						<div class="charts__right__cards">
							<div class="card1">
								<h1>Income</h1>
								<p>$75,300</p>
							</div>

							<div class="card2">
								<h1>Sales</h1>
								<p>$175,300</p>
							</div>

							<div class="card3">
								<h1>Users</h1>
								<p>5,300</p>
							</div>

							<div class="card4">
								<h1>Order</h1>
								<p>1300</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>

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

