<?php

require_once 'vendor\autoload.php';

use \PlugRoute\PlugRoute;
use \PlugRoute\RouteContainer;
use \PlugRoute\Http\RequestCreator;
use \PlugRoute\Http\Request;

$route = new PlugRoute(new RouteContainer(), RequestCreator::create());

$route->notFound(function (){
    echo 'Rota não encontrada';
});

$route->get('/teste/{a}/{b}', 'App\Controllers\index@teste');

$route->on();