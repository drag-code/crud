<?php
class Category extends Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->model = new Model();
        $this->url = 'category/index';
    }


    public function index()
    {
        $categories = $this->model->getCategories();
        $this->view->categories = $categories;
        $this->view->render('categories/index');
    }

    public function save()
    {
        if (isset($_POST['category'])) {
            $category = $_POST['category'];
            $this->model->save($category);
            $this->back($this->url);
        }
    }
}
    /*$action = $_GET['action'];
    if (isset($action)) {
        $controller = new Controller();
        $controller->$action();
    }*/
