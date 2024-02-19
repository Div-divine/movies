<?php

// Sanitize user input
if (!empty($_POST['search-film'])) {
    $searchTerm = filter_var($_POST['search-film'], FILTER_SANITIZE_SPECIAL_CHARS);
}
$filmsTitle = FilmsName();
$searchResult = searchFilmsByName($filmsTitle, $searchTerm);
