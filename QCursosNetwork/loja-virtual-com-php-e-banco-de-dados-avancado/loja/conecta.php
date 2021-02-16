<?php 

$conexao = mysqli_connect ('localhost', 'root', '');
$db = mysqli_select_db($conexao, 'loja') or die ("não foi possivel conectar a esse banco");

?>