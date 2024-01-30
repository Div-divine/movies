<?php
$movie = movieDetails();

if($movie){
    $data['details'] = $movie;
}else
{
    header($_SERVER['SERVER_PROTOCOL']. ' 404 Not Found');
    die('404 - Page not found');
}