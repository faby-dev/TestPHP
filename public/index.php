<?php

use App\Route\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);
