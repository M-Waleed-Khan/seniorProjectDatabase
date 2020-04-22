
<!DOCTYPE HTML>
<html>
<head>
<title>PDO Update a Record PHP CRUD Tutorial</title>

<link rel="stylesheet" href="libs/bootstrap3.3.6/ css/bootstrap.min.css" />

<script src=" https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js "></script>

</head>
<body>
<div class="container">
<div class="pageheader">
<h1>Update Product</h1>

</div>
<?php
include 'header.php';

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID notfound.');
try {
$query = "SELECT * FROM personal WHERE id = ? LIMIT 0,1";
$stmt = $con->prepare($query);
$stmt->bindParam(1, $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id = $row['id'];
$name = $row['firstName'];
$last = $row['lastName'];
$nick = $row['nick'];
$Email = $row['email'];
$Salary = $row['salary'];
}
catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>
<form action='edit.php?id=<?php echo htmlspecialchars($id); ?>'method='post' border='0'>
<table class='table table-hover'>
<tr>
<td>Name</td>
<td><input type='text' name='name' value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" class='formcontrol'></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name='description'
class='formcontrol'>
<?php echo htmlspecialchars($description,ENT_QUOTES); ?></textarea></td>
</tr>
<tr>
<td>Price</td>
<td><input type='text' name='price' value="<?php echo htmlspecialchars($price, ENT_QUOTES); ?>" class='form-control'></td>
</tr>
<tr>
<td></td>
<td>
<input type='submit' value='Save Changes' class='btn btnprimary'
>
<a href='read.php' class='btn btndanger'>Back to read products</a>
</td>
</tr>
</table>
</form
</div>
<script src="libs/jquery3.0.0.min.js"></script>
<script src="libs/bootstrap3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
