<?php

require "../bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;




$routes = [
    '/curso_pdo-main/public/' => 'controllers/index',
    '/curso_pdo-main/public//' => 'controllers/user_create',
    '/curso_pdo-main/public///' => 'controllers/user_store',
    '/curso_pdo-main/public////' => 'controllers/user_edit',
    '/curso_pdo-main/public/////' => 'controllers/user_update'

];


$uri = Uri::load();
$layout = new Layout;


require Routes::load($routes, $uri);

require $layout->master('layout');