<?php

$albums_string = file_get_contents("./music.json");

// var_dump($albums_string);

$albums = json_decode($albums_string, true);

// var_dump($albums);

$new_album = [
    "titolo" => $_POST['titolo'],
    "artista" => $_POST['artista'],
    "url_cover"=> $_POST['url_cover'],
    "anno_pubblicazione" => $_POST['anno_pubblicazione'],
    "genere" => $_POST['genere']
];

// var_dump($new_album);




?>