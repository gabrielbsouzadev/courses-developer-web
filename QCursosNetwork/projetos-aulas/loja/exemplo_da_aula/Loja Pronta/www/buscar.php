<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar</title>
</head>

<body>
<?php include('conecta.php'); ?>

<?php
session_start();

//if ($_SESSION['minhasessao'] ['permicoes'] == 1){


$s = verProdutos('editar'); 
//}

//else{
	//echo "Usuário nao tem permissão";
//}
?>
</body>
</html>