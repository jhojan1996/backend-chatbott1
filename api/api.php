<?php

$tmp_name = $_FILES["data"]["tmp_name"];
$upload_name = $_FILES["data"]["name"];
$type = $_FILES["data"]["type"];
$date = new DateTime();
$result = $date->format('Y-m-d-H-i-s');
$filename = "$result.wav";
$saved = 0;

$saved = move_uploaded_file($tmp_name, $filename) ? 1 : 0;

if($saved == 1){
	$response = array(
		"status"=>"200",
		"msj"=>"Success",
		"url"=>"https://backend-chatbott1.azurewebsites.net/api/".$filename
	);
}else{
	$response = array(
		"status"=>"500",
		"msj"=>"Error guardando el archivo",
		"archivo"=>$filename
	);
}


echo json_encode($response);

?>