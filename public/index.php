<?php

require '../vendor/autoload.php';
require '../core/bootstrap.php';

use ruta\app\Request;
use ruta\app\Router;

Router::load('../app/routes.php')->direct(Request::uri(), Request::method());

