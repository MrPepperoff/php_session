<?php
session_name("user");
session_start();

require_once('lib/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>SESSION</title>
	<link rel="icon" href="images/favicon.ico">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-2">
					<h1>Сессия</h1>
				</div>
				<div class="col-10">
					<form action="index.php" class="item_button">
						<button type="submit" class="btn btn-primary">Назад</button>
					</form>
							
				</div>
			</div>
		</div>
	</header>
	<main class="container">
		<div class="row">
			<div class="col">
				<form action="login/login.php" method="POST" class="form_reg">

					<div class="mb-3 form_item">
						<label for="exampleInputEmail1" class="form-label">E-mail: </label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
						
					</div>
					<div class="mb-3 form_item">
						<label for="exampleInputPassword1" class="form-label">Password: </label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
					<?php

					// валидно-невалидный блок
					if(isset($_GET['status'])){
						$status = jsonConvertArray($_GET['status']);
						$class = status_request($status['code']);
						echo    '<div class="alert '.$class.' alert-dismissible fade show" role="alert">
									'.$status['msg'].'
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
					}
					?>
					<button type="submit" class="btn btn-primary">Войти</button>
				</form>
			</div>
		</div>
	</main>	


	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>
</body>
</html>
	