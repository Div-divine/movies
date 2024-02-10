<?php

function getNewMovies()
{
	global $db;
	$sql = 'SELECT title, poster, slug FROM movies ORDER BY dates DESC LIMIT 4';
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();
}

function getAllMovies()
{
	global $db;
	$sql = 'SELECT poster, slug FROM movies ORDER BY dates DESC';
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();
}

