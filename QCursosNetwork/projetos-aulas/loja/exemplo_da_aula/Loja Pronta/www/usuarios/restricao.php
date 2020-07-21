

<?php
session_start();
if($_SESSION['minhasessao'] ['permicoes'] == 1){
	echo 'Tem Permissão <br>';
	echo $_SESSION['minhasessao'] ['nome'].'<br>';
	echo $_SESSION['minhasessao'] ['usuario'].'<br>';
	echo $_SESSION['minhasessao'] ['permicoes'].'<br>';
	
}

else{
	echo 'Não tem Permissão para acessar'; 
	?>
	
    <html>
<head>
<meta http-equiv="refresh" content="3; url=dadoslogin.php">
</head>
</html>
    

<?php
}

?>



