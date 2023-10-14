<?php

class Auth extends Controller
{

  public static function checkLoggedIn()
  {
    Session::init();
    if (!(Session::get('loggedIn'))) {
      Session::destroy();
      header("location: index.php?controller=user&action=login");
      exit();
    }
  }
}