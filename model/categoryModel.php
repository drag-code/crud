<?php
    

    class categoryModel extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function save($username, $password) {
            try {
                $query = $this->connection->prepare("INSERT INTO user(username, password) VALUES(:username, :password)");
                $query->bindParam(':username', $username);
                $query->bindParam(':password', $password);
                $query->execute();
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function list() {
            try {
                $query = $this->connection->prepare("SELECT * FROM user");
                $query->execute();
                $users = $query->fetchAll(PDO::FETCH_OBJ);
                return $users;

            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function update() {
            try {
                $query = $this->connection->prepare("INSERT INTO user(username, password) VALUES(?, ?)");
                foreach ($args as $arg) {
                    $param_n = 1;
                    $query->bindParam($param_n, $arg);
                }
                $query->execute();

            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function delete($userId) {
            try {
                $query = $this->connection->prepare("DELETE FROM user WHERE id = :userId");
                $query->bindParam(":userId", $userId);
                $query->execute();
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function getCategories() {
            try {
                $query = $this->connection->prepare("SELECT id, categoryName FROM Category");
                $query->execute();
                $categories = $query->fetchAll(PDO::FETCH_OBJ);
                return $categories;
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }
    }

?>