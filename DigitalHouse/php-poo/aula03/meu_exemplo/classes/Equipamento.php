<?php

    // se torna uma classe abstrata devido mudar o comportamento
    // de classes que irao implementa-la
    // (podemos pensar que as classes filhas vao assinar um contrato com a classe modelo)
    abstract class Equipamento{

        // metodos que podem ser: publicos, protegidos ou privados

        // vamos usar o protegido: pois, somente a classe modelo e as classes filhas que herdam desta classe
        // modelo poderao utilizar com esta propriedade ligado
        protected $ligado;

        public function __construct(){
            $this->ligado = false;
        }

        public function ligar(){
            if($this->ligado){
                echo "O equipamento ja esta ligado";
            } else {
                $this->ligado = true;
                echo "O equipamento foi ligado";
            }
        }

        public function desligar() {
            if(!$this->ligado){
                echo "O equipamento ja esta desligado";
            } else {
                $this->ligado = false;
                echo "O equipamento foi desligado";
            }
        }
    }

?>