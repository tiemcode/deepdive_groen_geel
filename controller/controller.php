<?php

class controller
{
    public function index()
    {
        displayTemplate("app.twig" , []);
    }

    public function login()
    {
        displayTemplate("layouts/login.twig" , []);
    }
}
