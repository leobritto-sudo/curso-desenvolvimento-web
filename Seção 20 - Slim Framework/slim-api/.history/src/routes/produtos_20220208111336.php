<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

//Rotas para produtos

$app->group('/api/v1', function() {

    //Lista produtos
    $this->get('/produtos/lista', function($request, $response) {
        $produtos = Produto::get();
        return $response->withJson($produtos);

    });

    //Adiciona produtos
    $this->get('/produtos/adiciona', function($request, $response) {
        $produtos = Produto::get();
        return $response->withJson($produtos);

    });

});