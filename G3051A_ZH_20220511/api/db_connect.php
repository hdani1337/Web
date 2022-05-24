<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ZH_2022";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>