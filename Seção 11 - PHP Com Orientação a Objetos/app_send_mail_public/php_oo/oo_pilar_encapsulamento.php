<?php

    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8){
                $this->executarMania();
            }
            else{
                $this->responder();
            }
        }
    }

    class Filho extends Pai{
        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        private function executarMania(){
            echo 'Cantar';
        }

        protected function responder(){
            echo 'Bom dia';
        }

        public function x(){
            $this->executarMania();
        }
    }

    /* $pai = new Pai();
    echo $pai->executarAcao(); */

    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao();
    echo '<br>';
    $filho->x();

?>