<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* Container dependency injection */

class Servico {

}

$servico = new Servico();

$app->get('/servico', function(Request $request, Response $response) {

    print_r($servico);

});

$app->run();