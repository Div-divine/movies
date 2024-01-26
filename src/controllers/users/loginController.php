<?php
function limitAttemps()
{
    global $router;

    if (!empty($_SESSION['attemps']['time'])) {
        $date = new DateTimeImmutable();
        $now = $date->getTimestamp();
        $diff = $now - $_SESSION['attemps']['time'];

        if ($diff > 300) {
            unset($_SESSION['attemps']);
        } else {
            alert('Trop de tentatives, veuillez réessayer dans 5 minutes');
            header('Location: ' . $router->generate('home'));
            die;
        }
    } else {
        if (empty($_SESSION['attemps'])) {
            $_SESSION['attemps']['count'] = 1;
        } else if (!empty($_SESSION['attemps']['count']) && $_SESSION['attemps']['count'] < 5) {
            $_SESSION['attemps']['count']++;
        } else if ($_SESSION['attemps']['count'] >= 5) {
            $date = new DateTimeImmutable();
            $_SESSION['attemps']['time'] = $date->getTimestamp();
        }
    }
}

if(!empty($_POST['email']) && !empty($_POST['pwd'])){
    $accessUser = checkUserAcess();
    if(!empty($accessUser)){
        $_SESSION['user'] = [
            'id' => $accessUser,
            'lastLogin' => date('Y-m-d H:i:s')

        ];
        

        saveLastLogin($accessUser);
        unset($_SESSION['attemps']);

        alert('Connexion faites avec success', 'success');
        header('Location: '. $router->generate('createFilms'));
        die;
    }else{
        limitAttemps();
        alert('Identifiants Incorrects', 'danger');
    }
}
