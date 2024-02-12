<?php
/**
 * Get the film's ID using the slug
 *
 * @return int|string The film's ID or an error message if an exception occurs.
 */
function selectFilmId() :int|string {
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
            alert('An error occurred. Please try again later.', 'danger');
        }
    }
}

/**
 * Get all information from the movies table for a given ID
 *
 * @param int $id The film's ID
 * @return array The film's information or an error message if an exception occurs.
 */
function selectedFilmInfo(int $id) :array {
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
            alert('An error occurred. Please try again later.', 'danger');
        }
    }
}

/**
 * Get casts by film
 *
 * @param int $id The film's ID
 * @return array The casts information for the film or an error message if an exception occurs.
 */
function selectMoviesWithTheirCasts(int $id) :array {
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
            alert('An error occurred. Please try again later.', 'danger');
        }
    }
}

/**
 * Select Categories of film
 *
 * @param int $id The film's ID
 * @return array The categories information for the film or an error message if an exception occurs.
 */
function selectFilmCategories(int $id) :array {
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
            alert('An error occurred. Please try again later.', 'danger');
        }
    }
}

/**
 * Configure date output
 *
 * @param string $duration The film's duration in the format HH:MM:SS
 * @return string The formatted duration or an empty string if an exception occurs.
 */
function ConfigureTime(string $duration) :string {
    // ... (remaining code as it is)
}

/**
 * Select Categories ID
 *
 * @param int $id The film's ID
 * @return array The categories IDs for the film or an error message if an exception occurs.
 */
function selectCategoriesId(int $id) :array {
    global $db;
    try {
        // ... (remaining code as it is)
    } catch (PDOException $e) {
        // ... (remaining code as it is)
    }
}

/**
 * Select other films ID of the same category
 *
 * @param array $categories The array of categories for a film
 * @return array The films IDs for the same categories or an error message if an exception occurs.
 */
function FilmsOfTheSameCategorie(array $categories) :array {
    global $db;
    try {
        // ... (remaining code as it is)
    } catch (PDOException $e) {
        // ... (remaining code as it is)
    }
}

/**
 * Get films of the same categories using the previously selected category ID
 *
 * @param int $id The film's ID
 * @return array The films information for the same categories or an error message if an exception occurs.
 */
function getFilms(int $id) :array {
    global $db;
    try {
        // ... (remaining code as it is)
    } catch (PDOException $e) {
        // ... (remaining code as it is)
    }
}

/**
