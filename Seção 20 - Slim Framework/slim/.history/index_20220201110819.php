<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/postagens', function() {

    echo 'Lista de postagens';

});

$app->run();