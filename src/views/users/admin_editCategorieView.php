<?php get_header('Editer une categorie', 'admin'); ?>

<h2>Editer les catégories</h2>

<form action="" method="post" class="mt-5" novalidate>
    <div class="mb-4">
		<?php $error = checkEmptyFields('name'); ?>
		<label for="name" class="form-label" style="color: grey; border: 0px;font-weight: bold">Nom : *</label>
		<input type="text" name="name" id="<?= getFromUrl('id')?>" value="<?= ucwords(getValue('nom')); ?>" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		
	</div>
	<div class="d-flex justify-content-center">
		<input type="submit" class="btn submit" value="Sauvegarder">
	</div>
</form>

<?php get_footer('admin'); ?>
