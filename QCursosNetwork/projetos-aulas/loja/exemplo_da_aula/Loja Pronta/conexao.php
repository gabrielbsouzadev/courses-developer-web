<?php
$conexao = mysqli_connect('localhost' , 'root', '') or die ( 'Não foi possivel conectar ao banco de dados');

$db = mysqli_select_db($conexao, 'loja') or die ( 'Não foi possivel selecionar o banco de dados');

//define ('BASE_URL', 'http://hugocursos.makelabor.com//');

function base_url($local){
return 	BASE_URL.$local;
};


?>