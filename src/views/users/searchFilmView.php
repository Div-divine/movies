<?php get_header('détails de films', 'public'); ?>

<div class="section-title mt-5">
    <p class="recent-addText">Résultat de recherche</p>
</div>
<div class="style-all">
    <?php foreach ($searchResult as $result) { ?>
        <a href="<?= $router->generate('details', ['slug' => $result['slug']]) ?>">
            <div class="other-images mt-3">
                <img src="/<?= $result['poster'] ?>" alt="<?= $result['title'] ?>">
                <div class="d-flex justify-content-center poster-text">
                    <a href="<?= $router->generate('details', ['slug' => $result['slug']]) ?>" class="editer-link text-demand">Voir details</a>
                </div>
            </div>
        </a>
    <?php } ?>
</div>

<?php get_footer('public'); ?>