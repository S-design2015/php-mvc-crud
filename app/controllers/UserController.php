<?php
require_once __DIR__ . '/../models/User.php';
class UserController {
    private $model;

    public function __construct($db) {
        $this->model = new User($db);
    }

    public function index() {
        $users = $this->model->getAll();
        include '../app/views/list.php';
    }

    public function create() {
        if ($_POST) {
            $this->model->create($_POST['name'], $_POST['email']);
            header("Location: index.php");
        }
        include '../app/views/create.php';
    }

    public function edit() {
        // if (!isset($_GET['id'])) {
        // die("ID not found");
        // }
        $user = $this->model->getById($_GET['id']);

        // if (!$user) {
        // die("User not found");
        // }

        if ($_POST) {
            $this->model->update($_GET['id'], $_POST['name'], $_POST['email']);
            header("Location: index.php");
        }
        include '../app/views/edit.php';
    }

    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: index.php");
    }
}
?>
