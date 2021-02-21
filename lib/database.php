<?php
    class Database {
        
        private $connection;
        private static $instance = null;
        private $host;
        private $dbname;
        private $user;
        private $password;

        public function __construct() {
            $this->host = constant('HOST');
            $this->dbname = constant('DBNAME');
            $this->user = constant('USER');
            $this->password = constant('PASSWORD');

            try {
                $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            } catch (PDOException $err) {
                //throw $th;
                echo($err->getMessage());
            } 
        }

        public static function getInstance() {
            if(self::$instance === null)
                self::$instance = new Database();
            return self::$instance;
        }

        public function getConnection() {
            return $this->connection;
        }
    }

?>