<?php

    class Controller {
        //public $model;
        function __construct() {
            $this->view = new View();
        }

        function loadModel($model) {
            $url = "model/{$model}Model.php";
            if (file_exists($url)) {
                require $url;
                $modelName = "{$model}Model";
                $this->model = new $modelName();
            }
        }

        function back($route="") {
            $url = constant('URL');
            if($route)
                $url .= $route; 
            header("Location: $url");
        }
    }
?>