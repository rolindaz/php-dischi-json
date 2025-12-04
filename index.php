<?php

require_once("./music.php");
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
        <div class="row mb-5">
            <form class="w-75 mx-auto px-5" action="./server.php" method="POST">
                <div class="form-control py-3 px-5 d-flex flex-column gap-2">
                    <div class="text-center mb-2">
                        <h4>
                            Aggiungi un nuovo album alla tua collezione!
                        </h4>
                    </div>
                    <div class="d-flex justify-content-between titolo">
                        <label for="titolo">
                            Titolo
                        </label>
                        <input type="text" name="titolo" id="titolo">
                    </div>
                    <div class="d-flex justify-content-between artista">
                        <label for="artista">
                            Artista
                        </label>
                        <input type="text" name="artista" id="artista">
                    </div>
                    <div class="d-flex justify-content-between cover">
                        <label for="url_cover">
                            URL della cover
                        </label>
                        <input type="text" name="url_cover" id="url_cover">
                    </div>
                    <div class="d-flex justify-content-between anno">
                        <label for="anno_pubblicazione">
                            Anno di pubblicazione
                        </label>
                        <input type="text" name="anno_pubblicazione" id="anno_pubblicazione">
                        </div>
                        <div class="d-flex justify-content-between genere">
                            <label for="genere">
                                Genere
                            </label>
                            <input type="text" name="genere" id="genere">
                        </div>
                        <button style="max-width: fit-content" class="btn btn-secondary mx-auto mt-3">
                            Aggiungi album
                        </button>
                        <?php
                        
                        // var_dump($_POST);
                        
                        ?>
                </div>
            </form>
        </div>
        <div class="row row-cols-3 row-gap-3">
            <?php
            foreach($albums as $album) {
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $album["url_cover"]?>" alt="<?php echo $album["titolo"] ?>" class="card-top">
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