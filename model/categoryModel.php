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


        public function update($id, $category) {
            try {
                $query = $this->connection->prepare("UPDATE Category SET categoryName = :category WHERE id = :id");
                $query->bindParam(':category', $category);
                $query->bindParam(':id', $id);
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

        public function getCategory($id) {
            try {
                $query = $this->connection->prepare("SELECT * FROM Category WHERE id = :id");
                $query->bindParam(':id', $id);
                $query->execute();
                $category = $query->fetchAll(PDO::FETCH_OBJ);
                return $category;
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }
    }

?>