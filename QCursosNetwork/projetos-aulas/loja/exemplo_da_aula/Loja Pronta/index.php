<?php
include ('conexao.php');

$consulta = mysqli_query($conexao, "select * from produtos order by nome ");

$nro = mysqli_num_rows($consulta);


if($nro == 0){
	echo 'Não existem produtos cadastrados';
}

$regpag = 4;

if(isset($_GET['num'])){
$nropag = $_GET['num'];
} else {
	$nropag = 1;
}

if (is_numeric($nropag)) 
$inicio = ($nropag-1) * $regpag;

else
$inicio = 0;



$consulta = mysqli_query( $conexao, "select * from produtos order by nome limit $inicio,$regpag");

$quantpag = ceil($nro / $regpag);

?>

<?php include ('modelo/head.php'); ?>

 <p>
<div class="conteudo">
<?php

 while($linha=mysqli_fetch_array($consulta)){
	  $id = $linha['id'];
	  $imagem = $linha['imagem'];
	  $nome = $linha['nome'];
	  $desc = $linha['descricao'];
	  $preco = $linha['preco'];
	  $quant = $linha['quantidade'];
	  $data = $linha['data'];
 
?>

<div class="caixa">

<div class="nome"><h4> <?php echo $nome ?> </h4></div>
<img src="<?php echo $imagem ?>" width="110" height="100" />
<p> R$<?php echo $preco ?> </p>
<form action="detalhe.php" method="post" name="datalhe">
<input name="id" type="hidden" value="<?php echo $id ?>"  />
<input name="Enviar" type="submit" class="botao" value="detalhes" />
</form>
</div>

<?php
}
?>



</div>
<div id="paginador" align="center">
<?php


if($nropag > 1)
echo "<a href='galeria.php?num=".($nropag - 1 )."'>  Anterior </a>";

for ($i=1; $i<=$quantpag; $i++){
	
	if($i == $nropag)
	echo '<font color="#999999">'.$i. " </font>";
	
	else
	
	echo "<a href='galeria.php?num
=$i'> $i </a> ";	
}


if($nropag < $quantpag)
echo "<a href='galeria.php?num=".($nropag + 1 )."'> Próximo </a>";

?>
</div>

<?php include ('modelo/rodape.php'); ?>