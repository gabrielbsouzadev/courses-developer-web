<?php

    // Classe triangulo
    class Triangulo {

        //atributos
        public $baseProp;
        public $alturaProp;

        //metodos
        public function calcularArea(){
            $area = (($this->baseProp * $this->alturaProp)/2);
            return $area;
        }

    }

 ?>