<?php

$dir='../0fcf27faad/templates/';

$data=[];

foreach(array_values(array_filter(scandir($dir), function($file){
    return strpos($file, '.md')!==false;
})) as $file){

    $data[str_replace('.md', '', $file)]=file_get_contents($dir.$file);

}

echo json_encode($data, JSON_PRETTY_PRINT);