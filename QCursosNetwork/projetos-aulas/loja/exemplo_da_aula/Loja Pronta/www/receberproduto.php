<?php include('conecta.php'); ?>

<?php

$caminhonoservidor = 'imagens';
$caminhotemporario = $_FILES ['imagem'] ['tmp_name'];
$nomeimagem = $_FILES ['imagem'] ['name'];
$caminhofinal = $caminhonoservidor.'/'.$nomeimagem;
move_uploaded_file($caminhotemporario,$caminhofinal);

$nome = $_POST ['nome'];
$preco = $_POST ['preco'];
$desc = $_POST ['descricao'];
$quant = $_POST ['quantidade'];
$data = $_POST ['data'];

$sql = "INSERT INTO produtos (imagem, nome, descricao,
	    preco, quantidade, data)
		
		VALUES
		
		('".$caminhofinal."',
		'".$nome."',
		'".$desc."',
		'".$preco."',
		'".$quant."',
		'".$data."')";
		
		$res = mysql_query($sql, $conexao);

if ($res){
echo 'Inserido com sucesso';	
}

else{
echo 'Os dados não foram inseridos';	
}

?>


<html>
<head>
<meta http-equiv="refresh" content="1; url=buscar.php">
</head>
</html>