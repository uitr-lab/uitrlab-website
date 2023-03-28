<?php


$ch = curl_init('https://uploader.uitrlab.ok.ubc.ca/upload.php');

//$cfile = new CURLStringFile(json_encode($_POST, JSON_PRETTY_PRINT), time().'.json','application/json');

$file=time().'.json';

if(isset($_POST['surveyName'])){
	$file=$_POST['surveyName'].$file;
}

file_put_contents(__DIR__.'/'.$file, json_encode($_POST, JSON_PRETTY_PRINT));
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