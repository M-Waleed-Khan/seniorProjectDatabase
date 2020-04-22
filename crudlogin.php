
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/glyphicon.css">
</head>
<body>



</body>
</html>



<?php
include 'header.html';
session_start();

$con=new PDO ("mysql:host=localhost;dbname=crud","root","");
	

	if(isset($_POST['login'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$select=$con->prepare("SELECT * FROM crudreg WHERE name='$name' and email='$email'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		$data=$select->fetch();
		if($data['name']!=$name || $data['email']!=$email || $data['name']=="" || $data['email']=="" ){
			echo " <center><label class='text-danger'> Invalid email or password </center></label>";
			

		}
		
		else if($data['name']==$name and $data['email']==$email){
     
  $_SESSION["name"]=$name;
		header("location:index1.php");
}
		
	}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Signin or Signup.com</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="checks.css">
		<style type="text/css">
			
			#col{
				color: red;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
	

<div class="container" style="width: 500px;">
<form method="POST">
 

    <center><label id="size" >User Name *</label></center>
      
 


<center><input type="text" class="form-control" name="name" placeholder="First name" id="width"></center>

<center><label id="size">password*</label></center>

<center><input type="password" class="form-control" name="email" placeholder="password" id="width"></center>
<br>

<br>
	<center>  <button  class="btn btn-primary" name="login">Submit</button> 

		     <a href='crud.php' class='btn btn-primary'>Sign UP</a>  
		     </center> 
		     

<br> 
</div>
</form>

</body>
</html>
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
<br><br>
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
<?php

	include 'footer.html';
?>


