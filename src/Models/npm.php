<?php
function import($package) {
  $path = './node_modules/' . $package;
  if (file_exists($path)) {
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    switch ($extension) {
      case 'css':
        echo '<head><link rel="stylesheet" type="text/css" href="' . $path . '"></head>';
        break;
      case 'js':
        echo '<script src="' . $path . '"></script>';
        break;
      default:
        throw new Exception(message: "Unsupported file type: " . $extension);
    }
  } else {
    throw new Exception("Package not found: " . $package);
  }
}
