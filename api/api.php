<?php

$tmp_name = $_FILES["blob"]["tmp_name"];
$upload_name = $_FILES["blob"]["name"];
$type = $_FILES["blob"]["type"];
$filename = "test3.wav";
$saved = 0;

$saved = move_uploaded_file($tmp_name, $filename) ? 1 : 0;

$response = array(
	"status"=>"200",
	"msj"=>"Success"
);

echo json_encode($response);

?>