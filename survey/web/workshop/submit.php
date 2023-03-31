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

error_log($inputJSON);

file_put_contents(__DIR__.'/../log/'.$file, json_encode($formData));

$fp = fopen(__DIR__.'/../responses.csv', 'a+');
fputcsv($fp, array_values(get_object_vars($formData)));
fclose($fp);


require realpath(__DIR__ . '/../lib/mail.php');
(new ResponseMailer())
	->respond($input);