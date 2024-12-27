<?php
require 'src/Controllers/Controller.php';

// Get the current URL
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$path = trim($path, '/');

// Set a default route if the path is empty
$path = $path ?: 'home';

loadView($path);

?>
