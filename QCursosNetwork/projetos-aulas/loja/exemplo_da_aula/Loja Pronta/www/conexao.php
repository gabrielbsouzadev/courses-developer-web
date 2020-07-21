<?php
$conexao = mysql_connect('mysql22.redehost.com.br' , 'lhlivia12345678', 'lhrj456789') or die ( 'Não foi possivel conectar ao banco de dados');

$db = mysql_select_db('lojasony', $conexao) or die ( 'Não foi possivel selecionar o banco de dados');

define ('BASE_URL', 'http://lhcentroautomotivo.com.br/');

function base_url($local){
return 	BASE_URL.$local;
};


?>