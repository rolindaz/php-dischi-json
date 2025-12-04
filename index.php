<?php

require_once("./server.php");


// var_dump($albums);
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
        <div class="row row-cols-3 row-gap-3">
            <?php
            foreach($albums as $album) {
            ?>
            <div class="col">
                <div class="card">
                    <img src= <?php echo $album["url_cover"]?> alt= <?php echo $album["titolo"] ?> class="card-top">
                    <div class="card-bottom p-2">
                        <h4>
                        <?php echo $album["titolo"] ?>
                        </h4>
                        <h6>
                        <?php echo $album["artista"] ?>
                        </h6>
                        <div class="d-flex justify-content-between">
                            <span>
                            <?php echo $album["anno_pubblicazione"] ?>
                            </span>
                            <span>
                            <?php echo $album["genere"] ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>