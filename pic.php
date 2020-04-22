
<?php
include 'header.php';
?>

<?php

	$con=new PDO ("mysql:host=localhost;dbname=mydatabase","root","");

	$id=$_GET['id'];
	
$sql=$con->prepare('SELECT * FROM personal WHERE id=:id');
$sql->execute([':id'=>$id]);
$person=$sql->fetch(PDO::FETCH_OBJ);

	if(isset($_POST['signup'])){
		
	$file=$_FILES['file'];
$filename=$file['name'];
$filetmp=$file['tmp_name'];

$fileextension=explode(".", "$filename");
$fileend=strtolower(end($fileextension));

if($fileend=='jpg'||'jpeg'||'png')
{
	$uploadfolder='pictures/'.$filename;
	move_uploaded_file($filetmp, $uploadfolder);



		$sql=$con->prepare("UPDATE personal SET picture=:uploadfolder WHERE id=:id");
		$con->beginTransaction();
		$sql->execute(array(':uploadfolder'=>$uploadfolder,':id'=>$id));
		$con->commit();

	header("location:index1.php");
			
	
}
}

	?>

<br>
	<br>

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

			
<center><img class="bor" src="<?php echo $person->picture;?>" height="200px" width="200px"></center>




<br>
	<br>



<div class="container  box1">
<form method="POST" enctype="multipart/form-data">
 

 


<center><input type="file"   name="file"></center>
<center>
	<br>
	<br>
  <button  class="btn btn-primary" name="signup">update</button> 
   <a href="index1.php"><button type="button" class="btn btn-primary">Back</button></a>
		     </center>  
</div>
</form>
<br>
<?php include 'footer.php';
?>
</div>
</body>
</html>