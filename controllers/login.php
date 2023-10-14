<?php

class Login extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index() // Hiển thị danh sách menu
  {
    if (isset($_POST['submit'])) {
      $source = ['username' => $_POST['username']];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $validate = new Validate($source);
      $query = "SELECT `id` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
      $validate->addRule('username', 'existRecord', ['database' => $this->db, 'query' => $query]);
      $validate->run();
      if ($validate->isValid()) {
        Session::init();
        Session::set('loggedIn', true);
        header('location: index.php?controller=group&action=index');
        exit();
      } else {
        $this->view->errors =  $validate->showErrors();
      }
    }
    $this->view->render('login/index');
  }
}