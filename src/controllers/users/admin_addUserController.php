<?php

$errorsMessage = [
	'email' => false,
    'refusedemail' => false,
	'pwd' => false,
	'pwdConfirm' => false,
	'name' => false,
];

if (!empty($_POST)){
    // Check name already exist
	
	if (!empty($_POST['name']) && !empty($_POST['pwd']) && !empty($_POST['pwdConfirm']) && !empty($_POST['email'])) {
		
		if (!empty($_POST['name'])) {
            if (!empty(checkAlreadyExistName())) {
                $errorsMessage['name'] = 'Nom existe déjà';
            }
        }
        // Check email format and already exist
	if (!empty($_POST['email'])) {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errorsMessage['email'] = 'Email non valide';
		}

        // check if already exists email
        if(!empty(checkAlreadyExistEmail())){
        $errorsMessage['refusedemail'] = 'Email refusé';
        }
	}

	// Check password format and match with password confirm
	if (!empty($_POST['pwd'])) {
		$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/';
		if (!preg_match($regex, $_POST['pwd'])) {
			$errorsMessage['pwd'] = 'Merci de respecter le format indiqué.';
		} else if ($_POST['pwd'] !== $_POST['pwdConfirm']) {
			$errorsMessage['pwdConfirm'] = 'Les mots de passe ne sont pas indentiques.';
		}
	}
    // Add user to database
	if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['pwd']) && !empty($_POST['pwdConfirm'])) {
		if (!$errorsMessage['email'] && !$errorsMessage['name'] && !$errorsMessage['pwd'] && !$errorsMessage['pwdConfirm'] && !$errorsMessage['refusedemail'] ) {
                var_dump($_POST);
				addUser();
			   // Redirection to users list
			   header('Location: '.$router->generate('Users'));
		} else {
			alert('Erreur lors de l\'ajout de l\'utilisateur.');
		}
	} 
		
	}else {
		alert('Merci de remplir tous les champs obligatoires.');

	}	


}