<?php 
	echo "initiating <br>";
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "test";
	//Connection
	$connection = mysqli_connect($server, $user, $password, $database);
	if (!$connection) 
	{
		die("<h4>Failed...!</h4> ".mysqli_connect_error());
	}
	else
	{
		echo "connection successful <br>";
	}
	//SQL Command
	/*
	$sql_command = "CREATE TABLE people 
	(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,c
		telephone INT,
		email VARCHAR(100), 
		addres VARCHAR(100),
		meta TIMESTAMP
	)";
	*/
	$sql_command = "INSERT INTO people(id, name, lastname, telephone, email, addres)
	VALUES(NULL, 'Samantha', 'Fox', 555444, 'mail@server.com', '12A Main Rd')";
	//Check SQL commands
	if (mysqli_query($connection, $sql_command)) 
	{
		echo "SQL Command successful";
	}
	else
	{
		echo "sql error ".mysqli_error($connection);
	}
 ?>
