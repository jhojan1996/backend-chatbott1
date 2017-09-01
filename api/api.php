<?php

$tmp_name = $_FILES["data"]["tmp_name"];
$upload_name = $_FILES["data"]["name"];
$type = $_FILES["data"]["type"];
$filename = "test3.wav";
$saved = 0;

$saved = move_uploaded_file($tmp_name, $filename) ? 1 : 0;

$response = array(
	"status"=>"200",
	"msj"=>"Success"
);

var_dump($_FILES);

echo json_encode($response);

?>