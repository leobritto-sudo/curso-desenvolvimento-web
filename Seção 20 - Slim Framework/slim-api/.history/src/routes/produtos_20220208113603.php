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
    $this->post('/produtos/adiciona', function($request, $response) {
        $dados = $request->getParsedBody();
        $produtos = Produto::create($dados);
        return $response->withJson($produtos);

    });

    //Recupera um produto de um determinado ID
    $this->get('/produtos/lista/{id}', function($request, $response, $args) {
        $produto = Produto::findOrFail($args['id']);
        return $response->withJson($produto);

    });

});