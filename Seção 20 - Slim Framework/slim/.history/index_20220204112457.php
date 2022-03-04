<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

/* Tipos de respostas -> cabeçalho, texto, JSON, XML */

$app->get('/servico', function(Request $request, Response $response) {

    $servico = $this->get('servico');
    print_r($servico);

});

$app->run();