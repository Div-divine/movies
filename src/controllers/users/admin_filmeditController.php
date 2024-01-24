<?php
$editResults = null;  // Initialise
if (isset($_POST['EditFilm'])) {
    $editResults = editFilms($_POST['EditFilm']);
    // reconvert date format to add as default value in date input field
    $reformat = date('Y-m-d', strtotime($editResults['dates']));
}


if (!empty($_POST['fieldEdit-id']) && isset($_POST['title-edit']) && isset($_POST['dates-edit']) && isset($_POST['duration-edit']) 
    && isset($_POST['note-edit']) && isset($_POST['cast-edit']) && isset($_POST['synopsis-edit']) 
    && isset($_POST['cat-edit']) && isset($_POST['director-edit']))
    {
    updateFilm($_POST['fieldEdit-id']);
    
    alert('Modification faite avec success.', 'success');
    header('Location: '.$router->generate('listFilms').'');
    exit();
}
    