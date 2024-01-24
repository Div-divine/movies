<?php

/**
 * Check if the film is already in the database
 */
function checkAlreadyExistFilm (): mixed
{
	global $db;
	$sql = 'SELECT title FROM movies WHERE title = :title';
	$query = $db->prepare($sql);
	$query->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
	$query->execute();

	return $query->fetch();
}

/**
 * Convert input date format to Y-m-d
 */
/**
 * Add Film in the database
 */

function addFilm ()
{
	global $db;
	$formattedDate = date('Y-m-d', strtotime($_POST['dates']));
	$data = [
		'title' => $_POST['title'],
		'dates' => $formattedDate,
		'duration' =>  $_POST['duration'],
        'note' =>  $_POST['note'],
        'casts' =>  $_POST['casts'],
        'cats' =>  $_POST['cats'],
        'synopsis' =>  $_POST['synopsis'],
        'directors' => $_POST['directors']
	];
	if(validateDate($formattedDate)){
		try {
			$sql = 'INSERT INTO movies (title, dates, duration, synopsis, rating, categories, castings, directors) VALUES (:title, :dates, :duration, :synopsis, :note, :cats, :casts, :directors)';
			$query = $db->prepare($sql);
			$query->execute($data);
		}catch (PDOException $e) {
			if($_ENV['DEBUG']){
				dump($e->getMessage());
				die;
			}else{
				return 'Erruer lors de la connexion';
			}
			
		}
	}
}


function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    // Retourne true si la date est valide et correspond au format, false sinon
    return $d && $d->format($format) === $date;
}