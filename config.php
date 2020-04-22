<?php
	

	try
	{
		$con =new PDO ("mysql:host=localhost;dbname=mydatabase","root","");
		
	}
	catch(PDOException $excep)
	{
		echo "Connection Error: ". $excep->getMessage();
	}

?>
