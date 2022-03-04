<?php 

namespace MyApp\controllers;

class Home {

    protected $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function index($request, $response) {
        //$view = $this->container->get('View');
        print_r($this->view);
        return $response->getBody()->write('Bem legal');
    }

}

?>