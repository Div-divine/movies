<?php get_header('Visualiser Films', 'public'); ?>

<div class="mt-5" style="margin-bottom: 80px">
    <div class="resize-bigimage position-relative">
        <img src="/images/marvel.jpg" alt="marvel poster">
    </div>
    <div class="position-absolute top-50 start-50 translate-middle">
        <a href="https://youtu.be/VNpmdsuo40M?si=_NaLI9WOIpntBi71" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="52"
                height="52" viewBox="0 0 256 256" xml:space="preserve">

                <defs>
                </defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                    transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                    <path
                        d="M 45 0 C 20.187 0 0 20.187 0 45 c 0 24.813 20.187 45 45 45 c 24.813 0 45 -20.187 45 -45 C 90 20.187 69.813 0 45 0 z M 61.806 47.026 l -12.91 7.453 l -12.91 7.453 c -1.559 0.9 -3.508 -0.225 -3.508 -2.026 V 45 V 30.093 c 0 -1.801 1.949 -2.926 3.508 -2.026 l 12.91 7.453 l 12.91 7.453 C 63.366 43.875 63.366 46.125 61.806 47.026 z"
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #BE3131; fill-rule: nonzero; opacity: 1;"
                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </svg>
        </a>
    </div>
</div>
<div class="section-title mt-5">
    <p class="recent-addText">Nouveaux films</p>
</div>
<div class="style-all">
    <?php foreach ($movies as $movie) { ?>
        <a href="<?= $router->generate('details', ['slug' => $movie->slug])?>">
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
        <a href="<?= $router->generate('details', ['slug' => $movie->slug])?>">
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