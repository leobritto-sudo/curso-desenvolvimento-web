<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/postagens', function(Request $request, Response $response) {

    echo 'Lista de postagens';

});

$app->run();