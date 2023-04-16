<?php



$db=json_decode(file_get_contents(__DIR__.'/../database.json'));


$inputJSON = file_get_contents('php://input');
$formData = json_decode($inputJSON); //convert JSON into array

$formData=get_object_vars($formData);

if(isset($formData['_config'])){
	unset($formData['_config']);
}

$mysqli = new mysqli($db->host, $db->user, $db->password, $db->database, $db->port);


$query='INSERT INTO `responses` (date, data, user) VALUES (NOW(), "'.$mysqli->real_escape_string(json_encode($formData)).'", "'.$mysqli->real_escape_string($formData['accessCode']).'")';
if(!$mysqli->query($query)){

	error_log($mysqli->error);
	error_log($query . "\n");
	
}


$file=''.time().'.json';

file_put_contents(__DIR__.'/../log/'.$file, json_encode($formData, JSON_PRETTY_PRINT));