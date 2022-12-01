<?php
	include "connection.php";

	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		.navbar{
			width: 100%;
			height: 70px;
			background-color: gray;

		}
		a{
			text-decoration: none;
			font-size: 20px;
			font-family: 'Redressed', cursive;
			position: absolute;
			top: 8px;
			right: 16px;
			font-size: 18px;
		}
	</style>
</head>
<body>

	<div class="navbar">
		<a style="color: white;" href="company_structure.php">company structure</a>
	</div>



	<div>
		<form action="", method="">
			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
			
		</form>

		<div class="wrapper">
			<?php
				$q=mysqli_query($db,"SELECT * FROM employee WHERE username='$_SESSION[username]';");
			 ?>
			 <h2 style="text-align: center;">My Profile</h2>
			 <?php
			 	$row=mysqli_fetch_assoc($q);
			 	echo "<div style='text-align:center'><img  height=150 width=150 src='image/avato.png '></div>";
			 ?>

			 <div style="text-align: center;"><b>Welcome</b>
			 <h4>
			 	<?php
			 		echo $_SESSION['username'];

			 	?>
			 </h4>
			 </div>
			 <?php  
			 	echo "<br>";
			 	echo "<table class='table table-bordered'>";
			 		echo "<tr>";
			 			echo "<td>";
			 				echo "<b> First Name: </b>";
			 			echo "</td>";
			 		
			 			echo "<td>";
			 				echo $row['first'];
			 			echo "</td>";
			 		echo "</tr>";


			 		echo "<tr>";
			 			echo "<td>";
			 				echo "<b> Last Name: </b>";
			 			echo "</td>";
			 		
			 			echo "<td>";
			 				echo $row['last'];
			 			echo "</td>";
			 		echo "</tr>";


			 		echo "<tr>";
			 			echo "<td>";
			 				echo "<b> Username: </b>";
			 			echo "</td>";
			 		
			 			echo "<td>";
			 				echo $row['username'];
			 			echo "</td>";
			 		echo "</tr>";


			 		echo "<tr>";
			 			echo "<td>";
			 				echo "<b> Roll: </b>";
			 			echo "</td>";
			 		
			 			echo "<td>";
			 				echo $row['id'];
			 			echo "</td>";
			 		echo "</tr>";

			 		echo "<tr>";
			 			echo "<td>";
			 				echo "<b> Contact: </b>";
			 			echo "</td>";
			 		
			 			echo "<td>";
			 				echo $row['contact'];
			 			echo "</td>";
			 		echo "</tr>";

			 	echo "</table>";
			 	echo "</br>";
			 ?>

		</div>
	</div>

</body>
</html>