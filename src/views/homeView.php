<?php get_header('Visualiser Films', 'public'); ?>

<div class="mt-5" style="margin-bottom: 80px">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel-images">
            <div class="carousel-item active" data-bs-interval="7000">
                <img src="/images/blackpanther.jpg" class="d-block w-100" alt="marvel">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/johnwick.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/marvelposter.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="section-title mt-5">
    <p class="recent-addText">Nouveaux films</p>
</div>
<div class="style-all">
    <?php foreach ($movies as $movie) { ?>
        <a href="<?= $router->generate('details', ['slug' => $movie->slug]) ?>">
            <div class="other-images mt-3">
                <img src="/<?= $movie->poster ?>" alt="<?= $movie->title ?>">
                <div class="d-flex justify-content-center poster-text">
                    <a href="" class="editer-link text-demand">Voir details</a>
                </div>
            </div>
        </a>
    <?php } ?>
</div>
<div class="section-title mt-5">
    <p class="recent-addText">Autres</p>
</div>
<div class="style-all">
    <?php foreach ($orderMovies as $movie) { ?>
        <a href="<?= $router->generate('details', ['slug' => $movie->slug]) ?>">
            <div class="other-images mt-3">
                <img src="/<?= $movie->poster ?>" alt="<?= $movie->title ?>">
                <div class="d-flex justify-content-center poster-text">
                    <a href="" class="editer-link text-demand">Voir details</a>
                </div>
            </div>
        </a>
    <?php } ?>
</div>

<?php get_footer('public'); ?>