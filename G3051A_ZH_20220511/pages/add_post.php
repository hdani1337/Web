<?php 

	if($_SESSION['role'] == 0) {

?>
<div class="container mt-5">
	<h3>Felhasználó hozzáadása</h3>
	<form action="index.php?page=add_post" method="post">
		<div class="mb-3">
			<label for="title" class="form-label">Cím</label>
			<input type="text" class="form-control" id="title" name="title" value="test" required>
		</div>
		<div class="mb-3">
			<label for="body" class="form-label">Tartalom</label>
			<textarea class="form-control" name="body" id="body" cols="30" rows="10" required></textarea>
		</div>
		<input type="submit" value="Hozzáadás" class="btn btn-primary">
	</form>

	<?php 
		if(isset($_POST['title']) && isset($_POST['body'])) {
			require_once("api/db_connect.php");
			require_once("api/create_post.php");

			if($conn->query($sql) === TRUE) {
				echo '
				<div class="alert alert-success" role="alert">
					Sikeres létrehozás!
				</div>
				';
			} else {
				echo '
				<div class="alert alert-warning" role="alert">
					Sikertelen létrehozás!
				</div>
				';
			}
		}
	?>

</div>

<?php

	} else {
		echo '
			<div class="alert alert-warning" role="alert">
				Nincs joga posztolni!
			</div>
			';
	}


?>