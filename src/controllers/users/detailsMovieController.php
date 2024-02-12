<?php
$filmId = selectFilmId();

$FilmDetails = selectedFilmInfo($filmId);
$filmCategories = selectFilmCategories($filmId);
$casts = selectMoviesWithTheirCasts($filmId);
$catId = selectCategoriesId($filmId);
$movie = FilmsOfTheSameCategorie($catId);
