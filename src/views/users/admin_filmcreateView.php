<?php get_header('Editer un film', 'admin'); ?>

<h1 class="mb-4">Creer un nouveau Film</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div id="preview-container" class="d-flex justify-content-center mb-3" style="width:300px; height:auto; margin-left:auto; margin-right:auto">
        <img id="image-preview" alt="Image Preview" style="width:100%">
    </div>
    <div class="mb-3">
        <label for="imageFile" class="form-label">Ajouter votre fichier</label>
        <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="previewImage()">
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('title'); ?>
        <span class="input-group-text w-25">Titre</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="title" name="title">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('dates'); ?>
        <span class="input-group-text w-25">Date de sortie</span>
        <input type="date" class="form-control <?= $error['class']; ?>"  id="dates" name="dates">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('duration'); ?>
        <span class="input-group-text w-25">Durée du film</span>
        <input type="text" class="form-control <?= $error['class']; ?>"   id="duration" name="duration">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('note'); ?>
        <span class="input-group-text w-25">Note de film</span>
        <input type="number" class="form-control <?= $error['class']; ?>" id="note" name="note" step= 0.1>
        <span class="input-group-text w-25">/10</span>
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('cats'); ?>
        <span class="input-group-text w-25">Catégorie(s)</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="cats" name="cats">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('casts'); ?>
        <span class="input-group-text w-25" >Casts</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="casts" name="casts">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('directors'); ?>
        <span class="input-group-text w-25">Réalisateur(s)</span>
        <input type="text" class="form-control <?= $error['class']; ?>" id="directors" name="directors">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-4">
        <?php $error = checkEmptyFields('synopsis'); ?>
        <span class="input-group-text w-25">Description de film</span>
        <textarea class="form-control <?= $error['class']; ?>" name="synopsis" id="synopsis" style="min-height:200px"></textarea>
        <?= $error['message']; ?>
    </div> 
    <div>
        <input type="submit" value="Sauvegarder" class="btn btn-success">
    </div>
    
</form>

<?php get_footer('admin'); ?>
