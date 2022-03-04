<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();
$container['db'] = function() {

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'slim',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;

};

$app->get('/usuarios', function(Request $request, Response $response) {

    $db = $this->get('db');

    /* $db->schema()->dropIfExists('usuarios');
    $db->schema()->create('usuarios', function($table) {

        $table->increments('id');
        $table->string('nome');
        $table->string('email');
        $table->timestamps();

    }); */

    /* INSERIR */
    /* $db->table('usuarios')->insert([
        'nome' => 'Sophia Alves',
        'email' => 'so-alves@hotmail.com'
    ]); */

    /* ATUALIZAR */
    /* $db->table('usuarios')
       ->where('id', 2)
       ->update([
            'nome' => 'Sophia'
       ]);  */

    /* DELETAR */
    /* $db->table('usuarios')
       ->where('id', 2)
       ->delete(); */

    /* LISTAR */
    $usuarios = $db->table('usuarios')->get();

    foreach($usuarios as $key => $usuario) {
        echo $usuario->nome . '<br>';
    }

});

$app->run();