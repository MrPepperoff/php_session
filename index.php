<?php
session_start();
require_once("config.php");
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
			<div class="row">
				<div class="col">
					<h1>Сессия</h1>
				</div>
			</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				include_once('login/form.php')
				?>		
			</div>
		</div>
	</div>
	
	
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>

</body>
</html>