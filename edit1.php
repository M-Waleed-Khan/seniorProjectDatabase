
<?php
include 'header.php';
?>

<?php

	$con=new PDO ("mysql:host=localhost;dbname=mydatabase","root","");

	$id=$_GET['id'];
$sql='SELECT * FROM personal WHERE id=:id';
$stmt=$con->prepare($sql);
$stmt->execute([':id'=>$id]);
$personal=$stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['signup'])){
		$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
				$nick=$_POST['nick'];
		$email=$_POST['email'];
			$salary=$_POST['salary'];	
			
			
				
		$sql=$con->prepare("UPDATE personal SET firstName=:firstName,lastName=:lastName,nick=:nick,email=:email,salary=:salary WHERE id=:id");
		$con->beginTransaction();
		$sql->execute(array(':firstName'=>$firstName,':lastName'=>$lastName,':nick'=>$nick,':email'=>$email,':salary'=>$salary,':id'=>$id,));
		$con->commit();
	header("location:index1.php");

			
	}

	

	?>










	<!DOCTYPE html>
	<html>
	<head>
		<title>Signin or Signup.com</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="logindesign.css">
	</head>
	<body>
	<center><div class="alert alert-info setting" role="alert">
  Complete the following steps below to Update:
</div></center>

<div class="container  box1">
<form method="POST" enctype="multipart/form-data">
 

    <center><label id="size" >Name*</label></center>
    
 

<center><input type="text" class="form-control" name="firstName" value="<?=$personal->firstName?>" placeholder="First name" id="width"></center>

  <center><label id="size">Project Name*</label></center>


<center><input type="text" class="form-control" name="lastName" value="<?=$personal->lastName?>" placeholder="Last name" id="width"></center>
  
<center><label id="size"> Department*</label></center>
 	

<center><input type="text" class="form-control" name="nick" value="<?=$personal->nick?>" placeholder="nick name" id="width"></center>

<center><label id="size"> Project Details*</label></center>
 


<center><input type="text" class="form-control" name="email" value="<?=$personal->email?>"  placeholder="Email" id="width"></center>
    
<center><label id="size">Semester*</label></center>

<center><input type="text" value="<?=$personal->salary?>" class="form-control" name="salary" placeholder="salary" id="width"></center>

 
<br>

	<center>  <button  class="btn btn-primary" name="signup">update</button> 
		     </center>  
</div>
</form>
<br>
<?php include 'footer.php';
?>
</body>
</html>