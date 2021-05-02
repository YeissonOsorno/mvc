<?php
require './controllers/BasicController.php';
class Router
{

    // Obtener la url
    public function getRoute($url)
    {
        $arrUrl = preg_replace('/:([^\/]+)/', '(?<\1>[^/]+)',$url);
        $arrUrl = explode('/',$arrUrl);
        $this->assingView($arrUrl);
    }


    public function assingView($input)
    {
        switch ($input[0]){
            case 'login':
                BasicController::login();
                break;
            default:
                BasicController::home();
                break;
        }
    }
}