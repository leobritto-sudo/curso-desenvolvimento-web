<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/postagens2', function() {

    echo 'Lista de postagens';

});

$app->get('/usuarios[/{id}]', function($request, $response) {
    $id = $request->getAttribute('id');
    echo 'Lista de usuários ou ID: ' . $id;

});

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response) {
    $ano = $request->getAttribute('ano');
    $mes = $request->getAttribute('mes');

    echo 'Lista de postagens - Ano: ' . $ano . ' - Mês: ' . $mes;

});

$app->get('/lista/{itens:.*}', function($request, $response) {
    $itens = $request->getAttribute('itens');

    echo '<pre>';
    print_r(explode('/', $itens));
    echo '</pre>';

});

/* NOMEAR ROTAS */
$app->get('/blog/postagens/{id}', function($request, $response) {
    echo 'Lista de postagens ou ID: ';
})->setName('blog');

$app->get('/meusite', function($request, $response) {
    $retorno = $this->get('router')->pathFor('blog', ['id' => 5]);

    echo $retorno;
});

$app->run();