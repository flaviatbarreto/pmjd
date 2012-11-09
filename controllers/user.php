<?php

class User extends Controller {

    function __construct() {
        parent::__construct();

        Session::init();
        $loggedIn = Session::get('loggedIn');
        $role = Session::get('role');

        if ($loggedIn == false || $role != 'woner') {
            Session::destroy();
            header('Location: login');
            exit();
        }
    }

    public function index() {
        $this->view->userList = $this->model->userList();
        $this->view->render("user/index");
    }

    public function create() {
        $data = array(
            'user' => $_POST['username'],
            'pass' => $_POST['pass'],
            'role' => $_POST['role']
        );
        $this->model->create($data);
        header('Location: '.URL.'user');
    }

    public function edit($id) {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }

    public function editSave($id) {
        $data = array(
            'id' => $id,
            'user' => $_POST['username'],
            'pass' => $_POST['pass'],
            'role' => $_POST['role']
        );
        $this->model->edit($data);
        header('Location: '.URL.'user');
    }
    
    public function delete($id) {
        $this->model->delete($id);
        header('Location: '.URL.'user');
    }

}

?>