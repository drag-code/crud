<?php
    require "controller/error.php";
    class App {
        
        public function __construct() {
            $url = isset($_GET['url']) ? $_GET['url']: null;
            $url = explode('/', rtrim($url, '/'));
            if (empty($url[0])) {
                $controllerFile = 'controller/main.php';
                require_once $controllerFile;
                $controller = new Main();
                $controller->loadModel('main');
                $controller->index();
                return false;
            }
            $controllerFile = "controller/{$url[0]}.php";
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                if (isset($url[1])) {
                    $controller->{$url[1]}(); 
                }
            } else{
                $controller = new Err();
            }
        }
    }
?>