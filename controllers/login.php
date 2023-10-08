<?php

class Login extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index() // Hiển thị danh sách menu
  {
    $this->view->msg = 'This is a login page';
    $this->view->render('login/index');;
  }
}