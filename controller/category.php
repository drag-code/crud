<?php
class Category extends Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->model = new Model();
    }


    public function index()
    {
        $categories = $this->model->getCategories();
        $this->view->categories = $categories;
        $this->view->render('categories/index');
    }

    public function save()
    {
        if (isset($_POST['prodName']) && isset($_POST['units']) && isset($_POST['category'])) {
            $prodName = $_POST['prodName'];
            $units = $_POST['units'];
            $category = $_POST['category'];
            $this->model->save($prodName, $units, $category);
            $this->back();
        }
    }
}
    /*$action = $_GET['action'];
    if (isset($action)) {
        $controller = new Controller();
        $controller->$action();
    }*/
