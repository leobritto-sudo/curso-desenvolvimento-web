<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* Container dependency injection */

class Servico {

}

/* Container Pimple */
$container = $app->getContainer();
$container['servico'] = function() {
    return new Servico;
};

$app->get('/servico', function(Request $request, Response $response) {

    $servico = $this->get('servico');
    print_r($servico);

});

/* Controllers como serviço */

$container = $app->getContainer();
$container['Home'] = function() {
    return new MyApp\controllers\Home(new MyApp\View);
};

$app->get('/usuarios', 'Home:index');

$app->run();