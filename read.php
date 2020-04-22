

<?php
include 'header.php';
  $con=new PDO ("mysql:host=localhost;dbname=mydatabase","root","");

  $id=$_GET['id'];
  
$sql='SELECT * FROM personal WHERE id=:id';
$stmt=$con->prepare($sql);
$stmt->execute([':id'=>$id]);
$person=$stmt->fetch(PDO::FETCH_OBJ);


  ?>

<?php

  $con=new PDO ("mysql:host=localhost;dbname=pic","root","");

  $id=$_GET['id'];
  
$sql='SELECT * FROM image WHERE id=:id';
$stmt=$con->prepare($sql);
$stmt->execute([':id'=>$id]);
$peson=$stmt->fetch(PDO::FETCH_OBJ);


  ?>

<?php

  $con=new PDO ("mysql:host=localhost;dbname=pic","root","");
  if(isset($_POST['signup'])){

    
$adviser=$_POST['adviser'];
$batch=$_POST['batch'];
    $sql=$con->prepare("insert into image(picture,userid,batch) values (:adviser,:id,:batch)");
    $con->beginTransaction();
    $sql->execute(array(':adviser'=>$adviser,':id'=>$id,':batch'=>$batch));
    $con->commit();
 header("location:index1.php");

}

  ?>
  <?php
  $query="SELECT * FROM image where userid=$id";

  $data=$con->query($query);

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
    .sty{
      border-radius: 3%;
    }
    .mar{
      margin-left: 50px;
    }
    .colr{
   
      color: white;
    margin-left: 350px;
    }

    #col{
      margin-right: -320px;
      margin-left: 190px;
    }
    

  </style>
</head>
<body>



  <div class="container">

<br>
 <img class="sty" src="<?php echo "$person->picture";?>" height="200px" width="200px"><br><a href="pic.php?id=<?php echo $person->id;?>"> <span style="color:red" class="glyphicon glyphicon-pencil mar"> Update</span></a>
  <br>
  <br>
    <table class="table table-bordered table-striped table-hover text-center">
  
  <tr>
  <th class="bg-dark text-white">ID</th>
  <th class="bg-dark text-white">Name</th>
  <th class="bg-dark text-white">ProjectName</th>
  <th class="bg-dark text-white">Department</th>
  <th class="bg-dark text-white">ProjectDetails</th>
  <th class="bg-dark text-white">Semester</th>
  </tr>
   <tr>
    <td><?php echo "$person->id";?></td>
<td><?php echo "$person->firstName";?></td>
<td><?php echo "$person->lastName";?></td>
<td><?php echo "$person->nick";?></td>
<td><?php echo "$person->email";?></td>
<td><?php echo "$person->salary";?></td> 
 
    <a href="deleted.php?id=<?php echo $person->id;?>" onclick="return confirm('Are you sure you want to delete ?')">  <span class="glyphicon glyphicon-trash" style="color:red"></span></a></td>
</tr>
</table>
</div>

  <div class="container">

    <table class="table table-bordered table-striped table-hover text-center">
      
  <tr>
<th class="bg-dark text-white">Batch No</th>
  <th class="bg-dark text-white">Adviser</th>
 
  <th class="bg-dark text-white">Edit</th>

  <th class="bg-dark text-white">Delete</th>
  </tr>
  <?php
  foreach ($data as $row) {
    ?>
  <tr>

<td><center><?php echo $row["batch"];?> </center></td>
<td><center><?php echo $row["picture"];?> </center></td>

<td><a href="newup.php?id=<?php echo $row["id"];?>" class="btn btn-info">update</a></td> 
 
    <td><a href="newdel.php?id=<?php echo $row["id"];?>" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger">delete</a></td>
    </tr>
  <?php
}
?>
  </table>
</div>
<br>
<br>
  <form method="POST" enctype="multipart/form-data">
 
 <center>Add Adviser : <input type="text" name="adviser" class="form-control col-sm-6"  placeholder="Adviser">
 </center>
  <center>Batch : <input type="text" name="batch" class="form-control col-sm-6"  placeholder="Batch">
 </center>
<br>
<center>  <button  class="btn btn-primary" name="signup" class="back">Upload</button>
   <a href="index1.php"><button type="button" class="btn btn-primary">Back</button></a>
         </center> 
   
         <br>
         <br>
</div>
</form>


</body>
</html>
<br>
<?php
include 'footer.html';
?>
