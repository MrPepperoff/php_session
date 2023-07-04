<?php
session_start();
require_once("lib/function.php");
require_once("config.php");
require_once("lib/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-4">
					<h1>Сессия</h1>
				</div>
				<div class ='col-4'>
				<?php
				if(isset($_SESSION['login'])){
					$link = connect();
						$user = searchUserEmail($link, $_SESSION['login']);
						if(!is_null($user)){
							echo '<p>Вы вошли как: <span>'.$user['login'].'</span> <a href="login/logout.php" class="close">X</a></p>';
							include_once("page.php");
						}
				}
				else{
						include_once("login/form.php");

					}			
				?>
	
	
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>

</body>
</html>