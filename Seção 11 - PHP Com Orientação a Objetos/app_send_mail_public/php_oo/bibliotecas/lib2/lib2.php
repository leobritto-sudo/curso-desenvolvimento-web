<?php

namespace B;

class Cliente implements \A\CadastroInterface{
    public $nome = 'Pedro';

    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr){
        return $this->$attr;
    }

    public function salvar(){
        'Salvou!';
    }

    public function remover(){
        'Removeu!';
    }
}

interface CadastroInterface{
    public function remover();
}

?>