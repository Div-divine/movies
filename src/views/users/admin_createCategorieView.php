<?php get_header('Ajouter une categorie', 'admin'); ?>

<h2>Ajouter les catégorie</h2>

<form action="" method="post" class="mt-5" novalidate>
    <div class="mb-4 ">
		<?php $error = checkEmptyFields('cats'); ?>
		<label for="cats" class="form-label" style="color: grey; border: 0px;font-weight: bold">Nom : *</label>
		<input type="text" name="cats[]" id="cats" class="form-control <?= $error['class']; ?> editUserHolder" style="background-color: #191919; color: grey; border: 1px solid grey;" placeholder="Vous pouvez ajouter plusieurs catégories à la fois. Ex: drame, thriller, comedie">
		<?= $error['message']; ?>
        <?= $errorsMessage['name']; ?>
		
	</div>
	<div class="d-flex justify-content-center">
		<input type="submit" class="btn submit" value="Sauvegarder">
	</div>
</form>

<?php get_footer('admin'); ?>
