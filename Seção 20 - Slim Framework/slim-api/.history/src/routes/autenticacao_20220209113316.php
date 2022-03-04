<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;
use App\Models\Usuario;

//Rotas para a geração de Token
$app->post('/api/token', function() {

    $dados = $request->getParsedBody();

    $email = $dados['email'] ?? null;
    $senha = $dados['senha'] ?? null;

    $usuario = Usuario::where('email', $email)->first();

    if(!is_null($usuario) && md5($senha) === $usuario->senha) {
        
        //gerar token
        $secret_key = '1fae4b2d1fa13722232a77df7a3fc6e19acb4aaf';
    }

});