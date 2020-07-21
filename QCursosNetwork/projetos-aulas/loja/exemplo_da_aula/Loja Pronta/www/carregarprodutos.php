<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<form action="receberproduto.php" method="post" enctype="multipart/form-data">
  <table width="200" border="0">
    <tr>
      <td width="111">&nbsp;</td>
      <td width="79">&nbsp;</td>
    </tr>
    <tr>
      <td>Imagem</td>
      <td><label for="imagem"></label>
      <input type="file" name="imagem" id="imagem" /></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><label for="nome"></label>
      <input type="text" name="nome" id="nome" /></td>
    </tr>
    <tr>
      <td>Descrição</td>
      <td><label for="descricao"></label>
      <input type="text" name="descricao" id="descricao" /></td>
    </tr>
    <tr>
      <td>Preço</td>
      <td><label for="preco"></label>
      <input type="text" name="preco" id="preco" /></td>
    </tr>
    <tr>
      <td>Quantidade</td>
      <td><label for="quantidade"></label>
      <input type="text" name="quantidade" id="quantidade" /></td>
    </tr>
    <tr>
      <td>Data</td>
      <td><label for="data"></label>
      <input type="text" name="data" id="data" value="<?php echo date("y-m-d"); ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Enviar" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>