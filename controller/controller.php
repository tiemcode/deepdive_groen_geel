<?php

class controller 
{

    public function index()
    {
        displayTemplate("app.twig", []);
    }
    public function loginGet(): void
    {
        displayTemplate("layouts/login.twig", []);
    }

}
