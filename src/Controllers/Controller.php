<?php
function loadView($viewName) {
    // Ensure the view path is within the Views folder
    $baseDir = realpath(__DIR__ . '/../Views'); // Absolute path to the Views folder
    $requestedFile = realpath($baseDir . '/' . $viewName . '.php');

    // Validate the file is within the Views folder
    if ($requestedFile && strpos($requestedFile, $baseDir) === 0 && file_exists($requestedFile)) {
        include $requestedFile;
    } else {
        // If not found or invalid, load 404 view
        header("HTTP/1.0 404 Not Found");
        include $baseDir . '/404.php';
    }
}
?>
