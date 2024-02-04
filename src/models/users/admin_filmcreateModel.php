<?php

/**
 * Check if the film is already in the database
 */
function checkAlreadyExistFilm (): mixed
{
	global $db;
	$sql = 'SELECT title FROM movies WHERE title = :title';
	$query = $db->prepare($sql);
	$query->bindParam(':title', strtolower($_POST['title']), PDO::PARAM_STR);
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

	// Format data before adding it to our database
	$formattedDate = date('Y-m-d', strtotime($_POST['dates']));

	// Convert title to lowercase
	$titleToLowerCase = strtolower($_POST['title']);

	// Format time converting the input string into a real time before getting it into our database
	$convertedTime = convertTimeStringToTime($_POST['duration']);
	$data = [
		'title' => strtolower($_POST['title']),
		'dates' => $formattedDate,
		'duration' =>  $convertedTime,
        'note' =>  $_POST['note'],
        'synopsis' =>  $_POST['synopsis'],
        'directors' => $_POST['directors'],
		'poster' => 'images/' . $_FILES['imageFile']['name'],
		'slug' => str_replace(' ', '-', $titleToLowerCase)
 	];
	if(validateDate($formattedDate)){
		// Insert into movies table
		try {
			$sql = 'INSERT INTO movies (title, dates, duration, synopsis, rating, directors, poster, slug) VALUES (:title, :dates, :duration, :synopsis, :note, :directors, :poster, :slug)';
			$query = $db->prepare($sql);
			$query->execute($data);

			// Get the last inserted ID of movies
			$lastInsertedId = $db->lastInsertId();

		}catch (PDOException $e) {
			if($_ENV['DEBUG']){
				dump($e->getMessage());
				die;
			}else{
				return 'Erruer lors de la connexion';
			}
			
		}
		// Insert movies_id and categories_id into movies_categories table each movie linked to a categorie if exist

				try{
					$catsId = getCategoriesId();
			        foreach($catsId as $catId){
					$data =[
						'movies_id' => $lastInsertedId,
						'categories_id' => $catId
					];
					$sql ='INSERT INTO movies_categories (movies_id, categories_id) VALUES (:movies_id, :categories_id)';
					$query = $db->prepare($sql);
					$query->execute($data);
				}
	
			}catch (PDOException $e){
				if($_ENV['DEBUG']){
					dump($e->getMessage());
					die;
				}else{
					return 'Erruer lors de la connexion';
				}
	
			}

			// Insert into casts table

			try{
				
				insertCastings();
			
			}catch(PDOException $e){
				if($_ENV['DEBUG']){
					dump($e->getMessage());
					die;
				}else{
					return 'Erruer lors de la connexion';
				}
			}
			// Insert movies_id and casts_id into movies_casts table each cast linked to a  movie if exist

			try{
				$castsId = getCastsId();
				foreach($castsId as $castId){
				$data =[
					'movies_id' => $lastInsertedId,
					'casts_id' => $castId
				];
				$sql ='INSERT INTO movies_casts (movies_id, casts_id) VALUES (:movies_id, :casts_id)';
				$query = $db->prepare($sql);
				$query->execute($data);
			}

		}catch (PDOException $e){
			if($_ENV['DEBUG']){
				dump($e->getMessage());
				die;
			}else{
				return 'Erruer lors de la connexion';
			}

		}

}
}
function insertCastings()
{
    if (!empty($_POST['casts'])) {
		$castings =explode(', ', $_POST['casts']);
		$castings = array_map('trim',$castings);

        try {
            global $db;
			$sql = 'INSERT INTO casts (nom) VALUES (:nom)';
            $query = $db->prepare($sql);

            foreach ($castings as $selectedCasting) {
                $query->bindParam(':nom', strtolower($selectedCasting));
                $query->execute();
            }

        } catch (PDOException $e) {
            if ($_ENV['DEBUG']) {
                dump($e->getMessage());
                die;
            } else {
                return ['error' => 'Erreur lors de la connexion'];
            }
        }
    }
}
function getCategoriesId() : array
{
    if (isset($_POST['categories']) && is_array($_POST['categories']) && !empty($_POST['categories'])) {
        $categoryIds = [];

        try {
            global $db;

            foreach ($_POST['categories'] as $selectedCategory) {
                $sql = 'SELECT id FROM categories WHERE nom = :nom';
                $query = $db->prepare($sql);
                $query->bindParam(':nom', $selectedCategory);
                $query->execute();
                $result = $query->fetchColumn();

                if ($result !== false) {
                    $categoryIds[] = $result;
                }
            }

            return $categoryIds;
        } catch (PDOException $e) {
            if ($_ENV['DEBUG']) {
                dump($e->getMessage());
                die;
            } else {
                return ['error' => 'Erreur lors de la connexion'];
            }
        }
    }
}
function getCastsId() : array
{
    if (!empty($_POST['casts'])) {
		$castings =explode(', ', $_POST['casts']);
		$castings = array_map('trim',$castings);
        $castIds = [];

        try {
            global $db;
			$sql = 'SELECT id FROM casts WHERE nom = :nom';
			$query = $db->prepare($sql);

            foreach ($castings as $selectedCast) {
                $query->bindParam(':nom', strtolower($selectedCast));
                $query->execute();
                $result = $query->fetchColumn();

                if ($result !== false) {
                    $castIds[] = $result;
                }
            }

            return $castIds;
        } catch (PDOException $e) {
            if ($_ENV['DEBUG']) {
                dump($e->getMessage());
                die;
            } else {
                return ['error' => 'Erreur lors de la connexion'];
            }
        }
    }
}


function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    // Retourne true si la date est valide et correspond au format, false sinon
    return $d && $d->format($format) === $date;
}

function selectCategories(){
	global $db;
	try{
		$sql = 'SELECT * FROM categories';
		$query = $db->prepare($sql);
        $query->execute();
		return $query->fetchAll();
	}catch(PDOExeption $e){
		if($_ENV['DEBUG']){
			dump($e->getMessage());
			die;
		}else{
			return 'Erruer lors de la connexion';
		}
	}
}