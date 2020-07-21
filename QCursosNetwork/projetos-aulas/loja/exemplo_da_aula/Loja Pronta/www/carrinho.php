<?php include ('galeria/conexao.php'); ?>


<?php include ('modelo/head.php'); ?>




<?php 




if (isset($_POST['id_txt'])){

$id = $_POST['id_txt'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$meucarrinho [] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade);
}

session_start();

if (isset($_SESSION['carrinho'])){
	$meucarrinho = $_SESSION['carrinho'];
if (isset($_POST['id_txt'])){
$id = $_POST['id_txt'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$pos = -1;
for ($i=0; $i<count($meucarrinho); $i++){
if ($id == $meucarrinho[$i] ['id']) {
	$pos = $i;
}
}

if($pos<>-1) {
	$quant = $meucarrinho[$pos] ['quantidade'] + $quantidade;
	$meucarrinho [$pos] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quant);
}

else {
	$meucarrinho [] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade);
}

}
} 

if (isset ($_POST['id2'])){
$indice = $_POST['id2'];	
$quant = $_POST['quantidade2'];
$meucarrinho [$indice] ['quantidade'] = $quant;
}

if (isset ($_POST['id3'])){
$indice = $_POST['id3'];	
$meucarrinho [$indice] = NULL;
}



if (isset ($meucarrinho)) $_SESSION['carrinho'] = $meucarrinho;

?>

<div class="tablecarrinho">

<table width="458" height="119" border="0">
  <tr>
    <td colspan="5" align="center" valign="middle" class="COR"><strong>LISTA DE PRODUTOS COMPRADOS</strong></td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle" class="COR">&nbsp;</td>
  </tr>
  <tr>
    
    <td width="60" align="center" valign="middle"><strong>NOME</strong></td>
    <td width="131" align="center" valign="middle"><strong>PRECO</strong></td>
    <td width="116" align="center" valign="middle"><strong>QUANTIDADE</strong></td>
    <td width="133" colspan="2" align="center" valign="middle"><strong>SUB TOTAL</strong></td>
  </tr>
 <?php 
 
 if (isset($meucarrinho)){
	 
	 $total = 0;
	 
	 for($i=0; $i < count($meucarrinho); $i++) {
		 if ($meucarrinho[$i]<>NULL){

   ?>
  <tr>
     
<td align="center" valign="middle">
<?php echo $meucarrinho[$i]['nome'] ?></td>
    <td align="center" valign="middle">
	<?php echo $meucarrinho[$i]['preco']  ?></td>
    <td align="center" valign="middle">
	
    <form action="" method="post" name="atualizar">
    <input name="id2" type="hidden" value="<?php echo $i ?>" />
    <input name="quantidade2" type="text" value="<?php echo $meucarrinho[$i]['quantidade'] ?>" size="2" maxlength="2" />
    <input name="" type="image" src="imagens/atua.png" width="17" height="17" />
    
    </form>
    
    </td>
    
    <?php 
	
	$subtotal = $meucarrinho[$i]['preco'] * $meucarrinho[$i]['quantidade'];
	$total = $total + $subtotal;
	  ?>
    
    <td align="center" valign="middle"><?php echo $subtotal; ?>
        
    </td>
    <td align="center" valign="middle"><form action="" method="post">
    <input name="id3" type="hidden" value="<?php echo $i ?>" />
    <input name="" type="image" src="imagens/excluir.png" width="18" height="18" />
    
    </form></td>
  </tr>
  <?php 
  	 }
	 }
 }
   ?>

  <tr>
    <td colspan="3"><div align="right"><strong>PREÇO</strong></div></td>
    <td colspan="2" align="center"><?php if (isset($total)) echo $total; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><form id="form1" name="form1" method="post" action="confirmar.php">
      <input type="submit" name="button" id="button" value="Confirmar Compra" />
    </form></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
</table>

</div>
<p><a href="galeria/galeria.php">Voltar</a></p>
<?php include ('modelo/rodape.php'); ?>