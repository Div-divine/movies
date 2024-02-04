<?php

function listCategories(){
    global $db;
    
    $sql = 'SELECT id, nom FROM categories ORDER BY id';
    $query =$db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    
}