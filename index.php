<?php
require_once('routes.php');

$r = $_GET['r'] ?? '/';

if (isset($routes[$r])) {

  $controllerName = $routes[$r]['controller'];

  $action = $routes[$r]['action'];

  require_once('controllers/' . $controllerName . '.php');

  $controller = new $controllerName();

  $controller->$action();
  
} else {
  echo "404 Not Found";
}
?>
