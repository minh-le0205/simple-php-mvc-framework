<?php

class Bootstrap
{
  public function __construct()
  {
    $controllerUrl = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
    $actionUrl = (isset($_GET['action'])) ? $_GET['action'] : 'index';
    $controllerName = ucfirst($controllerUrl);

    $file = 'controllers/' . $controllerUrl . '.php';

    if (file_exists($file)) {
      require_once $file;
      $controller = new $controllerName();

      if (method_exists($controller, $actionUrl)) {
        $controller->$actionUrl();
        $controller->loadModel($controllerUrl);
      } else {
        $this->error();
      }
    } else {
      $this->error();
    }
  }

  public function error()
  {
    require_once 'controllers/error.php';
    $error = new ErrorController();
    $error->index();
  }
}