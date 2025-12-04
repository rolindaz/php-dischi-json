<?php
$albums_string = file_get_contents("./music.json");
$albums = json_decode($albums_string, true);
?>