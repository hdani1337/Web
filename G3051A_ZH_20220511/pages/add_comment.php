<div class="container mt-5">
	<h3>Komment hozzáadása</h3>
	<form action="pages/add_comment.php" method="post">
		<div class="mb-3">
			<label for="title" class="form-label">Komment címe:</label>
			<input type="text" name="title" id="title" class="form-control" placeholder="Adja meg a komment címét">
		</div>
		<div class="mb-3">
			<label for="comment" class="form-label">Komment szövege:</label>
			<textarea type="comment" name="comment" id="comment" class="form-control" placeholder="Írja be a komment szövegét"></textarea>
		</div>
		<input type="submit" value="Hozzáad" class="btn btn-primary">
	</form>
</div>
<?php 
		if(isset($_POST['title']) && isset($_POST['comment'])) {
			require_once("../api/db_connect.php");
			$username = $_POST['title'];
			$password = $_POST['comment'];
			$sql = "INSERT INTO comments (title, comment) VALUES ('$username', '$password')";
			$result = $conn->query($sql);	
		}
	
	?>