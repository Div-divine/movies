<?php

function listUsers(){
    global $db;
    
    $sql = 'SELECT id, nom, email FROM users ORDER BY nom';
    $query =$db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    
}