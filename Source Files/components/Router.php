<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 23.10.2017
 * Time: 21:45
 */

class Router {
    private $routes;

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run() {
        print_r($this->routes);
        echo "Class Router, method run";
    }
}