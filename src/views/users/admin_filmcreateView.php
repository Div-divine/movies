<?php get_header('Creer un nouveau film', 'admin'); ?>

<form action="" method="post" enctype="multipart/form-data" class="mt-5">
    <div id="preview-container" class="d-flex justify-content-center text-center" style="width:300px; height:auto; margin-left:auto; margin-right:auto">
        <img id="image-preview" alt="Visuel Image" style="width:100%; color:grey;font-weight: bold">
    </div>
    <div class="d-flex justify-content-center">
        <div class="mb-3 w-25 text-center ">
            <label for="imageFile" class="form-label" style="color:grey;font-weight: bold">Ajouter votre fichier</label>
            <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="previewImage()" style="background-color: #191919; color: grey; border: 1px solid grey;">
        </div>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('title'); ?>
        <span class="input-group-text w-25 " style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Titre du film:</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="title" name="title" style="background-color: #191919; color: grey; border: 1px solid grey;">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('dates'); ?>
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Date de sortie :</span>
        <input type="date" class="form-control <?= $error['class']; ?>"  id="dates" name="dates" style="background-color: #191919; color: grey; border: 1px solid grey;">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Castings :</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="casts" name="casts" style="background-color: #191919; color: grey; border: 1px solid grey;">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Réalisateur(s) :</span>
        <input type="text" class="form-control <?= $error['class']; ?>"  id="directors" name="directors" style="background-color: #191919; color: grey; border: 1px solid grey;">
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('duration'); ?>
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Durée du film :</span>
        <input type="text" class="form-control <?= $error['class']; ?> placeholder-color"   id="duration" name="duration" placeholder = "Example de format : 2h30m" style="background-color: #191919; color: grey; border: 1px solid grey;">
        <?= $error['message']; ?>
    </div>
    <div class="input-group mb-3">
        <?php $error = checkEmptyFields('note'); ?>
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold;">Note de film :</span>
        <input type="number" class="form-control <?= $error['class']; ?>" id="note" name="note" step= 0.1 style="background-color: #191919; color: grey; border: 1px solid grey;">
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0;font-weight: bold;">sur 10</span>
        <?= $error['message']; ?>
    </div>
    <div class="mb-3" style="border: 1px solid grey; border-radius:16px">
        <p class="text-center" style="color:grey ;font-weight: bold;">Catégories</p>
        <div class="input-group mb-3 d-flex justify-content-center">
            <?php foreach ($catdatas as $catdata) {?>
                <div class="p-3">
                    <input class="form-check-input" type="checkbox" value="<?= $catdata->nom?>" id="<?= $catdata->id?>" name="categories[]" style="background-color: #356444">
                    <label class="form-check-label" for="<?= $catdata->id?>" style="color:grey"><?= ucfirst($catdata->nom)?></label>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="input-group mb-4">
        <?php $error = checkEmptyFields('synopsis'); ?>
        <span class="input-group-text w-25" style="background-color: #3B3F43; color: grey; border: 0px;font-weight: bold">Description de film :</span>
        <textarea class="form-control <?= $error['class']; ?>" name="synopsis" id="synopsis" style="min-height:200px; background-color: #191919; color: grey; border: 1px solid grey;"></textarea>
        <?= $error['message']; ?>
    </div> 
    <div class="d-flex justify-content-center mt-5">
        <input type="submit" value="Sauvegarder" class="btn submit">
    </div>
    
</form>

<?php get_footer('admin'); ?>
