<?php

class View
{

  public function render($name)
  {
    include_once 'views/header.php';
    require_once 'views/' . $name . '.php';
    include_once 'views/footer.php';
  }
}
