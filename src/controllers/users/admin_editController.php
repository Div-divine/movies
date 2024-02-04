<?php

$errorsMessage = [
	'email' => false,
	'name' => false,
];

if (!empty($_POST)) {
	// Check name already exist
	/*
	if (!empty($_POST['name'])) {
		
		if (!empty(checkAlreadyExistName())) {
			$errorsMessage['name'] = 'Nom existe déjà';
		}
		
	}
	*/
	
	// Check email format and already exist
	if (!empty($_POST['email'])) {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errorsMessage['email'] = 'Email non valide';
		}
	}

	/*

	// Check password format and match with password confirm
	if (!empty($_POST['pwd'])) {
		$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/';
		if (!preg_match($regex, $_POST['pwd'])) {
			$errorsMessage['pwd'] = 'Merci de respecter le format indiqué.';
		} else if ($_POST['pwd'] !== $_POST['pwdConfirm']) {
			$errorsMessage['pwdConfirm'] = 'Les mots de passe ne sont pas indentiques.';
		}
	}

	*/

	// Update user in database
	if (!empty($_POST['email']) && !empty($_POST['name'])) {
		if (!$errorsMessage['email'] && !$errorsMessage['name'] ) {

			if (!empty($_GET['id'])) {
				updateUser();
			} 
			// Redirection to users list
			header('Location: '.$router->generate('Users'));
		} else {
			alert('Erreur lors de l\'ajout de l\'utilisateur.');
		}
	} else {
		alert('Merci de remplir tous les champs obligatoires.');

	}	

} 
else if(!empty($_GET['id'])){
	$_POST= (array) getUser();
}


