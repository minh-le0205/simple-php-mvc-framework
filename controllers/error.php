<?php


class ErrorController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->view->title = 'Error';
  }

  public function index()
  {
    $this->view->msg = 'This is an error';
    $this->view->render('error/index');
  }
}