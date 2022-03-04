<?php 

namespace MyApp\controllers;

class Home {

    protected $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function index($request, $response) {
        return $response->getBody()->write('Bem legal');
    }

}

?>