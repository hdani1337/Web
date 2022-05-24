<?php
	if(isset($_POST['title']) && isset($_POST['body'])) {
		$title = $_POST['title'];
		$body = $_POST['body'];
		$date = date("Y-m-d");
		$author = $_SESSION['username'];
		$sql = "INSERT INTO posts (title, body, date, author) VALUES ('$title', '$body', '$date', '$author')";
	}
?>