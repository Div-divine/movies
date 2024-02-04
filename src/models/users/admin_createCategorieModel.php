<?php

function checkAlreadyExistCategorie(): bool
{
    global $db;

    try {
        $sql = 'SELECT COUNT(*) FROM categories WHERE nom = :nom';
        $query = $db->prepare($sql);

        foreach ($_POST['cats'] as $cats) {
            $lowercaseCats = strtolower($cats);

            $query->bindParam(':nom', $lowercaseCats, PDO::PARAM_STR);
            $query->execute();

            // Check if any matching category is found
            $count = $query->fetchColumn();

            if ($count > 0) {
                return true; // Category already exists
            }
        }

        return false; // No matching category found

    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue lors de la connexion');
        }
    }
}


function createCategorie()
{
    global $db;

    try {
        $sql = 'INSERT INTO categories(nom) VALUES(:nom)';
        $query = $db->prepare($sql);

        foreach ($_POST['cats'] as $cats) {
            $lowercaseCats = strtolower($cats);
            
            // Bind the parameter and execute the query for each category
            $query->bindParam(':nom', $lowercaseCats, PDO::PARAM_STR);
            $query->execute();
        }

        // Optionally, you may return a success message or perform additional actions after the loop.
        return 'Categories inserted successfully';
    } catch (PDOException $e) {
        if ($_ENV['DEBUG'] == 'true') {
            dump($e->getMessage());
            die;
        } else {
            alert('Une erreur est survenue lors de la connexion');
        }
    }
}
