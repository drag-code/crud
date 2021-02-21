<?php
class Main extends Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->model = new Model();
    }


    public function index()
    {
        $categories = $this->model->getCategories();
        $products = $this->model->getProducts();
        $this->view->categories = $categories;
        $this->view->products = $products;
        $this->view->render('main/index');
    }

    public function save() {
        echo "perra";
        if (isset($_POST['prodName']) && isset($_POST['units']) && isset($_POST['category'])) {
            echo "perra bien";
            $prodName = $_POST['prodName'];
            $units = $_POST['units'];
            $category = $_POST['category'];
            $this->model->save($prodName, $units, $category);
            $this->back();
        }
    }

    public function getOne()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categories = $this->model->getCategories();
            $product = $this->model->getOne($id);
            $this->view->categories = $categories;
            $this->view->product = $product;
            $this->view->render('main/product');
        }
    }
    public function updateView()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categories = $this->model->getCategories();
            $product = $this->model->getOne($id);
            $this->view->categories = $categories;
            $this->view->product = $product;
            $this->view->render('main/update');
        }
    }

    public function update()
    {
        if (isset($_POST['productName']) && isset($_POST['units']) && isset($_POST['category']) && isset($_POST['id'])) {
            $productName = $_POST['productName'];
            $units = $_POST['units'];
            $category = $_POST['category'];
            $id = $_POST['id'];
            $this->model->update($productName, $units, $category, $id);
            $this->back();
        }
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->model->delete($id);
    }
}
    /*$action = $_GET['action'];
    if (isset($action)) {
        $controller = new Controller();
        $controller->$action();
    }*/
