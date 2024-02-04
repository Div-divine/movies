<?php

if(!empty($_GET['id']) && !empty(getAlreadyExistCategorieId()->id)){
        deleteCategorie();
}else{
    alert('Impossible de supprimmer cette categorie.', 'danger');
}

header('Location:'. $router->generate('Categories'));
die;