<?php get_header('Editer les films', 'admin'); ?>
<div class="mb-5">
    <a href="<?= $router->generate('listFilms')?>" style="text-decoration: none;" class="bg-primary text-white p-2">Retour</a>
</div>
<h1 class="mb-4 text-center">Editer un Film</h1>
<div>
    <form action="" method="post">
        <div class="mb-3">
            <label for="title-edit" class="form-label">Titre du film</label>
            <input type="text" class="form-control text-info bg-dark" id="title-edit" name="title-edit" value="<?= $editResults['title'] ?>">
            <input type="hidden" class="form-control" id="title-edit" name="fieldEdit-id" value="<?= $editResults['id'] ?>">
        </div>
        <div class="mb-3">
            <label for="dates-edit" class="form-label">Date de sortie</label>
            <input type="date" class="form-control" id="dates-edit" name="dates-edit" value="<?= $reformat ?>">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durée du Film</label>
            <input type="text" class="form-control text-info bg-dark" id="duration-edit" name="duration-edit" value="<?= $editResults['duration'] ?>">
        </div>
        <div class="mb-3">
            <label for="note-edit" class="form-label">Note Presse</label>
            <input type="number" class="form-control" id="note-edit" name="note-edit" step=0.1 value="<?= $editResults['rating'] ?>">
        </div>
        <div class="mb-3">
            <label for="cat-edit" class="form-label">Catégorie(s)</label>
            <input type="text" class="form-control text-info bg-dark" id="cat-edit" name="cat-edit"  value="<?= $editResults['categories'] ?>">
        </div>
        <div class="mb-3">
            <label for="cast-edit" class="form-label">Casts de Film</label>
            <input type="text" class="form-control" id="cast-edit" name="cast-edit"  value="<?= $editResults['castings'] ?>">
        </div>
        <div class="mb-3">
            <label for="director-edit" class="form-label">Réalisateur(s)</label>
            <input type="text" class="form-control text-info bg-dark" id="director-edit" name="director-edit"  value="<?= $editResults['directors'] ?>">
        </div>
        <div class="mb-3">
            <label for="synopsis-edit" class="form-label">Description de Film</label>
            <textarea class="form-control" id="synopsis-edit" name="synopsis-edit" rows="3" ><?= $editResults['synopsis'] ?></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Sauvegerder" class="btn btn-primary">
        </div>
    </form>
</div>
<?php get_footer('admin'); ?>