<?php
    

    class categoryModel extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function save($category) {
            try {
                $query = $this->connection->prepare("INSERT INTO Category(categoryName) VALUES(:category)");
                $query->bindParam(':category', $category);
                $query->execute();
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }


        public function update($category) {
            try {
                $query = $this->connection->prepare("INSERT INTO Category(categoryName) VALUES(:category)");
                $query->bindParam(':category', $category);
                $query->execute();
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function delete($category) {
            try {
                $query = $this->connection->prepare("INSERT INTO Category(categoryName) VALUES(:category)");
                $query->bindParam(':category', $category);
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