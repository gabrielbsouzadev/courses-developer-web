<?php include('conecta.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de Compras</title>
</head>

<body>
  <p>Carrinho de Compras</p>
  <p>&nbsp;</p>
  <p>Meus produtos escolhidos são:</p>

  <?php

  if (isset($_POST['id_txt'])) {

    $id = $_POST['id_txt'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $meucarrinho[] = array(
      'id' => $id,
      'nome' => $nome,
      'preco' => $preco,
      'quantidade' => $quantidade
    );
  }

  session_start();

  if (isset($_SESSION['carrinho'])) {
    $meucarrinho = $_SESSION['carrinho'];
    if (isset($_POST['id_txt'])) {
      $id = $_POST['id_txt'];
      $nome = $_POST['nome'];
      $preco = $_POST['preco'];
      $quantidade = $_POST['quantidade'];
      $pos = -1;

      for ($i = 0; $i < count($meucarrinho); $i++) {
        if ($id == $meucarrinho[$i]['id']) {
          $pos = $i;
        }
      }

      if ($pos <> -1) {
        $quant = $meucarrinho[$pos]['quantidade'] + $quantidade;
        $meucarrinho[$pos] = array(
          'id' => $id,
          'nome' => $nome,
          'preco' => $preco,
          'quantidade' => $quant
        );
      } else {
        $meucarrinho[] = array(
          'id' => $id,
          'nome' => $nome,
          'preco' => $preco,
          'quantidade' => $quantidade
        );
      }
    }
  }

  if (isset($meucarrinho)) $_SESSION['carrinho'] = $meucarrinho;


  ?>

  <table width="313" height="153" border="0">
    <tr>
      <td colspan="4" align="center" valign="middle">Produtos</td>
    </tr>
    <tr>

      <td width="47" align="center" valign="middle" bgcolor="#9999FF">NOME</td>
      <td width="85" align="center" valign="middle" bgcolor="#9999FF">PREÇO</td>
      <td width="102" align="center" valign="middle" bgcolor="#9999FF">QUANTIDADE</td>
      <td width="16" align="center" valign="middle" bgcolor="#9999FF">SUBTOTAL</td>
    </tr>


    <?php

    if (isset($meucarrinho)) {

      $total = 0;
      for ($i = 0; $i < count($meucarrinho); $i++) {

    ?>

        <tr>


          <td align="center" valign="middle" bgcolor="#FFCCFF"><?= $meucarrinho[$i]['nome'] ?></td>
          <td align="center" valign="middle" bgcolor="#FFCCFF"><?= $meucarrinho[$i]['preco'] ?></td>
          <td align="center" valign="middle" bgcolor="#FFCCFF"><?= $meucarrinho[$i]['quantidade'] ?></td>

          <?php
          $subtotal = $meucarrinho[$i]['preco'] * $meucarrinho[$i]['quantidade'];
          $total = $total + $subtotal;
          ?>

          <td align="center" valign="middle" bgcolor="#FFCCFF"><?= $subtotal ?></td>
        </tr>
    <?php
      }
    };
    ?>
    <tr>
      <td colspan="3" align="right" bgcolor="#FFCCFF">Total:</td>
      <td align="center" valign="middle" bgcolor="#FFCCFF"><?php if (isset($total)) echo $total; ?></td>
    </tr>

  </table>

  <p><a href="index.php">Voltar</a></p>


</body>

</html>