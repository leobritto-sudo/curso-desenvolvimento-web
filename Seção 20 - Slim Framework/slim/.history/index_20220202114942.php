<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* Padrão PSR7 */
$app->get('/postagens', function(Request $request, Response $response) {

    $response->getBody()->write('Listagem de Postagens');

    return $response;

});

/* Tipos de requisição ou Verbos HTTP */

$app->post('/usuarios/adiciona', function(Request $request, Response $response) {

    $post = $request->getParsedBody();
    $nome = $post['nome'];
    $email = $post['email'];

    return $response->getBody()->write($nome . ' - ' . $email);

});

$app->post('/usuarios/atualiza', function(Request $request, Response $response) {

    $post = $request->getParsedBody();
    $nome = $post['nome'];
    $email = $post['email'];

    return $response->getBody()->write($nome . ' - ' . $email);

});

$app->put('/usuarios/atualiza', function(Request $request, Response $response) {

    $post = $request->getParsedBody();
    $id = $post['id'];
    $nome = $post['nome'];
    $email = $post['email'];

    return $response->getBody()->write('Sucesso ao atulizar o ID: ' . $id);

});

$app->run();