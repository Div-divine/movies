<?php

// Select Films name
function FilmsName(){
    global $db;
    try {
        $sql = "SELECT title, poster, slug FROM movies";
        $data = $db->prepare($sql);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
        }
    }
}

// Search Films by name
function searchFilmsByName($names, $search) {
    $results = array();
    foreach ($names as $name) {
        $pos = strpos(strtolower($name['title']), strtolower($search));
        if ($pos !== false) {
            $results[] = $name;
        }
    }
    return $results;
}


