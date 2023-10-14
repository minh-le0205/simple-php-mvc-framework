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
    $this->view->js = [
      'group/js/group.js'
    ];
    $this->view->render('group/index');
  }

  public function delete()
  {
    if (isset($_POST['id'])) $this->db->deleteItem($_POST['id']);
  }
}