<?php 
	echo "initiating <br>";
	$server = "localhost";
	$user = "root";
	$password = "";
	$connection = mysqli_connect($server, $user, $password);
	if (!$connection) 
	{
		echo "check config";
	}
	else
	{
		echo "connection successful";
	}

 ?>