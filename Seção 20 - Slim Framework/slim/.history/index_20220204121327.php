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

$app->get('/json', function(Request $request, Response $response) {

    return $response->withJson([
        'nome' => 'Leonardo Alves',
        'endereco' => 'Rua Benjamim de Laborde'
    ]);

});

$app->get('/xml', function(Request $request, Response $response) {

    $xml = file_get_contents('arquivo');
    $response->write($xml);
    return $response->withHeader('Content-Type', 'application/xml');

});

/* Middleware */

$app->add(function($request, $response, $next) {
    $response->write('Início camada 1 + ');

    $response = $next($request, $response);

    $response->write(' + Fim camada 1');

});

/* $app->add(function($request, $response, $next) {
    $response->write('Início camada 2 + ');
    return $next($request, $response);
}); */

$app->get('/usuarios', function(Request $request, Response $response) {

    $response->write('Ação principal usuários');

});

$app->get('/postagens', function(Request $request, Response $response) {

    $response->write('Ação principal postagens');

});

$app->run();