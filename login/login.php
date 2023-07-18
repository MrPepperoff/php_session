<?php 
session_name("user");
session_start();

require_once('../config.php');
require_once('../lib/db.php');

$status = [
	'error' =>  ['code' => 500, 'msg'=> "Ошибка"],
	'error_data' => ['code'=> 100, 'msg' => 'Ошибка данных'],
	'success' => ['code' => 200, 'msg' => 'Успешно']
];

if(isset($_POST['email']) && !empty($_POST['email']) && 
isset($_POST['password']) && !empty($_POST['password'])){
	$link = connect();
	
	$data = [
		'email' => $_POST['email'],
		'password' => $_POST['password']
	];

	$result = selectOneData($link, $data, 'users');

	if(is_null($result)){
			header("location: ".BASE_URL."page.php?status=".json_encode($status["error_data"]));
			die();
		}
		else{
			$_SESSION['login'] = md5($result['email']);

			header("location: ".BASE_URL."index.php?status=".json_encode($status["success"]));
			die();
		}

	}

	header("location: ".BASE_URL."page.php?status=".json_encode($status["error"]));