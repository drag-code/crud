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

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['category'])) {
            $id = $_POST['id'];
            $category = $_POST['category'];
            $this->model->update($id, $category);
            $this->back($this->url);
        }
    }

    public function updateView()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $category = $this->model->getCategory($id);
            $this->view->category = $category; 
            $this->view->render('categories/update');
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
        }
    }
}
    /*$action = $_GET['action'];
    if (isset($action)) {
        $controller = new Controller();
        $controller->$action();
    }*/
