<?php
// Get the films id using the slug

function selectFilmId(){
    global $db;
    $sql = "SELECT id FROM movies WHERE slug = :slug";
    $smt = $db->prepare($sql);
    try {
        $smt->execute(['slug' => $_GET['slug']]);
        $result = $smt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];

    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
        }
    }
}

// Get all from the movies table

function selectedFilmInfo($id)
{
    global $db;
    try {
        $sql = "SELECT * FROM movies WHERE id = :id";
        $data = $db->prepare($sql);
        $data->bindParam(':id', $id);
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

// Get casts by film

function selectMoviesWithTheirCasts($id)
{

    global $db;
    try {
        $sql = "SELECT casts.id AS cast_id, casts.nom AS cast_name, casts.img AS cast_image
        FROM movies
        JOIN movies_casts ON movies.id = movies_casts.movies_id
        JOIN casts ON movies_casts.casts_id = casts.id
        WHERE movies.id = :movie_id";
        $data = $db->prepare($sql);
        $data->execute([':movie_id' => $id]);
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

// Select Categories of film
function selectFilmCategories($id)
{

    global $db;
    try {
        $sql = "SELECT categories.id AS categorie_id, categories.nom AS categorie_name
        FROM movies
        JOIN movies_categories ON movies.id = movies_categories.movies_id
        JOIN categories ON movies_categories.categories_id = categories.id
        WHERE movies.id = :movie_id";
        $data = $db->prepare($sql);
        $data->execute([':movie_id' => $id]);
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

// Configure date output

function ConfigureTime($duration)
{
    // Split the duration into hours, minutes, and seconds
    list($hours, $minutes, $seconds) = explode(':', $duration);

    // Convert the parts to integers
    $hours = intval($hours);
    $minutes = intval($minutes);
    $seconds = intval($seconds);

    // Build the formatted string
    $formattedDuration = '';
    if ($hours > 0) {
        $formattedDuration .= $hours . 'h ';
    }
    if ($minutes > 0 || $hours > 0) {
        $formattedDuration .= sprintf('%02d', $minutes) . 'm';
    }

    return $formattedDuration;
}

// Get categories id

function selectCategoriesId($id)
{

    global $db;
    try {
        $sql = "SELECT categories.id AS categorie_id
        FROM movies
        JOIN movies_categories ON movies.id = movies_categories.movies_id
        JOIN categories ON movies_categories.categories_id = categories.id
        WHERE movies.id = :movie_id";
        $data = $db->prepare($sql);
        $data->execute([':movie_id' => $id]);
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

// Select other films of the same categorie

function FilmsOfTheSameCategorie($categories){
    global $db;
    try {
        $result = [];

        foreach($categories as $category){
            $categoryId = $category['categorie_id'];
            $sql = "SELECT movies_id FROM movies_categories WHERE categories_id = :id";
            $data = $db->prepare($sql);
            $data->execute([':id' => $categoryId]);
            $result[$categoryId] = $data->fetchAll(PDO::FETCH_ASSOC);
        }

        return $result;

    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue. Merci de réessayer plus tard.', 'danger');
        }
    }
}
