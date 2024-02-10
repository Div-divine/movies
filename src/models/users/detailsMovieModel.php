<?php
// Get the films id using the slug

function selectFilmId(){
    global $db;
    $sql = "SELECT id FROM movies WHERE slug = ':slug'";
    $smt = $db->prepare($sql);
    try{
        $smt->execute(['slug' => $_GET['slug']]);
        return $smt->fetch();

    }catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
        }
    }
}

// Get all from the movies table

function selectedFilmInfo()
{
    global $db;
    try {
        $sql = "SELECT * FROM movies WHERE id = ':id' " ;
        $data = $db->query($sql);
        $data->execute(['id' => selectFilmId()]);
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
