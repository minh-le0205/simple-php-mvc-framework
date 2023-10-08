<?php

class Index extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index() // Hiển thị danh sách menu
  {
    $this->view->render('index/index');
  }
}
