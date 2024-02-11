<?php
$router->addMatchTypes(['slug' => '[a-z0-9]+(?:-[a-z0-9]+)*']);
// Movies
$router->map('GET', '/', 'home', 'home');
$router->map('GET|POST', '/recherche', 'users/searchFilm','search');
$router->map('GET', '/film/[slug:slug]', 'users/detailsMovie','details');

// Pages
$router->map('GET', '/politique-confidentialite', 'privacy');
$router->map('GET', '/mentions-legales', 'legalNotice');