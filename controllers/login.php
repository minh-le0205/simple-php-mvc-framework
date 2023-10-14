<?php

class Login extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index() // Hiển thị danh sách menu
  {
    $this->view->render('login/index');

    if (isset($_POST['submit'])) {
      $source = ['username' => $_POST['username']];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $validate = new Validate($source);
      $query = "SELECT `id` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
      $validate->addRule('username', 'existRecord', ['database' => $this->db, 'query' => $query]);
      $validate->run();
      $error = $validate->getError();
      echo "<pre>";
      print_r($error);
      echo "</pre>";
    }
  }
}