<?php

$albums_string = file_get_contents("./music.json");

// var_dump($albums_string);

$albums = json_decode($albums_string, true);

// var_dump($albums);



?>