<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* Container dependency injection */
$app->get('/servico', function(Request $request, Response $response) {

});

$app->run();