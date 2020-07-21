<?php
    session_start();

    echo 'Bem vindo à página #1';

    $_SESSION['favcolor'] = 'green';
    $_SESSION['animal']   = 'cat';
    $_SESSION['time']     = time();

    // Funciona se o cookie de seção foi aceito
    echo '<br /><a href="page2.php">page 2</a>';

    // Ou talves passando o ID da seção se necessário
    //echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
?>