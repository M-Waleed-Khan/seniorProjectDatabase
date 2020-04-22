


<?php
include 'header.php';

    $con=new PDO ("mysql:host=localhost;dbname=mydatabase","root","");
$firstName=$_REQUEST["firstName"];

$checkuser=$con->prepare("SELECT * FROM personal WHERE firstName=:firstName OR id=:firstName");
 
$checkuser->execute([':firstName'=>$firstName]);
if($checkuser->rowCount()>0){
  echo "<br>";
echo "<center><h2>Record matched with list</h2></center>";
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
      border-radius: 5%;
    }
   
  </style>
</head>
<body>

  <div class="container">

    <table class="table table-bordered table-striped table-hover text-center">
      <br>
  <tr>
 
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Nick</th>
  <th>Email</th>
  <th>Salary</th>
 <th>Profile Image</th>
  </tr>
	
<?php
while($dta=$checkuser->fetch())
{
?>
   <tr>
   	<td><?php echo $dta["firstName"];?></td>
   		<td><?php echo $dta["lastName"];?></td>
   			<td><?php echo $dta["nick"];?></td>
   				<td><?php echo $dta["email"];?></td>
   					<td><?php echo $dta["salary"];?></td>

<td><center><img class="sty" src="<?php echo $dta["picture"];?>" height="100px" width="100px"></center></td>

</tr>

<?php
}
}
?>
</table>
</div>

<center><a href="index1.php"><button type="button" class="btn btn-primary">Back</button></a></center>
<br>


</body>
</html>
<?php
include 'footer.php'
?>