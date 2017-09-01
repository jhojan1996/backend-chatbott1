<?php

$tmp_name = $_FILES["data"]["tmp_name"];
$upload_name = $_FILES["data"]["name"];
$type = $_FILES["data"]["type"];
$filename = date("Y-m-d h:i:s").".wav";
$saved = 0;

$saved = move_uploaded_file($tmp_name, $filename) ? 1 : 0;

if($saved == 1){
	$response = array(
		"status"=>"200",
		"msj"=>"Success",
		"url"=>"https://backend-chatbott1.scm.azurewebsites.net/api/".$filename
	);
}else{
	$response = array(
		"status"=>"500",
		"msj"=>"Error guardando el archivo",
	);
}


echo json_encode($response);

?>