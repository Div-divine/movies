<?php

function editFilms($filmId) {
    global $db;

    $sql = "SELECT * FROM movies WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $filmId);

    try {
        $stmt->execute();
        $editData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editData;
    } catch (PDOException $e) {
        // Log or echo the error message for debugging
        echo "Error: " . $e->getMessage();
        return false; // Indicate failure
    }
}

function updateFilm($filmId){
    $formattedDate = date('Y-m-d', strtotime($_POST['dates-edit']));
	$data = [
        'id' => $filmId,
		'title' => $_POST['title-edit'],
		'dates' => $formattedDate,
		'duration' =>  $_POST['duration-edit'],
        'note' =>  $_POST['note-edit'],
        'casts' =>  $_POST['cast-edit'],
        'cats' =>  $_POST['cat-edit'],
        'synopsis' =>  $_POST['synopsis-edit'],
        'directors' => $_POST['director-edit']
	];
    global $db;

    $sql = "UPDATE movies SET title= :title, dates= :dates, duration=:duration, synopsis= :synopsis, rating= :note, 
                categories= :cats, castings= :casts, directors= :directors WHERE id = :id";
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute($data);
        // Return true on success or handle success as needed
        return true;
    } catch (PDOException $e) {
        if($_ENV['DEBUG']){
             // Log or echo the error message for debugging
            echo "Error: " . $e->getMessage();
            // Return false to indicate failure
            return false;
        } else {
            alert('Erruer lors de la connexion');
        }
       
    }
}

