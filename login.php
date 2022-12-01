
<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.total{
			width: 100%;
			height: 650px;
			background-color: gray;
		}
		.login{

			width: 300px;
			height: 200px;
			padding-top: 10px;
			padding-left: 50px;
			padding-bottom: 20px;
			background-color: green;
		}
		.soro{
			padding-top: 200px ;
			padding-left: 500px;
		}
	</style>

</head>
<body>
	<div class="total">
		<div class="soro">
		<div class="login">
			<form action="" method="POST">
				<h2 style="margin-left: 80px;">log in</h2>
				<input style="width: 230px; height: 20px;" type="text" name="username" placeholder="username"><br><br>
				<input style="width: 230px; height: 20px;" type="password" name="password" placeholder="password"><br><br>
				<button type="submit" name="submit">log in</button><br>
			</form>
		</div>
		</div>
	</div>

<?php

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query="SELECT * FROM `employee`  WHERE username='$username' && password='$password'";
		$data=mysqli_query($db,$query);
		$total=mysqli_num_rows($data);

	
		if($total==1){
			header('location: index.php');
		}
		else
			echo "login fail";
	
}
?>


</body>
</html>