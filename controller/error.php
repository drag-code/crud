<?php

    require "lib/controller.php";
    class Err extends Controller{
        public function __construct() {
            parent::__construct();
            $this->view->render('error/index');
            // $this->model = new Model();
        }
    }
?>