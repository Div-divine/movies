<?php
$errorsMessage = [
    'name' => false
];

if (!empty($_POST)) {
    if (!empty($_POST['cats'])) {

        // Check if category exists
        if (checkAlreadyExistCategorie()) {
            $errorsMessage['name'] = 'Cette categorie existe déjà';
        }

        // Save category if not exists
        if (!$errorsMessage['name']) {
            createCategorie();
        }
    }
}
