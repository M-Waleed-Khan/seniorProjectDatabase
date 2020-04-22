
<?php
include 'config.php';
include 'header.php';
?>

<?php

	$con=new PDO ("mysql:host=localhost;dbname=pic","root","");

	$id=$_GET['id'];
	
$sql=$con->prepare('SELECT * FROM image WHERE id=:id');
$sql->execute([':id'=>$id]);
$person=$sql->fetch(PDO::FETCH_OBJ);

	if(isset($_POST['signup'])){
		
	$adviser=$_POST['adviser'];
$batch=$_POST['batch'];
	$uploadfolder='pictures/'.$filename;
	move_uploaded_file($filetmp, $uploadfolder);



		$sql=$con->prepare("UPDATE image SET picture=:adviser,batch=:batch WHERE id=:id");
		$con->beginTransaction();
		$sql->execute(array(':adviser'=>$adviser,':id'=>$id,':batch'=>$batch));
		$con->commit();

	header("location:index1.php");
			

}

	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  

  <link rel="stylesheet" type="text/css" href="css/glyphicon.css">

  <style type="text/css">
  
    .bor{
      border-radius: 3%;
    }
  
  </style>
</head>
<body>



<div class="container  box1">
<form method="POST" enctype="multipart/form-data">
 

 


<center>Add Adviser : <input type="text" name="adviser" class="form-control col-sm-6"  placeholder="Adviser">
 </center>
  <center>Batch : <input type="text" name="batch" class="form-control col-sm-6"  placeholder="Batch">

	<br>
  <button  class="btn btn-primary" name="signup">update</button> 
   <a href="classdatabase.php"><button type="button" class="btn btn-primary">Back</button></a>
		     </center>  
</div>
</form>
<br>
<?php include 'footer.php';
?>
</div>
</body>
</html>
