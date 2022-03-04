<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* Tipos de respostas -> cabeçalho, texto, JSON, XML */

$app->get('/header', function(Request $request, Response $response) {

    $response->getBody()->write('Esse é um retorno header');
    return $response->withHeader('allow', 'PUT')
                    ->withAddedHeader('Content-Length', 10);

});

$app->get('/header', function(Request $request, Response $response) {

    $response->getBody()->write('Esse é um retorno header');

});

$app->run();