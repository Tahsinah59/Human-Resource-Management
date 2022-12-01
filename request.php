<?php
	include "connection.php";
	error_reporting(0);
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
		.adjust1{
			padding-right: 50px;
		}
		.adjust2{
			padding-right: 108px;
		}
		.adjust3{
			padding-right: 80px;
		}
		.adjust4{
			padding-right: 35px;
		}
		.adjust5{
			padding-right: 90px;
		}
		.adjust6{
			padding-right: 0px;
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
				<a href="#">
					<img width="30" src="image/avator.png">
				</a>
			</div>
		</nav>

		<main>
			<div class="back">
			<h1>Request for job</h1>
			<div class="lower_heading">
					<a  class="active_link" href="request.php">Apply for job</a>
					<a  href="show_list.php">Show list</a>
					
				</div>
			</div>
			
			<br>
			<!-----------------------------------request form start-------------------->
			<section>
			<div class="box2">
				
				
			<form name="registration"; action=""; method="post">
				<div class="login">
				<label class="adjust1">Full Name :</label>&nbsp &nbsp &nbsp
				
				<input class="form-control1" type="text" name="first" placeholder="first name" required="">
				&nbsp &nbsp &nbsp 
				<input class="form-control1" type="text" name="last" placeholder="last name" required="">

				<br><br>
				<label class="adjust2">ID:</label>&nbsp &nbsp &nbsp
				<input class="form-control3" type="text" name="id" placeholder="id" required=""><br><br>

				<label class="adjust3">CGPA:</label>&nbsp &nbsp &nbsp
				<input class="form-control" type="text" name="cgpa" placeholder="cgpa" required=""><br><br>

				<label class="adjust4">Educational :</label>&nbsp &nbsp &nbsp
				<input class="form-control" type="text" name="education" placeholder="Education" required=""><br><br>

				<label class="adjust5">Skill:</label>&nbsp &nbsp &nbsp
				<input class="form-control" type="text" name="skill" placeholder="Skill" required=""><br><br><br>

				<label class="adjust6">Current Address:</label>&nbsp &nbsp &nbsp
				<input class="form-control2" type="text" name="caddress" placeholder="Current Address"  required=""><br><br><br>
				
				
				<input class="btn btn-default" type="submit" name="submit" value="Submit" style="color: #ec0808; width:70px; height: 30px"><br>
			</div>
			</form>
			
				
			</div>
			
		
	</section>
						
		</main>


		<!-----------php part------------>

		<?php

			
			if(isset($_POST['submit'])){
			mysqli_query($db,"INSERT INTO `list_of_request` VALUES( '$_POST[first]','$_POST[last]','$_POST[id]','$_POST[cgpa]','$_POST[education]','$_POST[skill]','$_POST[caddress]');");
				}

			

			
		?>
		



		<!------------php part-------------->

	
		

	<!-----------------------------------request end--------------------------->	

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

	<?php
	if(isset($_POST['submit']))
	{
		$count=0;
		$sql="SELECT username FREOM admin";
		$res=mysqli_query($db,$sql);
		while($row=mysqli_fetch_assoc($res)){
				if($row['username']==$_POST['username']){
					$count=$count+1;
				}

		}

		if($count==0){

		mysqli_query($db,"INSERT INTO `admin` VALUES( '' , '$_POST[first]','$_POST[last]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[roll]','pro.png');");

	?>
	<script type="text/javascript">
		alert("Registration Succesful");
	</script>

	<?php
	}
	else{
		?>
		<script type="text/javascript">
		alert("The username is always exist.");
	</script>s
	<?php
	}
	}
	?>
	

	<!--We will use Apex Charts cdn-->
	<!--<script src="https://cdn.jsdeliver.net/npm/apexcharts"></script>
	<script src="script.js"></script>
	<script>-->
	</body>
	</html>
