<?php include('conecta.php'); ?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$quant = $_POST['quant'];
$data = $_POST['data'];

$caminhonoservidor = 'imagens';
$caminhotemporario = $_FILES ['imagem2'] ['tmp_name'];
$nomeimagem = $_FILES ['imagem2'] ['name'];
$caminhofinal = $caminhonoservidor.'/'.$nomeimagem;

if($_FILES['imagem2'] ['name'] <> ""){
//echo "A imagem foi alterada";
move_uploaded_file($caminhotemporario,$caminhofinal);

$g = gravaDados($id, $nome, $desc, $preco, $quant, $caminhofinal , $data);

	

}

else {
//echo "A imagem não foi alterada";	
$recuperaArray = encontrarReg($id);
$caminhofinal = $recuperaArray['imagem']; 

$g = gravaDados($id, $nome, $desc, $preco, $quant, $caminhofinal , $data);
	
}

?>

<html>
<head>
<meta http-equiv="refresh" content="1; url=buscar.php">
</head>
</html>
