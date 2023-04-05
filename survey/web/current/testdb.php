<?php

$db=json_decode(file_get_contents(__DIR__.'/database.json'));

$mysqli = new mysqli($db->host, $db->user, $db->password, $db->database, $db->port);

echo $mysqli->host_info . "\n";

$query='INSERT INTO `responses` VALUES (NOW(), "'.$mysqli->real_escape_string(json_encode(array('a'=>'b'))).'", "abc-def")';
if(!$mysqli->query($query)){
	echo $mysqli->error . "\n";
	echo $query . "\n";
}

