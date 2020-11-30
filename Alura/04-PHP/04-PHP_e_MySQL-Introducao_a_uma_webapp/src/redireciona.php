<?php

//function para redirecionar
function redireciona(string $url): void
{    
    header("Location: $url");
    die();
}

?>