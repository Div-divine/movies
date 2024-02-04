<?php get_header('Editer un utilisateur', 'admin'); ?>

<form action="" method="post" class="mt-5" novalidate>
    <div class="mb-4">
		<?php $error = checkEmptyFields('name'); ?>
		<label for="name" class="form-label" style="color: grey; border: 0px;font-weight: bold">Nom : *</label>
		<input type="text" name="name" id="name" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		<?= $errorsMessage['name']; ?>
	</div>
	<div class="mb-4">
		<?php $error = checkEmptyFields('email'); ?>
		<label for="email" class="form-label" style="color: grey; border: 0px;font-weight: bold">Adresse email : *</label>
		<input type="email" name="email" id="email" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		<?= $errorsMessage['email']; ?>
        <?= $errorsMessage['refusedemail']; ?>
	</div>
	<div class="mb-4">
		<?php $error = checkEmptyFields('pwd'); ?>
		<label for="pwd" class="form-label" style="color: grey; border: 0px;font-weight: bold">Mot de passe : *</label>
		<input type="password" name="pwd" id="pwd" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<p class="form-text mb-0" style="color:grey">La regle des mdp ( Votre mots de passe doit comporter un Majuscule, un nombre, une signe et 12 charactères au minimum )</p>
		<?= $error['message']; ?>
		<?= $errorsMessage['pwd']; ?>
	</div>
	<div class="mb-4">
		<?php $error = checkEmptyFields('pwdConfirm'); ?>
		<label for="pwd-confirm" class="form-label" style="color: grey; border: 0px;font-weight: bold">Confirmation du mot de passe : *</label>
		<input type="password" name="pwdConfirm" id="pwd-confirm" class="form-control <?= $error['class']; ?>" style="background-color: #191919; color: grey; border: 1px solid grey;">
		<?= $error['message']; ?>
		<?= $errorsMessage['pwdConfirm']; ?>
	</div>
	<div class="d-flex justify-content-center">
		<input type="submit" class="btn submit" value="Sauvegarder">
	</div>
</form>

<?php get_footer('admin'); ?>
