<?php
require_once   '../vendor/autoload.php';

$path = getPath();
// $controller = $path[0] ?: "Recipe";

if ($path[0] != "") {

    $method = $path[0];

} elseif ($path[0] == '') {
    $method = "index";
} else {
    $method = null;
}
// $method = $path[1] ?? "index";
var_dump($path);
$recipe = new controller();
// $method .= ucfirst(strtolower($_SERVER['REQUEST_METHOD']));

if (!method_exists($recipe, $method)) {
    error(404, "No known method");
}

$recipe->$method();
