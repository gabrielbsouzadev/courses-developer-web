<?php

    session_start();
    echo 'Bem vindo à página #2<br />';

    echo $_SESSION['favcolor']; // green
    echo $_SESSION['animal'];   // cat
    echo date('Y m d H:i:s', $_SESSION['time']);

    // Você pode querer usar o SID aqui, como fizemos em page1.php
    echo '<br /><a href="page1.php">page 1</a>';
?>