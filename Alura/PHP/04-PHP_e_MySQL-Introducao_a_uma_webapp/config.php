<?php 
    $mysql = new mysqli('localhost', 'root', '', 'blog');
    $mysql->set_charset('utf8');
    
    if ($mysql == TRUE) {
        echo "banco conectado";
    } else {
        "Erro na conexão";
    }
?>