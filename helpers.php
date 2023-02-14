<?php

function displayTemplate($template, $array)
{
    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment(
        $loader,
        ['debug' => true]
    );
    $twig->addExtension(new \Twig\Extension\DebugExtension());
    $twig->display($template, $array);
}