<?php

use Slim\Http\Request;
use Slim\Http\Response;

//Rotas para produtos

$app->group('api/v1', function($request, $response) {

    $this->get('/produtos', function($request, $response) {

        return $response->withJson(['nome' => 'Moto G']);

    });

});