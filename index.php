<?php

$routes = require __DIR__ . '/routes.php';

$page = $_GET['page'] ?? 'home';

if (isset($routes[$page])) {
  $controllerName = $routes[$page]['controller'];
  $method = $routes[$page]['method'];

  require __DIR__ . '/controllers/' . $controllerName . '.php';
   $controller = new $controllerName();
  $controller->$method();
} else {
  echo "404: Page Not Found";
}
