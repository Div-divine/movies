<?php 
$movies = getNewMovies();

// slice the array to fetch the items starting from the fourth item of the list

$orderMovies = array_slice(getAllMovies(), 4);
