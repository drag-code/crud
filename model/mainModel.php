<?php
    

    class mainModel extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function save($prodName, $units, $category) {
            try {
                $query = $this->connection->prepare("INSERT INTO Product(productName, units, categoryId) VALUES(:prodName, :units, :category)");
                $query->bindParam(':prodName', $prodName);
                $query->bindParam(':units', $units);
                $query->bindParam(':category', $category);
                $query->execute();
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function getOne($id) {
            try {
                $query = $this->connection->prepare("SELECT Product.id, productName, categoryName, units, Category.id as categoryId FROM Product INNER JOIN Category ON Product.id = Category.id WHERE Product.id = :id");
                $query->bindParam(':id', $id);
                $query->execute();
                $users = $query->fetchAll(PDO::FETCH_OBJ);
                return $users;

            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }

        public function update($productName, $units, $category, $id) {
            try {
                $query = $this->connection->prepare("
                UPDATE Product SET productName = :productName, units = :units, categoryId = :category WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->bindParam(":productName", $productName);
                $query->bindParam(":units", $units);
                $query->bindParam(":category", $category);
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


        public function getProducts() {
            try {
                $query = $this->connection->prepare("SELECT Product.id, productName, categoryName FROM Product INNER JOIN Category ON Product.categoryId = Category.id");
                $query->execute();
                $products = $query->fetchAll(PDO::FETCH_OBJ);
                return $products;
            } catch (PDOException $err) {
                echo($err->getMessage());
            }
        }
    }

?>