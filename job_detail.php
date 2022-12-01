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
		.srch{
		padding-left:700px;
		}

		body {
  		font-family: "Lato", sans-serif;
  		transition: background-color .5s;
		}

		.table {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		.table td, .table th {
		  border: 1px solid #ddd;
		  padding: 8px;

		}

		.table tr:nth-child(even){background-color: #f2f2f2;}

		.table tr:hover {background-color: #ddd;}

		.table th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #7fd3cb;
		  color: white;
		}
		
		.back{
			background: #F0FFFF;
			grid-area: nav;
			height: 50px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 30px 0 30px;
			border-bottom: 1px solid lightgray;
		}


		/*----------------edit-button-start-------------------*/
		.bg-modal{
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,0.6);
			position: absolute;
			top: 0;
			display: flex;
			align-items: center;
			display: none;
		}
		.modal-content{
			width: 400px;
			height: 300px;
			background-color: white;
			border-radius: 4px;
			padding: 20px;
			margin-left: 300px;
			text-align: center;
			position: relative;

		}

		.button1{
			background-color: #7fd3cb;
			padding: 10px;
			border-radius: 13%;

		}
		.rightform{
			margin-top: 60px;
		}
		.rightinput{
			font-size: 20px;
			padding: 10px;
			padding-right: 40px;
		}
		.close{
			position: absolute;
			top: 0;
			right: 14px;
			font-size: 42px;
			transform: rotate(45deg);
			cursor: pointer;
		}


		/*----------------edit-button-end-------------------*/

	</style>
	

</head>
<body>
	<div class="container">
		<nav class="navbar">
			<div class="nav_icon" onclick="toggleSidebar()">
				<i class="fa fa-bars"></i>
			</div>
			<div class="navbar__left">
				
				<a class="active_link" href="#">Admin</a>
				<a href="#">Employee</a>
			</div>
			<div class="navbar__right">
				<a href="#">
					<i class="fa fa-search"></i>
				</a>
				<a href="#">
					<i class="fa fa-clock-o"></i>
				</a>
				<a href="profile.php">
					<img width="30" src="image/avator.png">
				</a>
			</div>
		</nav>

		<main>
			<div class="back">
			<h1>Job Details Setup </h1>
			</div>
			<br>

			<button style="background-color:#7fd3cb; padding: 5px;  font-size: 20px; ">ADD+</button>

			<div class="srch">
		<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" style="width:300px; height: 25px"; type="text" name="search" placeholder="Search Company..." required="">
			
				<button style="background-color:#7fd3cb; width: 30px; height: 25px; " type="submit" name="submit" class="btn btn-default">
			

				<span class="fa fa-search"></span>
				
			</button><br>
		</form><br>
		
	</div>
					
		<div class="table">
			<?php

					$q=mysqli_query($db, "SELECT * FROM job_detail");

					echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color: #9ac5da;'>";

						echo "<th>"; echo "Code"; echo "</th>";
						echo "<th>"; echo "Name"; echo "</th>";

						echo "<th>"; echo "Pay Grade"; echo "</th>";
						echo "<th>"; echo "Emplyee Status"; echo "</th>";
						echo "<th>"; echo "Edit"; echo "</th>";
						echo "<th>"; echo "Delete"; echo "</th>";
					
					echo "</tr>";

					while($row=mysqli_fetch_assoc($q))
					{
						
						echo "<tr>";
						
							echo "<td>"; echo $row['code']; echo "</td>";
							echo "<td>"; echo $row['name']; echo "</td>";
							echo "<td>"; echo $row['paygrade']; echo "</td>";
							echo "<td>"; echo $row['employee_status']; echo "</td>";
							?>
					
							<td>
								<button class="ebutton" style="background-color: mediumseagreen; padding: 5px;" type="button" class="btn btn-success">EDIT</button>
							</td>


			<!---------------------------edit button start--------------------------------->


			<!---------------------------edit button end----------------------------------->
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

		<div class="bg-modal">
		<div class="modal-content">
			<div class="close">+</div>
			<div class="rightform">
			<form action="">
				<div style="text-align: center; font-size: 20px;font-family: sans-serif;"><b>Add Company Structure</b></div><br>
				
				<input class="rightinput" type="text" name="name" placeholder="Name"><br><br>
				<input class="rightinput" type="text" name="address" placeholder="Address"><br><br>
				<input class="rightinput" type="text" name="type" placeholder="Type"><br><br>
				<input class="rightinput" type="text" name="phone" placeholder="Phone"><br><br>
				<input class="rightinput" type="text" name="pabx" placeholder="PABX"><br><br>
				<input class="rightinput" type="text" name="fax" placeholder="FAX"><br><br>
				<input class="rightinput" type="text" name="email" placeholder="Email"><br><br>
				<button class="button1">Submit</button>
				
			</form>
			</div>
		</div>
	</div>

		<script type="text/javascript">
document.getElementById('button').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display='flex';
	}
	);
document.querySelector('.close').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display='none';
	}
	);
</script>
	</body>
	</html>
