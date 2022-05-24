<?php 

	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		$sql3 = "DELETE FROM posts WHERE id='$id'";
	}

?>