<?php

if (isset($_SESSION['user'])) {
    // Retrieve user name
    $userName = $_SESSION['user']['name'];

} 
$allFilms = selectAllFilms();

$fisrtFourFilms = selectFirstFourAddedFilms();




