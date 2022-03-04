<?php

    class ExceptionCustomizada extends Exception{
        private $erro = '';
        
        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErro(){
            echo '<div style="border: 1px solid gray; padding: 15px; color: white; background: red;">';
            echo $this->erro;
            echo '</div>';
        }
    }

    try{
        throw new ExceptionCustomizada('Este é um erro teste!');
    }
    catch(ExceptionCustomizada $e){
        echo $e->exibirMensagemErro();
    }

?>