<?php

class User extends Controller
{
  public function __construct()
  {
    parent::__construct();
    Session::init();
  }

  public function login()
  {
    if ((Session::get('loggedIn'))) {
      Session::destroy();
      $this->redirect('group', 'index');
    }

    if (isset($_POST['submit'])) {
      $source = ['username' => $_POST['username']];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $validate = new Validate($source);
      $query = "SELECT `id` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
      $validate->addRule('username', 'existRecord', ['database' => $this->db, 'query' => $query]);
      $validate->run();
      if ($validate->isValid()) {
        Session::set('loggedIn', true);
        $this->redirect('group', 'index');
      } else {
        $this->view->errors =  $validate->showErrors();
      }
    }
    $this->view->render('user/login');
  }

  public function logout()
  {
    $this->view->render('user/logout');
    Session::destroy();
  }
}