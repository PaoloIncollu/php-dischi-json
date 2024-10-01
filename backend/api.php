<?php

/* PER IL FUTURO */
//header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
//header("Access-Control-Allow-Headers: X-Requested-With");
	
$albumsString = file_get_contents('db/albums.json');
 
$albumsArr = json_decode($albumsString, true);

$albums = [
    'results' => $albumsArr,
];


header('Content-Type: application/json');
 
echo json_encode($albums);