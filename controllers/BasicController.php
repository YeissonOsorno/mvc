<?php

class BasicController
{
    public static function home()
    {
        require './views/home.php';
    }

    public static function login()
    {
        require './views/login.php';
    }
}