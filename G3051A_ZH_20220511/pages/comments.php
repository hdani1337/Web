<div class="container text-center pt-5">
	<h1>Kommentálja!</h1>
</div>
<div class="container d-flex flex-row justify-content-center flex-wrap">
	<?php
	
		require_once("api/db_connect.php");
		require_once("api/get_posts.php");

		echo '				


	';

		if($result->num_rows > 0) {
			$index = 0;
			while ($row = $result->fetch_assoc()) {
				$index++;
				echo '
				<div class="col-md-4">
		
				<h3>'.$index.'-es komment</h2>
					<p>'.$row["comment"].'</p>
				</div>
				';
			}
		} else {

			echo "Nincs adat a hírfolyamban.";
			
		}
		if($_SESSION['firstname'] != "" && $_SESSION['lastname'] != ""){
			include("add_comment.php");
		}
	
	?>
</div>