<?php

	$con=new PDO ("mysql:host=localhost;dbname=pic","root","");

	$id=$_GET['id'];
	
$delete=$con->prepare('DELETE FROM image WHERE id=:id');

$delete->execute([':id'=>$id]);
header("location:index1.php");
?>
