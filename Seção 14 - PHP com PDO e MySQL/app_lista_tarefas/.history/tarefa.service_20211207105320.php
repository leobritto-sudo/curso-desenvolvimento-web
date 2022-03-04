<?php 

    class TarefaService {

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao;
            $this->tarefa = $tarefa;
        }

        public function create() {

        }

        public function read() {
            
        }

        public function update() {
            
        }

        public function delete() {
            
        }
    }

?>