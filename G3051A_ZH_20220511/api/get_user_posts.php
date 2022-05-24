<?php 

	$author = $_SESSION['username'];
	$sql = "SELECT * FROM posts WHERE author='$author'";

	$result = $conn->query($sql);
	
?>