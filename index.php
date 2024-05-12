<?php

include __DIR__ . "/Views/header.php";
include __DIR__ ."/Models/Movie.php";

$action = new Category('Action');

$movies = [
    new Movie("The Matrix", 19.99, $action, "https://m.media-amazon.com/images/I/613ypTLZHsL._AC_UF1000,1000_QL80_.jpg"),
    new Movie("Babylon", 19.99, $action, "https://www.filmtv.it/imgbank/GALLERYXL/R202212/ftv45-63aee4bb92a96-FB_IMG_1672406163617.jpg"),
]

?>
<main class="container ">
    <h2>Movies</h2>
    <div class="row d-flex">
        <?php foreach ($movies as $movie) { ?>

            <div class="card mx-2 p-0" style="width: 18rem;">
                <div class="h-100 p-0">
                    <img class="card-img-top img-fluid h-100 " src="<?= $movie->cover ?> " alt="<?= $movie->title ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h3 class="card-text"><?= $movie->title ?></h3>
                    <p class="card-text"><?= $movie->price ?>.</p>

                </div>
            </div>

        <?php } ?>
    </div>

</main>
