
	<?php
	include 'header.html';
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form</title>
</head>
<body>
	<?php

	$con=new PDO ("mysql:host=localhost;dbname=logindb","root","");


	if(isset($_POST['signup'])){

		$username=$_POST['username'];
				$password=$_POST['password'];
	



		$sql=$con->prepare("insert into logintable(username,password) values 


			(:username,:password)");




		$con->beginTransaction();


		$sql->execute(array(':username'=>$username,':password'=>$password));
		$con->commit();
header("location:loginindex.php");
		}

	?>
	<br>
<!--FORMS-->
		<div class="container">
			<form>
				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Name">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password">
				</div>
				

				

				<div class="form-group">
					<button  class="btn btn-primary" name="signup">Submit</button> 
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
<?php
	include 'footer.html';
	?>