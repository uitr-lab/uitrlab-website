<?php


$ch = curl_init('https://uploader.uitrlab.ok.ubc.ca/upload.php');

//$cfile = new CURLStringFile(json_encode($_POST, JSON_PRETTY_PRINT), time().'.json','application/json');

$file=time().'.json';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON); //convert JSON into array

if(isset($input->surveyName)){
	$file=$input->surveyName.$file;
}
$formData=$input;

file_put_contents(__DIR__.'/'.$file, json_encode($formData, JSON_PRETTY_PRINT));
$cfile = new CURLFile(__DIR__.'/'.$file, 'application/json');


$data = array(
	'the_file' => $cfile,
	'stub'=>'4344ebbfb5',
	'share-link'=>'38584bca5c'
);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the handle
curl_exec($ch);


unlink(__DIR__.'/'.$file);