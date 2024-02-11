<?php
$filmId = selectFilmId();

$FilmDetails = selectedFilmInfo($filmId);
$filmCategories = selectFilmCategories($filmId);
$casts = selectMoviesWithTheirCasts($filmId);
$catId = selectCategoriesId($filmId);


dump($catId);
dump(FilmsOfTheSameCategorie($catId));
