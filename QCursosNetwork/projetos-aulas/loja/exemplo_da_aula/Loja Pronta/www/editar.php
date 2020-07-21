<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<p>
  <?php
$id = $_POST['id'];
$imagem = $_POST['imagem'];
$nome = $_POST['nome2'];
$desc = $_POST['desc2'];
$preco = $_POST['preco2'];
$quant = $_POST['quantidade2'];
$data = $_POST['data2'];

?>
</p>
<form action="recebereditar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="249" border="0">
    <tr>
      <td>Nova Imagem</td>
      <td><label for="imagem2"></label>
      <input type="file" name="imagem2" id="imagem2" /></td>
    </tr>
    <tr>
      <td>imagem</td>
      <td><label for="imagem"></label>
      <img src="<?php echo $imagem; ?>" width="70" height="70"></td>
    </tr>
    <tr>
      <td>nome</td>
      <input name="id" type="hidden" value="<?php echo $id ?>" />
      <td><label for="nome"></label>
      <input type="text" name="nome" id="nome" value="<?php echo $nome ?>"/></td>
    </tr>
    <tr>
      <td>descrição</td>
      <td><label for="desc"></label>
      <input type="text" name="desc" id="desc" value="<?php echo $desc ?>"/></td>
    </tr>
    <tr>
      <td>quantidade</td>
      <td><label for="quant"></label>
      <input type="text" name="quant" id="quant" value="<?php echo $quant ?>"/></td>
    </tr>
    <tr>
      <td>preco</td>
      <td><label for="preco"></label>
      <input type="text" name="preco" id="preco" value="<?php echo $preco ?>"/></td>
    </tr>
    <tr>
      <td>data</td>
      <td><label for="data"></label>
      <input type="text" name="data" id="data" value="<?php echo $data ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>