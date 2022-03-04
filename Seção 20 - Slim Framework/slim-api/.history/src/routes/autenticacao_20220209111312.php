<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

//Rotas para a geração de Token
$app->post('/api/token', function() {

    $dados = $request->getParsedBody();

});