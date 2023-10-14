<?php


class Group extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->render('group/index');
    Session::init();
    Session::get('loggedIn');
    Session::destroy();
  }
}