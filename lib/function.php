<?php 

	function jsonConvertArray($data_json){
		$data = json_decode($data_json);
		return (array)$data;
	}

	function status_request($str_code){
		if($str_code == 500 || $str_code == 100){
			return "alert-danger";
		}
		
		if($str_code == 200){
			return "alert-success";
		}

		return '';
	}