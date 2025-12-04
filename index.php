<?php

require_once("./server.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center mt-5">
        Rock Music Player
    </h1>
    <div class="container my-5">
        <div class="row">
            <div class="col col-4">
                <div class="card">
                    <img src="https://img.freepik.com/vettori-premium/poster-rock-colorato-con-chitarre_153969-9467.jpg?semt=ais_hybrid&w=740&q=80" alt="" class="card-top">
                    <div class="card-bottom p-2">
                        <h4>
                            Titolo
                        </h4>
                        <h6>
                            Artista
                        </h6>
                        <div class="d-flex justify-content-between">
                            <span>
                                Anno di pubblicazione
                            </span>
                            <span>
                                Genere
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4">
                <div class="card"></div>
            </div>
            <div class="col col-4">
                <div class="card"></div>
            </div>
        </div>
    </div>
</body>
</html>