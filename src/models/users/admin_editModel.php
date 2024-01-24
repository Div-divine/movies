<?php

/**
 * Check if the email is already in the database
 */
function checkAlreadyExistEmail (): mixed
{
	global $db;
	if(!empty($_GET['id'])){
		$email = getUser()->email;

		if($email == $_POST['email']){
			return false;
		}
	}

	$sql = 'SELECT email FROM users WHERE email = :email';
	$query = $db->prepare($sql);
	$query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
	$query->execute();

	return $query->fetch();
}

/**
 * Add a user in the database
 */
function addUser ()
{
	global $db;
	$data = [
		'email' => $_POST['email'],
		'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT),
		'role_id' => 1
	];

	try {
		$sql = 'INSERT INTO users (id, email, pwd, role_id) VALUES (UUID(), :email, :pwd, :role_id)';
		$query = $db->prepare($sql);
		$query->execute($data);
		alert('Un utilisateur a bien été ajouté.', 'success');
	} catch (PDOException $e) {
		if($_ENV['DEBUG'] == 'true'){
			dump($e->getMessage());
			die;
		}else{
			alert('Une erreur est survenue lors de la connexion');
		}
		
	}
}


function updateUser () : void
{
	global $db;
	$data = [
		'email' => $_POST['email'],
		'pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT),
		'id' => $_GET['id']
	];
	try{
		$sql = 'UPDATE users SET email = :email, pwd = :pwd WHERE id = :id';
		$query = $db->prepare($sql);
		$query->execute($data);
		alert('La modification a été faite avec success.', 'success');

	}catch(PDOException $e){
		if($_ENV['DEBUG'] == 'true'){
			dump($e->getMessage());
			die;
		}else{
			alert('Une erreur est survenue lors de la connexion. Merci de réessayer plus tard', 'danger');
		}
          
	}
}

/**
 * Get current User
 */

 
 function getUser() : bool | object
 {
	try{
		global $db;
		$sql = 'SELECT email FROM users WHERE id= :id';
		$query = $db->prepare($sql);
		$query->execute(['id' => $_GET['id']]);
	
		return $query->fetch();
	}catch(PDOException $e){
		if($_ENV['DEBUG'] == 'true'){
			dump($e->getMessage());
			die;
		}else{
			alert('Une erreur est survenue. Merci e réessayer plus tard.', 'danger');
		}
	}
}
