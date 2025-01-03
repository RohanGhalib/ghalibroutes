<?php
require 'src/Controllers/Controller.php';
require 'src/Models/composer.php';
require 'src/Models/npm.php';
import('bootstrap/dist/css/bootstrap.min.css');
import('jquery/dist/jquery.min.js');

// Get the current URL
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$path = trim($path, '/');

$path = $path ?: 'home';

loadView($path);

?>
