<?php 
	echo "initiating <br>";
	$server = "localhost";
	$user = "root";
	$password = "fre";
	$connection = mysqli_connect($server, $user, $password);
	if (!$connection) 
	{
		die("<h4>Failed...!</h4> ".mysqli_connect_error());
	}
	else
	{
		echo "connection successful";
	}

 ?>