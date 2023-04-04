<?php



$db=json_decode(file_get_contents(__DIR__.'/../database.json'));
$share=json_decode(file_get_contents(__DIR__.'/../share.json'));





$formData=$_POST;
if(isset($formData['_config']){
	unset($formData['_config']);
}

$mysqli = new mysqli($db->host, $db->user, $db->password, $db->database, $db->port);


$query='INSERT INTO `responses` VALUES (NOW(), "'.$mysqli->real_escape_string(json_encode($formData)).'", "'.$mysqli->real_escape_string($formData['accessCode']).'")';
if(!$mysqli->query($query)){
	error_log($mysqli->error);
	error_log($query . "\n");
}




$ch = curl_init($share->url);
//$cfile = new CURLStringFile(json_encode($_POST, JSON_PRETTY_PRINT), time().'.json','application/json');

$file='._'.time().'.json';

if(isset($formData['surveyName'])){
	$file=$formData['surveyName'].$file;
}

file_put_contents(__DIR__.'/'.$file, json_encode($formData, JSON_PRETTY_PRINT));
$cfile = new CURLFile(__DIR__.'/'.$file, 'application/json', substr($file, 2));

$data = array(
	'the_file' => $cfile,
	'stub'=>$share->stub,
	'share-link'=>$share->link
);

curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the handle
curl_exec($ch);


unlink(__DIR__.'/'.$file);