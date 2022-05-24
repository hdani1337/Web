<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="bootstrap.css" rel="stylesheet">
	<script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="dropdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<?php
	session_start();
	
	$page = 'home';
	if(isset($_GET['page']) && $_GET['page'] == 'add_comment'){
		$page = 'add_user';
	}elseif(isset($_GET['page']) && $_GET['page'] == 'login'){
		$page = 'login';
	}elseif(isset($_GET['page']) && $_GET['page'] == 'profile'){
		$page = 'profile';
	}elseif(isset($_GET['page']) && $_GET['page'] == 'logout'){
		$page = 'logout';
	}elseif(isset($_GET['page']) && $_GET['page'] == 'comments'){
		$page = 'comments';
	}elseif(isset($_GET['page']) && $_GET['page'] == 'add_post'){
		$page = 'add_post';
	}else{
		$page = 'home';
	}

	include("pages/header.php");
	if($page == 'home'){
		include("pages/home.php");
	}elseif($page == 'add_user'){
		include("pages/add_user.php");
	}elseif($page == 'login'){
		include("pages/login.php");
	}elseif($page == 'profile'){
		include("pages/profile.php");
	}elseif($page == 'logout'){
		include("pages/logout.php");
	}elseif($page == 'comments'){
		include("pages/comments.php");
	}elseif($page == 'add_post'){
		include("pages/add_post.php");
	}
	include("pages/footer.php");
?>
</body>
</html>