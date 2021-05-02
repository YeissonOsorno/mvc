<?php
require './config/Router.php';
class App
{
    private $url;
    private Router $router; // Declarar
    public function __construct()
    {

        $this->url = empty($_GET["url"]) ? "" : $_GET["url"];
        $this->router = new Router(); // instanciar
        $this->router->getRoute($this->url);
    }



}