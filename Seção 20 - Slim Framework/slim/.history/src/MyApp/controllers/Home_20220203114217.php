<?php 

class Home {

    public function index($request, $response) {
        return $response->getBody()->write('Bem legal');
    }

}

?>