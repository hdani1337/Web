<div class="container mt-5">
	<h3>Felhasználó hozzáadása</h3>
	<form action="index.php?page=add_user" method="post">
		<div class="mb-3">
			<label for="username" class="form-label">Felhasználónév</label>
			<input type="text" class="form-control" id="username" name="username" value="test">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Jelszó</label>
			<input type="password" class="form-control" id="password" name="password" value="test">
		</div>
		<div class="mb-3">
			<label for="role" class="form-label">Jogosultság</label>
			<select name="role" id="role" class="form-select" aria-label="Select example">
				<option selected>Jogosultság</option>
				<option value="0">Admin</option>
				<option value="1">Átlagos</option>
			</select>
		</div>
		<input type="submit" value="Hozzáadás" class="btn btn-primary">
	</form>

	<?php 
		if(isset($_POST['username']) && isset($_POST['password'])) {
			require_once("api/db_connect.php");
			require_once("api/create_user.php");

			if($result->num_rows == 0 && $conn->query($sql) === TRUE) {
				echo '
				<div class="alert alert-success" role="alert">
					Sikeres létrehozás!
				</div>
				';
			} else {
				echo '
				<div class="alert alert-warning" role="alert">
					Már létezik ilyen felhasználó!
				</div>
				';
			}
		}
	?>

</div>