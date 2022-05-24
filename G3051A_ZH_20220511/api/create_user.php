<?php
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = $_POST['role'];
		$sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
		$sql2 = "SELECT * FROM users WHERE username='$username'";
		$result = $conn->query($sql2);
	}
?>