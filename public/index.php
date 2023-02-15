<?php
require_once   '../vendor/autoload.php';

$path = getPath();

if ($path[0] != "") {
    $method = $path[0];
} elseif ($path[0] == '') {
    $method = "index";
} else {
    $method = null;
}

$method .= ucfirst(strtolower($_SERVER['REQUEST_METHOD']));
$new = new controller();


if (!method_exists($new, $method)) {
    error(404, "No known method");
}

$new->$method();
