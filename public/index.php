<?php
require_once   '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../views/');
$twig = new \Twig\Environment($loader);
$template = $twig->display("layout.twig");
