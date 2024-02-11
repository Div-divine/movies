<?php

// Sanitize user input
$searchTerm = filter_var($_POST['search'], FILTER_SANITIZE_SPECIAL_CHARS);

$filmsTitle = FilmsName();
$searchResult = searchFilmsByName($filmsTitle, $searchTerm);