<?php
    class View {
        function __construct() {
            
        }

        function render($name) {
            require "view/html/header.php";
            require "view/html/navbar.php";
            require "view/$name.php";
            require "view/html/footer.php";
        }
    }
?>