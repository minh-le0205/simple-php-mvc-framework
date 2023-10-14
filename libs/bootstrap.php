<?php

class Bootstrap
{

  private $_url;
  private $_controller;
  public function init()
  {
    error_reporting(E_ALL & ~E_NOTICE);

    $this->setUrl();
    if (!isset($this->_url['controller'])) {
      $this->loadDefaultController();
      exit();
    }

    $this->loadExistingController();
    $this->callControllerMethod();
  }

  private function setUrl()
  {
    $this->_url = isset($_GET) ? $_GET : null;
  }

  private function loadDefaultController()
  {
    require_once(CONTROLLER_PATH . '/index.php');
    $this->_controller = new Index();
    $this->_controller->index();
  }

  private function loadExistingController()
  {
    $file = CONTROLLER_PATH . $this->_url['controller'] . '.php';

    if (file_exists($file)) {
      require_once $file;
      $this->_controller = new $this->_url['controller'];
      $this->_controller->loadModel($this->_url['controller']);
    } else {
      $this->error();
    }
  }

  private function callControllerMethod()
  {
    if (method_exists($this->_controller, $this->_url['action']) == true) {
      $this->_controller->{$this->_url['action']}();
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