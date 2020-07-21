<?php include "../conecta.php" ?>
<?php
$usuariol = $_POST['user'];
$passl = $_POST['pass'];

session_start();

$consulta = mysql_query("select * from usuarios");
$porta = 'continuar';

while ($linhas = mysql_fetch_array($consulta) and
$porta = 'continuar'){
	
$id = $linhas['id'];
$nome = $linhas['nome'];
$usuario = $linhas['usuario'];
$pass = $linhas['pass'];
$permicoes = $linhas['permicoes'];
$data = $linhas['data'];

if (isset($usuariol) and isset($passl)){
if ($usuario == $usuariol and $pass == $passl){

echo 'Bem Vindo '.$nome;

$minhasessao = array ('id' => $id, 'nome' => $nome, 
					 'usuario' => $usuario, 
					 'pass' => $pass, 
					 'permicoes' => $permicoes,
					 'data' => $data);
					 

	

$_SESSION['minhasessao'] = $minhasessao;
?>

<html>
<head>
<meta http-equiv="refresh" content="3; url=../buscar.php">
</head>
</html>

<?php
$porta = 'sair';
exit;
}
else{

$resultado = 'nao';
	
}
	
}

	
}

if ($resultado == 'nao'){
echo 'O usuário ou a senha estão incorretos';
?>

<html>
<head>
<meta http-equiv="refresh" content="2; url=../principal.php">
</head>
</html>

<?php	
}
?>
