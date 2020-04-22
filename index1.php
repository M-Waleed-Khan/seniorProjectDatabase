

<?php
	include 'header.php';
	include 'config.php';
$number=3;
$count=$con->prepare("SELECT COUNT(id) FROM personal");
$count->execute();
$rows=$count->fetch();
$numrecord=$rows[0];
$numlinks=ceil($numrecord/$number);
error_reporting(0);

$page=$_GET['start'];

$start=$page*$number;



	$action = isset($_GET['action']) ? $_GET['action'] : "";
	if ($action=='deleted') {
		# code...
		echo "<div class='alert alert-success'>Record Was deleted.</div>";

	}
?>
<script type="text/javascript">
function delete_user( id ){
	var answer = confirm ('Are you sure?');
	if(answer){
	window.location ='delete.php?id=' + id;
}
}
</script>

<?php

	$query = "SELECT id,picture, firstName, lastName, nick, email, salary FROM personal limit $start,$number";
	$stmt = $con->prepare($query);
	$stmt->execute();

	$num = $stmt->rowCount();
	echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Record</a>";

	if($num>0)
	{
		echo "<center><table class=' table table-hover' width='70%' cellpadding='5' cellspacing='5'>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Picture</th>";
		echo "<th>Name</th>";
		echo "<th>ProjectName</th>";
		echo "<th>Department</th>";
		echo "<th>projectDetails</th>";
		echo "<th>Semester</th>";
		echo "<th>Action</th>";
		echo "</tr>";


		while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) {
			# code...

			extract($row);

			echo "<tr>";
			echo "<td>{$id}</td>";
			echo "<td><img src={$picture} height = 100px; width = 100px;></td>";
			echo "<td>{$firstName}</td>";
			echo "<td>{$lastName}</td>";
			echo "<td>{$nick}</td>";
			echo "<td>{$email}</td>";
			echo "<td>{$salary}</td>";

			echo "<td>";

			echo "<a style='margin-right: 8px;' href='read.php?id={$id}' class='btn btn-info'>READ</a> ";
			echo " <br><br><a style='margin-right: 8px;' href='edit1.php?id={$id}' class='btn btn-info'>Edit</a>";
			echo "<br><br><a href='#' onclick='delete_user({$id});'class='btn btn-danger'>Delete</a>
			</td></tr>";

			



		}
		echo "</table></center>";


	}
	else
	{
		echo "Not found";
	}

	
?>

<?php
echo '<a  style="margin-left: 700px; " ></a>';
for($i=0;$i<$numlinks;$i++){
  $y=$i+1;
  echo '<a style="margin-right: 8px; " class="btn btn-primary" href="index1.php?start='.$i.'">'.$y.'</a>';

}

?>
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
<br>
<br>
<?php
include 'footer.html';
?>


