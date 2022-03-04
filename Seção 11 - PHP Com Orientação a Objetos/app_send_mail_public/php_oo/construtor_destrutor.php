<?php

    class Pessoa{
        public $nome = null;

        function __construct($nome){
            echo 'Objeto Iniciado';
            $this->nome = $nome;
        }

        function __destruct(){
            echo 'Objeto destruído';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Leonardo');
    echo '<br>Nome: ' . $pessoa->__get('nome');
    echo '<br>' . $pessoa->correr();
    echo '<br>';
    //unset($pessoa);

?>