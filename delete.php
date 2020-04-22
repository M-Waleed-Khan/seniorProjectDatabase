<?php
include 'config.php';
try {
	$id = isset($_GET['id']) ? $_GET['id'] : die('Error: Id not found.');
	$query = "DELETE FROM personal WHERE id = ? ";
	$stmt = $con->prepare($query);
	$stmt->bindParam(1, $id);
	if($stmt->execute())
	{
		//header('Location : index.php?action=deleted');
		header("refresh:0 url=index1.php");
	}
	else
	{
		die('Unable to delete record.');
	}

} catch (PDOException $exception) {
	die('ERROR:' . $exception->getMessage());
	
}

?>