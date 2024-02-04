<?php

function selectAllFilms(){
    global $db;
    global $router;
    $sql= "SELECT * FROM movies";
    $data= $db->query($sql);
    $data->execute();
    $results= $data->fetchAll(PDO::FETCH_ASSOC);
    }
