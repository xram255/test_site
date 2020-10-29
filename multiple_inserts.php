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

	
	//Multiple Entries
	$sql_command = "INSERT INTO people(id, name, lastname, telephone, email, addres)
	VALUES(NULL, 'John', 'wick', 342567, 'john@server.com', '12/2B, Cross St.');";

	$sql_command .= "INSERT INTO people(id, name, lastname, telephone, email, addres)
	VALUES(NULL, 'Tom', 'wick', 342567, 'tom@server.com', '12/2B, Cross St.');";

	$sql_command .= "INSERT INTO people(id, name, lastname, telephone, email, addres)
	VALUES(NULL, 'Sara', 'wick', 342567, 'sara@server.com', '12/2B, Cross St.');";
	
	if(mysqli_multi_query($connection, $sql_command))
	{
		$last_entry = mysqli_insert_id($connection);
		echo "SQL command okay. Last ID: ".$last_entry."<hr>";
	}
	else
	{
		echo "SQL error ".mysqli_error($connection);
	}
 ?>
