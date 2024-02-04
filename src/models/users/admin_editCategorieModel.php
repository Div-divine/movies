<?php


function updateCategorie () : void
{
	global $db;
	$data = [
		'nom' => strtolower($_POST['name']),
        'id' => $_GET['id']
	];
	try{
		$sql = 'UPDATE categories SET nom = :nom WHERE id = :id';
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
 * Get current categorie
 */

 
 function getCategorie() : bool | object
 {
	try{
		global $db;
		$sql = 'SELECT nom FROM categories WHERE id= :id';
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

