<?php
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	jQuery library 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	 Latest compiled JavaScript 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

	<link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&family=Flavors&family=Grand+Hotel&family=Grandstander&family=Kurale&family=Rye&display=swap" rel="stylesheet">



	<title>Dashboard</title>
	<style type="text/css">
		.back{
			background: #F0FFFF;
			grid-area: nav;
			height: 50px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 20px 0 20px;
			border-bottom: 1px solid lightgray;
		}

		.container{
			width: 100%;
		
			background-color: lightgray;

		}
		.size{
			padding-top: 100px;
			padding-left:200px;
		}
		input{
			padding: 10px;
			padding-right: 30px;
		}
		#input2{
			padding-right: 248px
		}
		.box2{
			text-align: center;

		}
		.form-control{
			margin-top: 20px;
			padding-left: 100px;
		}
		.lower_heading>a{
			margin-right: 30px;
			text-decoration: none;
			color: #a5aaad;
			font-size: 15px;
			font-weight: 700
		}

		.lower_heading .active_link{
			color: #265acc;
			border-bottom: 3px solid #265acc;
			padding-bottom: 12px;
		}
		a:hover{
			color: mediumseagreen;
		}
	</style>


	

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
				<a href="#">
					<img width="30" src="image/avator.png">
				</a>
			</div>
		</nav>

		<main>
			<div class="back">
			<h1>Request for job</h1>
			<div class="lower_heading">
					<a  href="request.php">Apply for job</a>
					<a class="active_link"  href="show_list.php">Show list</a>
					
				</div>
			</div>
			
			<br>


				<div class="srch">
		<form class="navbar-form" method="post" name="form1">
		
			<input style="width: 200px;" type="text" name="search" placeholder="Search Company..." required="">
			
				<button style="background-color:#9ac5da; width: 35px; height: 35px; " type="submit" name="submit">
			

				<span class="fa fa-search"></span>
				
			</button><br>
		</form>
	</div>
	<br><br>


		<div class="table">
			<?php

					$q=mysqli_query($db, "SELECT * FROM `list_of_request`");

					echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color: #9ac5da;'>";

						echo "<th>"; echo "First Nmae"; echo "</th>";
						echo "<th>"; echo "Last Name"; echo "</th>";

						echo "<th>"; echo "ID Nmber"; echo "</th>";
						echo "<th>"; echo "CGPA"; echo "</th>";
						echo "<th>"; echo "Education"; echo "</th>";
						echo "<th>"; echo "Skill"; echo "</th>";
						echo "<th>"; echo "Address"; echo "</th>";
						echo "<th>"; echo "Delete"; echo "</th>";
						
					
					echo "</tr>";

					while($row=mysqli_fetch_assoc($q))
					{
						
						echo "<tr>";
						
							echo "<td>"; echo $row['first']; echo "</td>";
							echo "<td>"; echo $row['last']; echo "</td>";
							echo "<td>"; echo $row['id']; echo "</td>";
							echo "<td>"; echo $row['cgpa']; echo "</td>";
							echo "<td>"; echo $row['education']; echo "</td>";
							echo "<td>"; echo $row['skill']; echo "</td>";
							echo "<td>"; echo $row['caddress']; echo "</td>";
							?>
					
							<td>
								<button style="background-color: tomato; padding: 5px;" type="button" class="btn btn-success">DELETE</button>
							</td>
							
							
						<?php	
						echo "</tr>";
						
					}
					echo "</table>";

					?>
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
