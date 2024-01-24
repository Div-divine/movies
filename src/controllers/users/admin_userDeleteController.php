<?php

if(!empty($_GET['id']) && !empty(getAlreadyExistId()->id) && countUsers() > 1){
        deleteUsers();
}else{
    alert('Impossible de supprimmer cet utilisateur.', 'danger');
}

header('Location:'. $router->generate('Users'));
die;