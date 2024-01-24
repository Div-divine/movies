<?php
$admin = '/' . $_ENV['ADMIN_FOLDER'];

$router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map( 'GET|POST', $admin . '/connexion', 'users/login', 'Login'); // 3
$router->map( 'GET', $admin . '/deconnexion', 'users/admin_logout', 'Logout'); // 4
$router->map( 'GET', $admin . '/mot-de-passe-oublie', '', 'lostPassword'); // 7
$router->map( 'GET', $admin . '/utilisateurs', 'users/admin_users', 'Users'); // 1
$router->map( 'GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser'); // 1
$router->map( 'GET|POST', $admin . '/utilisateurs/editer/[uuid:id]', 'users/admin_edit', 'editUser'); // 2 / 5
$router->map( 'GET', $admin . '/utilisateurs/supprimer/[uuid:id]', 'users/admin_userDelete', 'deleteUser'); // 6

// Movies
$router->map( 'GET|POST', $admin . '/films', 'users/admin_film', 'listFilms');
$router->map( 'GET|POST', $admin . '/films/create', 'users/admin_filmcreate', 'createFilms');
$router->map( 'GET|POST', $admin . '/films/editer/[i:id]', 'users/admin_filmedit', 'editFilms');

// Categories
$router->map( 'GET', $admin . '/categories', '', '');
$router->map( 'GET', $admin . '/categories/editer/[i:id]', '', '');
$router->map( 'GET', $admin . '/categories/supprimer/[i:id]', '', '');