


<?php
	include 'header.php';
	include 'config.php';
	if(isset($_POST['signup'])){
		$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
				$nick=$_POST['nick'];
		$email=$_POST['email'];
			$salary=$_POST['salary'];
			$picture=$_FILES['file'];
			$filename=$picture['name'];
			$filetmp=$picture['tmp_name'];
			$fileexe=explode(".","$filename");
			$fileend=strtolower(end($fileexe));
			if($fileend=='jpg' || 'png' ||'jpeg')
			{
				$uploadfolder='pictures/'.$filename;
				move_uploaded_file($filetmp,$uploadfolder);
				
				
		$sql=$con->prepare("insert into personal(firstName,lastName,nick,email,salary,picture) values (:firstName,:lastName,:nick,:email,:salary,:uploadfolder)");


		$con->beginTransaction();


		$sql->execute(array(':firstName'=>$firstName,':lastName'=>$lastName,':nick'=>$nick,':email'=>$email,':salary'=>$salary,':uploadfolder'=>$uploadfolder));
		$con->commit();
		
		header("location:index1.php");
			}	
	}
	

	?>
<div class="container">
<form method="POST" enctype="multipart/form-data">
 

				<div class="form-group">
					<label>Picture</label>
					<input class="form-control" type="file" name="file">
				</div>

				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="firstName" placeholder="Enter Name">
				</div>

				<div class="form-group">
					<label>ProjectName</label>
					<input class="form-control" type="text" name="lastName" placeholder="Enter ProjectName">
				</div>

				<div class="form-group">
					<label>Department</label>
					<input class="form-control" type="text" name="nick" placeholder="Enter Department">
				</div>
				<div class="form-group">
					<label>ProjectDetails</label>
					<input class="form-control" type="text" name="email" placeholder="Enter ProjectDetails">
				</div>
				<div class="form-group">
					<label>Semester</label>
					<input class="form-control" type="int" name="salary" placeholder="Enter Semester">
				</div>
<br>
				<div class="form-group">
				<center><input type="submit" class="btn btn-primary" name="signup"></center>
				</div>
</div>
<br>
<br>
<br>
<br>

<?php
include 'footer.php';
?>