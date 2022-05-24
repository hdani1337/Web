<div class="container">
	<?php 
	
		require_once("api/db_connect.php");
		require_once("api/get_user_posts.php");
		
		if(isset($_POST['modify'])) {
			require_once("api/modify_post.php");
		
			if($result2 && $conn->query($sql2) === TRUE) {
				echo '
				<div class="alert alert-success" role="alert">
					Sikeres módosítás!
				</div>
				';
			} else {
				echo '
				<div class="alert alert-warning" role="alert">
					Hiba a módosításkor!
				</div>
				';
			}
		}

		if(isset($_POST['delete'])) {
			require_once("api/delete_post.php");
			if($conn->query($sql3) === TRUE) {
				echo "";
			}
		}

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo '
				
				<div class="card my-5" style="width: 100%">
					<div class="card-body">
						<form action="index.php?page=profile" method="post">
							<input type="text" name="id" id="id" value="' . $row["id"] . '" style="display: none;">
							<div class="mb-3">
								<label for="title" class="form-label">Cím:</label>
								<input type="text" name="title" id="title" class="form-control" value="' . $row["title"] . '">
							</div>
							<div class="mb-3">
								<label for="body" class="form-label">Szöveg:</label>
								<textarea name="body" id="body" cols="30" rows="5" class="form-control">' . $row["body"] . '</textarea>
							</div>
							<input type="submit" name="modify" value="Módosítás" class="btn btn-primary">
							<input type="submit" name="delete" value="Törlés" class="btn btn-secondary">
						</form>
					</div>
				</div>
				
				';
			}
		} else {
			echo "Nincsenek posztok ennél a felhasználónál!";
		}
	
	?>
</div>


