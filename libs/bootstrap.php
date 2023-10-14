<?php

class Bootstrap
{
  public function __construct()
  {
    error_reporting(E_ALL & ~E_NOTICE);
    $controllerUrl = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
    $actionUrl = (isset($_GET['action'])) ? $_GET['action'] : 'index';
    $controllerName = ucfirst($controllerUrl);

    $file = CONTROLLER_PATH . $controllerUrl . '.php';

    if (file_exists($file)) {
      require_once $file;
      $controller = new $controllerName();

      if (method_exists($controller, $actionUrl)) {
        $controller->loadModel($controllerUrl);
        $controller->$actionUrl();
      } else {
        $this->error();
      }
    } else {
      $this->error();
    }
  }

  public function error()
  {
    require_once CONTROLLER_PATH . '/error.php';
    $error = new ErrorController();
    $error->index();
  }
}