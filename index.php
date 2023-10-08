<?php

function autoLoad($className) //Custom autoload name function 
{
  $path = 'libs/';
  require_once $path . "{$className}.php";
}

spl_autoload_register('autoLoad'); // call that autoload function

$bootstrap = new Bootstrap();