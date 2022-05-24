<?php
	if(isset($_POST['title']) && isset($_POST['body'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$body = $_POST['body'];

		$sql2 = "UPDATE posts SET title = '$title', body= '$body' WHERE id = $id;";
		$result2 = $conn->query($sql2);
	}
?>