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

    /*
     * Return request string
    */
    private function getURI () {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        //print_r($this->routes);
        //echo "Class Router, method run";

        //получаем строку запроса
        $uri = $this->getURI();
        //echo $uri;

        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $segments = explode('/', $path);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                //echo '<br>Класс: '.$controllerName;
                //echo '<br>Метод: '.$actionName;

                //Подключаем файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создаем объект и вызываем метод (action)
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != NULL) {
                    break;
                }
            }
        }
    }
}