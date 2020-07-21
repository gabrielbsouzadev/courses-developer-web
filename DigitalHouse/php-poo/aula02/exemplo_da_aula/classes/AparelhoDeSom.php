<?php

    require_once("Equipamento.php");

    class AparelhoDeSom extends Equipamento {
        // publico => orelhao 
        // protegido => telefone residencial
        // privado => celular
        
        // privado: pois, somente esta classe ira utilizar a propriedade ou seja, somente
        // teremos condicao de alterar a propriedade nos metodos dentro da classe PenDrive.
        private $volume;
        private $numeroDeFaixa;
        private $usb;

        public function __construct(){
            $this->volume = 0;
            $this->numeroDeFaixa = 1;
        }

        public function conectar($penDrive){
            if($this->ligado){
                $this->usb = $penDrive;
                echo "O pen drive foi conectado";
            }
        }

        public function reproduzir(){    
            if($this->ligado){
                if($this->numeroDeFaixa < count($this->usb->listadeMusicas)){
                    echo "Tocando: " . $this->usb->ListadeMusicas[0];
                }
            }
        }

        // public function avancarFaixa(){
           
        //     if($this->ligado && $this->usb){
        //         if($this->numeroDeFaixa < count($this->usb->listadeMusicas)){
        //             $this->numeirDeFaixa++;
        //             echo "Avancou para faixa " . $this->usb->listadeMusicas[$this->numeroDeFaixa];
        //         } else {
        //             echo "Voce esta na ultima faixa da lista de musicas"
        //         }
        //     }
        // }

        public function avancarFaixa(){
            if($this->ligado && $this->usb){
                if($this->numeroDeFaixa < count($this->usb->listaDeMusicas)){
                    $this->numeroDeFaixa++;
                    echo "Avancou para faixa " . $this->usb->listaDeMusicas[$this->numeroDeFaixa];
                } else {
                    echo "Você está na última faixa da lista de músicas";
                }
            }
        }
    }

?>
