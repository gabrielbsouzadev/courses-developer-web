<?php 

    require_once("Equipamento.php");

    // herdando a classe AspiradorDePo para conseguir com metodos da mesma
    class AspiradordePo extends Equipamento {
        
        public function __construct(){
            $this->ligado = true;
        }
    }

?>
