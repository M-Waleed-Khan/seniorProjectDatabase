


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
	$con=new PDO ("mysql:host=localhost;dbname=crud","root","");


	if(isset($_POST['signup'])){

		$name=$_POST['name'];
			$lname=$_POST['lname'];
				$email=$_POST['email'];
	



		$sql=$con->prepare("insert into crudreg(name,lname,email) values 


			(:name,:lname,:email)");




		$con->beginTransaction();


		$sql->execute(array(':name'=>$name,':lname'=>$lname,':email'=>$email));
		$con->commit();
header("location:crudlogin.php");
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
	

<div class="container  box1">
<form method="POST" enctype="multipart/form-data">
 

    <center><label id="size" >User Name *</label></center>
      
 


<center><input type="text" class="form-control" name="name" placeholder="First name" id="width"></center>
<center><label id="size"> Lastname*</label></center>
 


<center><input type="text" class="form-control" name="lname" placeholder="Last name" id="width"></center>
    
<center><label id="size">password*</label></center>

<center><input type="password" class="form-control" name="email" placeholder="password" id="width"></center>
<br>

<br>
	<center>  <button  class="btn btn-primary" name="signup">Submit</button> 
		<a href='crudlogin.php' class='btn btn-primary'>Sign In</a>  
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
<div margin-bottom:500px>
	
</div>
<br>
<?php

	include 'footer.html';
?>