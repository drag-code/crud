<?php
    class Model {
        function __construct() {
            $this->instance = Database::getInstance();
            $this->connection = $this->instance->getConnection();
        }
    }
?> 