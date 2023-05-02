<?php



$file=time().'.json';


$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON); //convert JSON into array


$formData=$input;

$fp = fopen(__DIR__.'/../../feedback.csv', 'a+');
fputcsv($fp, array_values(get_object_vars($formData)));
fclose($fp);


echo json_encode((object) array());