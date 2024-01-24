<?php

if (!empty($_POST)) {
    
	// Save user in database
	if (!empty($_POST['title']) && !empty($_POST['dates']) && !empty($_POST['duration']) && !empty($_POST['note']) && !empty($_POST['casts'])
     && !empty($_POST['synopsis']) && !empty($_POST['cats']) && !empty($_POST['directors']))
    { 
        if(checkAlreadyExistFilm () == false){
                addFilm ();
                alert('film ajouté avec success.', 'success');
        }

	}else if(empty($_POST['title']) || empty($_POST['dates']) || empty($_POST['duration']) || empty($_POST['note']) || empty($_POST['casts'])
              || empty($_POST['synopsis']) || empty($_POST['cats']) || empty($_POST['directors']))
    {
            alert('Merci de remplir tous les champs obligatoires.');
    } 
    else {
			alert('Erreur lors de l\'ajout de film.');
            alert('Le film exist deja');
	}

	}  