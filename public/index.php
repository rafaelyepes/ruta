<?php

require '../vendor/autoload.php';
require '../core/bootstrap.php';

use Nomproyecto\Request;
use Nomproyecto\Router;

Router::load('../app/routes.php')->direct(Request::uri(), Request::method());

