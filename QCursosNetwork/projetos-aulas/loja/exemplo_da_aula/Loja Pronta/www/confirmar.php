<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmar Compra</title>
<style type="text/css">
.alinhar {
	text-align: center;
}
</style>
</head>

<body>
<h1> Confirmar Pedido </h1>


<table width="458" height="119" border="0">
  <tr>
    <td colspan="4" align="center" valign="middle" bgcolor="#000000" class="COR">LISTA DE PRODUTOS COMPRADOS</td>
  </tr>
  <tr>
    
    <td width="60" align="center" valign="middle" bgcolor="#FF9966">NOME</td>
    <td width="131" align="center" valign="middle" bgcolor="#FF9966">PRECO</td>
    <td width="116" align="center" valign="middle" bgcolor="#FF9966">QUANTIDADE</td>
    <td width="133" align="center" valign="middle" bgcolor="#FF9966">SUB TOTAL</td>
  </tr>
 <?php 
 
 session_start();
 $meucarrinho = $_SESSION['carrinho'];
 
 if (isset($meucarrinho)){
	 
	 $total = 0;
	 
	 for($i=0; $i < count($meucarrinho); $i++) {
		 if ($meucarrinho[$i]<>NULL){

   ?>
  <tr>
     
<td align="center" valign="middle" bgcolor="#FFFFCC">
<?php echo $meucarrinho[$i]['nome'] ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC">
	<?php echo $meucarrinho[$i]['preco']  ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $meucarrinho[$i]['quantidade'] ?></td>
    
    <?php 
	
	$subtotal = $meucarrinho[$i]['preco'] * $meucarrinho[$i]['quantidade'];
	$total = $total + $subtotal;
	  ?>
    
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $subtotal; ?>
      
    </td>
  </tr>
  <?php 
  	 }
	 }
 }
   ?>

  <tr>
    <td colspan="3" bgcolor="#FFFFCC"><div align="right">PREÇO</div></td>
    <td align="center" bgcolor="#FFFFCC"><?php if (isset($total)) echo $total; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td align="center" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
</table>
<form id="form2" name="form2" method="post" action="finalizarpedido.php">
<table width="458" border="0">
  <tr>
    <td colspan="2" bgcolor="#FF9966" class="alinhar">Dados do Comprador</td>
  </tr>
  <tr>
    <td width="164" bgcolor="#FFFFCC">&nbsp;</td>
    <td width="284" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Nome</td>
    <td bgcolor="#FFFFCC">
      <label for="nome"></label>
      <input type="text" name="nome" id="nome" />
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Email</td>
    <td bgcolor="#FFFFCC"><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Endereço</td>
    <td bgcolor="#FFFFCC"><input type="text" name="end" id="end" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Tel</td>
    <td bgcolor="#FFFFCC"><input type="text" name="tel" id="tel" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><input type="submit" name="button2" id="button2" value="Comprar" /></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>

</body>
</html>