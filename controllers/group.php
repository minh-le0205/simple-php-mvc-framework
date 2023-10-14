<?php


class Group extends Controller
{
  public function __construct()
  {
    parent::__construct();
    Auth::checkLoggedIn();
  }

  public function index()
  {
    $this->view->items = $this->db->listItems();
    $this->view->render('group/index');
  }
}