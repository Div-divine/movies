<?php

function checkUserAcess()
{
    global $db;
    $sql='SELECT id, nom, pwd FROM users WHERE email = :email';
    $query = $db->prepare($sql);
    $query->execute(['email' => $_POST['email']]);

    return $user = $query->fetch();
    if(password_verify($_POST['pwd'], $user->pwd)){
        return $user;
    }else{
        return false;
    }
}


function saveLastLogin(string $userId)
{
    global $db;
    $sql ='UPDATE users SET lastLogin = NOW() WHERE id = :id';
    $query =$db->prepare($sql);
    $query->execute(['id' => $userId]);
}
