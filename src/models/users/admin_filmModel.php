<?php


function selectAllFilms()
{
    global $db;
    try {
        $sql = "SELECT * FROM movies ORDER BY updated";
        $data = $db->query($sql);
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

function selectFirstFourAddedFilms()
{
    global $db;
    try {
        $sql = "SELECT * FROM movies ORDER BY updated DESC LIMIT 4";
        $data = $db->query($sql);
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

function selectMoviesWithTheirCasts($id)
{

    global $db;
    try {
        $sql = "SELECT casts.id AS cast_id, casts.nom AS cast_name
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


function selectMoviesWithTheirCategories($id)
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

function formatDuration($duration)
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

