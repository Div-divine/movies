<?php get_header('Afficher les films', 'admin'); ?>
<div class="mb-5">
    <a href="<?= $router->generate('createFilms')?>" style="text-decoration: none;" class="bg-primary text-white p-2">Ajouter De Nouveaux Films</a>
</div>
<div class="table-responsive">
    <table class="table table-striped align-middle table-bordered border-primary">
    <thead class="table-warning">
        <tr>
        <th scope="col" class="text-center">Titres</th>
        <th scope="col" class="text-center">Date de sortie</th>
        <th scope="col" class="text-center">Durée Du Film</th>
        <th scope="col" class="text-center">Note press</th>
        <th scope="col" class="text-center">Catégorie(s) De Films</th>
        <th scope="col" class="text-center">Casts</th>
        <th scope="col" class="text-center">Réalisateur(s)</th>
        <th scope="col" class="text-center">Synopsis De Films</th>
        <th scope="col" class="text-center">Supprimmer Film</th>
        <th scope="col" class="text-center">Editer</th>
        </tr>
    </thead>
    <tbody>
        <?php selectAllFilms();?>
    </tbody>
    </table>
</div>
<?php get_footer('admin'); ?>