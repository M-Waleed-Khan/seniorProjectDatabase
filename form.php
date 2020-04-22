
	<?php
	include 'header.html';
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form</title>
</head>
<body>
<!--FORMS-->
		<div class="container">
			<form>
				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Name">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="Email" name="email" placeholder="Enter Email">
				</div>

				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control" placeholder="Add a Message"></textarea>
				</div>

				<div class="form-group">
					<label>Your Service</label>
					<select class="form-control">
						<option value="Male">Gardener</option>
						<option value="Female">Plumber</option>
						<option value="Other">Baby Sitter</option>
						<option value="Other">Mechanic</option>
						<option value="Other">Grocery</option>
						<option value="Other">Electrition</option>

					</select>
				</div>

				

				

				<div class="form-group">
					<input type="submit" class="btn" name="">
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

<br>
<br>
<br>
<br>
<br>
</body>
</html>
<?php
	include 'footer.html';
	?>