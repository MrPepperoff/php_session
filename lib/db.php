<?php

function connect(){
	$link = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

	if($link){
		return $link;
	}
	else{
		die("Ошибка подключеня к Базе Данных");
	}
}

function selectOneData($link, $data, $table){

	$sqlWhere = (is_array($data) && count($data) > 0)? "WHERE email = '".$data['email']."' AND password = '".md5($data['password'])."'": "";

	$sql = "SELECT * FROM `$table` ".$sqlWhere;

	$result = mysqli_query($link, $sql);

	$data = null;

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$data = $row;
	}

	return $data;
}

function searchUserEmail($link, $email){


	$sql = "SELECT * FROM `users`";

	$result = mysqli_query($link, $sql);

	$users = null;

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$users[] = $row;
	}

	$desiredUser = false;

	foreach ($users as $user) {

		if(md5($user['email']) == $email){
			$desiredUser = $user;
		}
	}

	return $desiredUser;
}

function searchProd($link){
	$sql = "SELECT 
			id,
			name,
			img,
			title,
			price
			FROM prod";

	$result = mysqli_query($link, $sql);

	$items = null;

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$items[] = $row;
	}
	return $items;
	foreach ($items as $item) {
		echo "<pre>";
		print_r($item);
		echo "</pre>";
	}
}