<?php
if(!empty($_POST['email']) && !empty($_POST['pwd'])){
    $accessUser = checkUserAcess();
    if(!empty($accessUser)){
        $_SESSION['user'] = [
            'id' => $accessUser,
            'lastLogin' => date('Y-m-d H:i:s')

        ];
        

        saveLastLogin($accessUser);

        alert('Connexion faites avec success', 'success');
        header('Location: '. $router->generate('createFilms'));
        die;
    }else{
        alert('Identifiants Incorrects', 'danger');
    }
}
