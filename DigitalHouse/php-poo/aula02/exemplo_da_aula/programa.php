<?php

    require_once("./classes/Equipamento.php");
    require_once("./classes/AspiradorDePo.php");
    require_once("./classes/PenDrive.php");
    require_once("./classes/AparelhoDeSom.php");

    echo "<h1>Aspirador de Po</h1>"; 

    $aspiradorDePo = new AspiradorDePo();
    $aspiradorDePo->ligar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";
    
    $aspiradorDePo->aspirar();
    echo "<br>";
    
    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->desligar();
    echo "<br>"

    $aspiradorDePo->limparfiltro();
    echo "<br>";  
    
    echo "<h1>Pen Drive</h1>";

    $penDrive = new PenDrive();
    $penDrive->adicionarMusica("Musica1.mp3");
    echo "<br>";

    $penDrive->adicionarMusica("Musica2.mp3");
    echo "<br>";

    $penDrive->adicionarMusica("Musica3.mp3");
    echo "<br>";

    $penDrive->removerMusica("Musica3.mp3");
    echo "<br>";

    echo "<h1>Aparelho de Som</h1>";

    $aparelhoDeSom = new AparelhoDeSom();
    $aparelhoDeSom->ligar();

    $aparelhoDeSom->conectar($pendrive);
    echo "<br>";

    $aparelhoDeSom->reproduzir();
    echo "<br>";

    $aparelhoDeSom->avancarFaixa();
    echo "<br>";
    
?>