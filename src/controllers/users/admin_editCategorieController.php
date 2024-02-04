<?php

if (!empty($_POST)) {
	// Check name already exist
	if (!empty($_POST['name']) && !empty($_GET['id'])) {
		updateCategorie();
		// Redirection to categories list
		header('Location: '.$router->generate('Categories'));
	}

} 

else if(!empty($_GET['id'])){
	$_POST= (array) getCategorie();
}





