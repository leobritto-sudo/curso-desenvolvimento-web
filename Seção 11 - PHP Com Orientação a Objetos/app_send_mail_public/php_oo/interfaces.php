<?php

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'Abrir a porta';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface{
        public function trocarCanal(){
            echo 'Trocar o canal';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

    $x = new Geladeira();
    $y = new TV();

    //------------------------------------------

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface Aquaticointerface{
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function andar(){
            echo 'Andar';
        }

        public function respirar(){
            echo 'Respirar';
        }

        public function conversar(){
            echo 'Conversar';
        }
    }

    class Baleia implements MamiferoInterface, Aquaticointerface{
        public function nadar(){
            echo 'Nadar';
        }

        public function respirar(){
            'Respirar';
        }

        protected function esguichar(){
            echo 'Esguichar';
        }
    }

    //-----------------------------------------

    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function comer(){
            echo 'Comer';
        }

        public function voar(){
            echo 'Voar';
        }
    }

?>