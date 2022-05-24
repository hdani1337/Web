<div class="container mt-0 text-center w-50">

	<?php 
		if($_SESSION['firstname'] != "" && $_SESSION['lastname'] != ""){
			echo '
				<h1>'.$_SESSION['lastname']. ' ' . $_SESSION['firstname'] .' sikeresen bejelentkezett</h1>
			';		
			echo '
			<form action="index.php?page=logout" method="post">
				<input type="submit" value="Kijelentkezés" class="btn btn-primary w-100">
			</form>';	
		}
		else{ 
			echo '<h3>Kérlek lépj be</h3>
			<form action="index.php?page=login" method="post">
				<div>
					<input type="text" name="username" id="username" class="form-control" placeholder="felhasználói név">
				</div>
				<div>
					<input type="password" name="password" id="password" class="form-control" placeholder="kód">
				</div>
				<input type="checkbox" id="remember" name="remember">
				<label for="vehicle1"> Emlékezz rám</label><br>
				<input type="submit" value="Bejelentkezés" class="btn btn-primary w-100">
			</form>';
			if(isset($_POST['username']) && isset($_POST['password'])) {			
			require_once("api/db_connect.php");
			require_once("api/get_login_details.php");

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']){
						echo '
							<h1>'.$row['lastname']. ' ' . $row['firstname'] .' sikeresen bejelentkezett</h1>
							';
							$_SESSION['firstname'] = $row['firstname'];
							$_SESSION['lastname'] = $row['lastname'];
					}
					else{
						echo '
				<h1>Hozzáférés megtagadva!</h1>
				';
					}				
				}
			} else {
				echo '
				<h1>Nincs felhasználó az adatbázisban!</h1>
				';
			}
	}}
	
	?>

</div>