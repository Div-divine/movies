<?php
/**
 * Get the header
 * @param  string $title  The title of the page
 * @param  string $layout The layout to use
 * @return void
 */
function get_header(string $title, string $layout ='public'): void
{   
	global $router;
	require_once '../src/views/layouts/' . $layout . '/header.php';
}

/**
 * Get the footer
 * @param  string $layout The layout to use
 * @return void
 */
function get_footer (string $layout ='public'): void
{
	require_once '../src/views/layouts/' . $layout . '/footer.php';
}

/**
 * Create notification alert
 * @param string $message The message to save in alert
 * @param string $type    The type of alert
 * @return void
 */
function alert (string $message, string $type = 'danger'): void
{
	$_SESSION['alert'] = [
		'message' => $message,
		'type' => $type
	];
}

/**
 * Display alert session
 * @return void
 */
function displayAlert (): void
{
	if (!empty($_SESSION['alert'])) {
		echo '<div class="alert alert-' . $_SESSION['alert']['type'] . '" role="alert">' . $_SESSION['alert']['message'] . '</div>';

		unset($_SESSION['alert']);
	}
}

/**
 * Check if user is logged in
 * @param array $match The match array from Altorouter
 */

function checkAdmin(array $match, AltoRouter $router)
{
	$existAdmin = strpos($match['target'], 'admin_');
	if($existAdmin !== false && empty($_SESSION['user']['id'])){
		header('Location: '.$router->generate('Login'));
		die;
	}
}

function logoutTimer()
{    global $router;
	if(!empty($_SESSION['user']['lastLogin']))
	{
		$expireTime = 1;

		$now = new Datetime();
		$now->setTimezone(new DAteTimeZone('Europe/Paris'));

		$lastLogin = new DateTime($_SESSION['user']['lastLogin']);
		if($now->diff($lastLogin)->h >= $expireTime){
			unset($_SESSION['user']);
			alert('Vous avez été déconnecté pour innactivité', 'danger');
            header('Location: '. $router->generate('Login'));
			die;
		}

	}
}

/**	
 * Upload file
 * 
 * @param string $path to save file
 * @param string $field name of input type file
 */
function uploadFile(string $path, string $field, array $exts = ['jpg', 'png', 'jpeg'], int $maxSize = 2097152): string
{
	// Check submit form with post method
	if (empty($_FILES)) :
		return '';
	endif;
	
	// Check exist directory if not create
	if (!is_dir($path) && !mkdir($path, 0755)) :
		return 'Impossible d\'importer votre fichier.';
	endif;

	// Check not empty input file
	if (empty($_FILES[$field]['name'])) :
		return 'Merci d\'uploader un fichier';
	endif;
	
	// Check exts
	$currentExt = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
	$currentExt = strtolower($currentExt);
	if (!in_array($currentExt, $exts)) :
		$exts = implode(', ', $exts);
		return 'Merci de charger un fichier avec l\'une de ces extensions : ' . $exts . '.';
	endif;

	// Check no error into current file
	if ($_FILES[$field]['error'] !== UPLOAD_ERR_OK) :
		return 'Merci de sélectionner un autre fichier.';
	endif;

	// Check max size current file
	if ($_FILES[$field]['size'] > $maxSize) :
		return 'Merci de charger un fichier ne dépassant pas cette taille : ' . formatBytes($maxSize);
	endif;

	$filename = pathinfo($_FILES[$field]['name'], PATHINFO_FILENAME);
	$filename = renameFile($filename);
	$targetToSave = $path . '/' . $filename . '.' . $currentExt;
	
	if(move_uploaded_file($_FILES[$field]['tmp_name'], $targetToSave)) :
		return 'Super !';
	endif;

	return '';
}
echo uploadFile('images', 'photo');


function formatBytes($size, $precision = 2) {
	$base     = log($size, 1024);
	$suffixes = ['', 'Ko', 'Mo', 'Go', 'To'];

	return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}


function renameFile(string $name) {
	$name = trim($name);
	$name = strip_tags($name);
	$name = removeAccent($name);
    $name = preg_replace('/[\s-]+/', ' ', $name);  // Clean up multiple dashes and whitespaces
	$name = preg_replace('/[\s_]/', '-', $name); // Convert whitespaces and underscore to dash
	$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
	$name = strtolower($name);
	$name = trim($name, '-');

	return $name;
}


function removeAccent($string) {
	$string = str_replace(
		['à','á','â','ã','ä', 'ç', 'è','é','ê','ë', 'ì','í','î','ï', 'ñ', 'ò','ó','ô','õ','ö', 'ù','ú','û','ü', 'ý','ÿ', 'À','Á','Â','Ã','Ä', 'Ç', 'È','É','Ê','Ë', 'Ì','Í','Î','Ï', 'Ñ', 'Ò','Ó','Ô','Õ','Ö', 'Ù','Ú','Û','Ü', 'Ý'], 
		['a','a','a','a','a', 'c', 'e','e','e','e', 'i','i','i','i', 'n', 'o','o','o','o','o', 'u','u','u','u', 'y','y', 'A','A','A','A','A', 'C', 'E','E','E','E', 'I','I','I','I', 'N', 'O','O','O','O','O', 'U','U','U','U', 'Y'], 
		$string
	);
	return $string;
}
