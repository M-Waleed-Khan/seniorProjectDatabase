<?php
	include 'header.html';
	session_start();
	$message = ""; 
	try
	{
		$con =new PDO ("mysql:host=localhost;dbname=logindb","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (isset($_POST["login"])) {
			# code...
			if (empty($_POST["username"]) || empty($_POST["password"])) {
				# code...
				 $message = '<label>All fields are required</label>';
			}
			else
			{
				$query = "SELECT * from logintable where username = :username and password = :password";
				$stmt = $con->prepare($query);
				$stmt->execute(array('username' => $_POST["username"],'password' => $_POST["password"]));
				$count = $stmt->rowCount();
				if ($count > 0 ) {
					# code...
					$_SESSION["username"] = $_POST["username"];
					header("location:index1.php");
				}
				else
				{
					$message = '<label>Wrong Data</label>'; 
				}
			}
		}
		
	}
	 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  

 include 'headerlogin.php';
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
	include 'footer.html';

?>
