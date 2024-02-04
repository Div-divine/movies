<?php get_header('Editer un utilisateur', 'admin'); ?>

<form action="" method="post" class="mt-5" novalidate>
    <div class="mb-4">
		<?php $error = checkEmptyFields('name'); ?>
		<label for="<?= getFromUrl('id')?>" class="form-label" style="color: grey; border: 0px;font-weight: bold">Nom : *</label>
		<input type="text" name="name" id="<?= getFromUrl('id')?>" value="<?= getValue('nom'); ?>" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		<?= $errorsMessage['name']; ?>
	</div>
	<div class="mb-4">
		<?php $error = checkEmptyFields('email'); ?>
		<label for="email" class="form-label" style="color: grey; border: 0px;font-weight: bold">Adresse email : *</label>
		<input type="email" name="email" id="email" value="<?= getValue('email'); ?>" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		<?= $errorsMessage['email']; ?>
	</div>
	<div class="d-flex justify-content-center">
		<input type="submit" class="btn submit" value="Sauvegarder">
	</div>
</form>

<?php get_footer('admin'); ?>
