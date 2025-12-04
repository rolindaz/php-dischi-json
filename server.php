<?php

require_once("./music.php");

$new_album = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_album = [
    "titolo" => $_POST['titolo'] ?? '',
    "artista" => $_POST['artista'] ?? '',
    "url_cover"=> $_POST['url_cover'] ?? '',
    "anno_pubblicazione" => $_POST['anno_pubblicazione'] ?? '',
    "genere" => $_POST['genere'] ?? ''
];
};

// var_dump($new_album);

$albums[] = $new_album;

file_put_contents("./music.json", json_encode($albums));

header("Location: ./index.php");

?>