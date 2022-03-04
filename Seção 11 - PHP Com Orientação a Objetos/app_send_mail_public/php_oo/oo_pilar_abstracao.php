<?php
    
    //modelo
    class Funcionario{
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters e setters (overloading / sobrecarga)

        function __get($atributo){
            return $this->$atributo;
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        /* //getters e setters
        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        } */

        //métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s) e seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'Leonardo');
    $y->__set('telefone', '11 952341235');
    $y->__set('numFilhos', 0);
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) e seu telefone é ' . $y->__get('telefone');

    echo '<hr>';

    $x = new Funcionario();
    $x->__set('nome', 'Júlia');
    $x->__set('telefone', '11 999996666');
    $x->__set('numFilhos', 2);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) e seu telefone é ' . $x->__get('telefone');

?>