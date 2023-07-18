<?php
session_name("user");
session_start();

session_write_close();

session_name("basket");
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
	<title>SESSION</title>
	<link rel="icon" href="images/product/favicon.ico">
</head>
<body class="index">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-2">
					<h1>Сессия</h1>
				</div>
				<div class="col-10">
					<?php
					if(!isset($_SESSION['login'])){?>
						<form action="page.php" class="item_button">
							<button type="submit" class="btn btn-primary">Войти</button>
						</form>
					<?php
					}
					else{
						$link = connect();
						$user = searchUserEmail($link, $_SESSION['login']);
						if(!is_null($user)){
							echo '
								<div class="item_button">
									<p>Вы вошли как: 
										<span>'.$user['login'].'</span> 
										<a href="login/logout.php" class="close">X</a>
									</p>
								</div>';
						}

					}
						// print_r(searchProd($link, $_SESSION['id']));
					?>
					
							
				</div>
			</div>
		</div>
	</header>
	<main class="container">
		<div class="row justify-content-between">
			<div class="col-8">
				<section class="container shop">
					<div class="row">
						
						<div class="col-4">
							<div class="card">
							<!-- Верхняя часть -->
							<div class="card__top">
								<!-- Изображение-ссылка товара -->
								<a href="#" class="card__image">
									<img src="images/product/1.jpg" alt="1">
								</a>
							</div>
							<!-- Нижняя часть -->
							<div class="card__bottom">
								<!-- Цены на товар -->
								<div class="card__prices">
									<div class="price">4 200 &#8381;</div>
								</div>
								<!-- Ссылка-название товара -->
								<a href="#" class="card__title">
								Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
								</a>
								<!-- Кнопка добавить в корзину -->
								<button class="card__add">В корзину</button>
							</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/2.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар -->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/3.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/4.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/1.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/2.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/2.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/3.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/4.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<!-- Верхняя часть -->
								<div class="card__top">
									<!-- Изображение-ссылка товара -->
									<a href="#" class="card__image">
										<img src="images/product/1.jpg" alt="1">
									</a>
								</div>
								<!-- Нижняя часть -->
								<div class="card__bottom">
									<!-- Цены на товар (с учетом скидки и без)-->
									<div class="card__prices">
										<div class="price">4 200 &#8381;</div>
									</div>
									<!-- Ссылка-название товара -->
									<a href="#" class="card__title">
									Нож Mora Kansbol сталь Sandvik 12C27 рукоять резинопластик (12634)
									</a>
									<!-- Кнопка добавить в корзину -->
									<button class="card__add">В корзину</button>
								</div>
							</div>
						</div>
					</div>
				</section>	
			</div>		
			<div class="col-3">
				<section class="container basket">
					
					<div class="row">
						<div class="card">
							<h2>Корзина</h2>
							<?php
								echo "<pre>";
								print_r(searchProd($link));
								echo "</pre>";
							?>
						</div>
					</div>
				</section>
			</div>
		</div>	
	</main>

	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>
</body>
</html>





<!-- <?php
// session_id("user");
// echo session_id();
// session_start();
// echo "<pre>", print_r($_SESSION, 1), "</pre>";


// require_once("lib/function.php");
// require_once("config.php");
// require_once("lib/db.php");
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
				// if(isset($_SESSION['login'])){
				// 	$link = connect();
				// 		$user = searchUserEmail($link, $_SESSION['login']);
				// 		if(!is_null($user)){
				// 			echo '<p>Вы вошли как: <span>'.$user['login'].'</span> <a href="login/logout.php" class="close">X</a></p>';
				// 			include_once("page.php");
				// 		}
				// }
				// else{
				// 		include_once("login/form.php");

				// 	}			
				?>
	
	
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>

</body>
</html> -->