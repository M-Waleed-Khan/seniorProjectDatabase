<?php  
include 'config.php';
include 'header.php';
if(isset($_POST['submit']))
{
	$firstName=$_POST['firstname'];
	$lastName=$_POST['lastname'];
	$nick=$_POST['nick'];
	$email=$_POST['email'];
	$salary=$_POST['salary'];
	$sql=$con->prepare("INSERT INTO personal(firstName, lastName, nick, email, salary) VALUES (:firstName,:lastName,:nick,:email,:salary)");
	$con->beginTransaction();
	$sql->execute(array(':firstName'=>$firstName,':lastName'=>$lastName,':nick'=>$nick,':email'=>$email,':salary'=>$salary));
	$con->commit();
	echo "data inserted succesfully";
	header("refresh:1 ; url=index.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js></script>
<script src="js/jquery.js"></script>
</head>
<body>
<div class="container">
<h1>Insert New Record:</h1>
<form method="POST" class="form_horizontal">
<p>first name:<input type="text" name="firstname" maxlength="20"></p>
<p>Last Name:<input type="text" name="lastname" maxlength="20"></p>
<p>Nickname:<input type="text" name="nick" maxlength="15"></p>
<p>Email:<input type="text" name="email" maxlength="25"></p>
<p>Salary:<input type="integer" name="salary" maxlength="10"></p>
<p><input type="submit" name="submit" value="insert"></p>
</form>
</div>
</body>
</html>        

