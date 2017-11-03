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

                //Получаем для программы путь из того что ввел пользователь
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //Определяем какой контроллер будет обрабатывать
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                //echo '<br>Класс(контроллер): '.$controllerName;
               // echo '<br>Метод(экшн): '.$actionName;
                $parameters = $segments;
                //echo '<pre>';
               // print_r($parameters);


                //Подключаем файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создаем объект и вызываем метод (action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != NULL) {
                    break;
                }
            }
        }
    }
}