<<<<<<< HEAD
<?php
require_once("conecta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
=======
<?php include('conecta.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
>>>>>>> 2d16a2a2b5757893497fac4ad4493c6e83957705

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Carrinho</title>
</head>

<body>

    <p>Carrinho de Compras</p>
    <p>&nbsp;</p>

=======
    <title>Document</title>
</head>

<style type="text/css">
    input {
        text-align: center;
    }
</style>

<body>
    <p>Carrinho de compras</p>
    <p>&nbsp;</p>
>>>>>>> 2d16a2a2b5757893497fac4ad4493c6e83957705
    <p>Meus produtos escolhidos são:</p>
    <p>&nbsp;</p>
    <?php

<<<<<<< HEAD
=======
    //testa se o produto tem um id
>>>>>>> 2d16a2a2b5757893497fac4ad4493c6e83957705
    if (isset($_POST['id_txt'])) {

        $id = $_POST['id_txt'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
<<<<<<< HEAD
        
    }
    ?>
<table width="200" border="0">
      <tr>
        <td colspan="4" align="center" bgcolor="#FFFFFF">Lista de produtos comprados</td>
      </tr>
      <tr>
        
        <td align="center" valign="middle" bgcolor="#CC6666">NOME</td>
        <td align="center" valign="middle" bgcolor="#CC6666">PREÇO</td>
        <td align="center" valign="middle" bgcolor="#CC6666">QUANTIDADE</td>
        <td align="center" valign="middle" bgcolor="#CC6666">SubTotal:</td>

      </tr>
      <tr>
        
        <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $nome?></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $preco?></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $quantidade?></td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $quantidade * $preco?></td>

      </tr>

      <tr>
        <td colspan="3" align="right" bgcolor="#FFFFCC">Total:</td>
        <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo "x"?></td>
      </tr>
</table>

</body>

</html>
=======
        $meucarrinho[] = ['id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade];
    }

    //testa se tem algo dentro do carrinho
    session_start();

    if (isset($_SESSION['carrinho'])) {
        $meucarrinho = $_SESSION['carrinho'];
        if (isset($_POST['id_txt'])) {
            $id = $_POST['id_txt'];
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            $pos = -1;
            //Usa o FOR para enquanto $i for menor que o array vai incrementando +1 com ++
            for ($i = 0; $i < count($meucarrinho); $i++) {
                //Se o id for igual a posição do array ele não vai criar mais uma linha do produto e vai adicionar na mesma linha
                if ($id == $meucarrinho[$i]['id']) {
                    $pos = $i;
                }
            }
            if ($pos <> -1) {
                $quant = $meucarrinho[$pos]['quantidade'] + $quantidade;
                $meucarrinho[$pos] = ['id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quant];
            } else {
                //joga o produto pra dentro do carrinho de compras e todos os seus elementos
                $meucarrinho[] = ['id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade];
            }
        }
    }

    //Atualizando a quantidade com o botão botão atualizar
    if (isset($_POST['id2'])) {
        $indice = $_POST['id2'];
        $quant = $_POST['quantidade2'];
        $meucarrinho[$indice]['quantidade'] = $quant;
    }

    //limpando os campos com o botão lixeira
    if (isset($_POST['id3'])) {
        $indice = $_POST['id3'];
        $meucarrinho[$indice] = NULL;
    }

    if (isset($meucarrinho)) $_SESSION['carrinho'] = $meucarrinho;
    ?>

    <table width="367" height="209" border="0">
        <tr>
            <td colspan="5" align="center" bgcolor="#0033FF">Lista de Produtos no carrinho de Compras</td>
        </tr>
        <tr>
            <td width="49" align="center" bgcolor="#FF3300">Nome</td>
            <td width="70" align="center" bgcolor="#FF3300">Preço</td>
            <td width="91" align="center" bgcolor="#FF3300">Quantidade</td>
            <td width="26" colspan="2" align="center" bgcolor="#FF3300">SubTotal</td>
        </tr>
        <?php
        if (isset($meucarrinho)) {
            $total = 0;
            for ($i = 0; $i < count($meucarrinho); $i++) {
                //Só vai repetir o produto quando o carrinho não for nulo
                if ($meucarrinho[$i] <> null) {


        ?>
                    <tr>
                        <td align="center" bgcolor="#FFCC66"><?php echo $meucarrinho[$i]['nome']; ?></td>
                        <td align="center" bgcolor="#FFCC66"><?php echo $meucarrinho[$i]['preco'] ?></td>
                        <td align="center" bgcolor="#FFCC66">
                            <form action="" method="post" name="atualizar">
                                <input name="id2" type="hidden" value="<?php echo $i ?>">
                                <input name="quantidade2" type="text" value="<?php echo $meucarrinho[$i]['quantidade']; ?>" size="2" maxlength="2">

                                <input name="" type="image" src="imagens/refresh.png" width="10" height="10">

                            </form>
                        </td>
                        <?php
                        $subtotal = $meucarrinho[$i]['preco'] * $meucarrinho[$i]['quantidade'];
                        $total = $total + $subtotal;
                        ?>
                        <td align="center" bgcolor="#FFCC66"><?php echo $subtotal ?></td>
                        <td align="center" bgcolor="#FFCC66">
                            <form action="" method="post">

                                <input name="id3" type="hidden" value="<?php echo $i ?>">
                                <input name="" type="image" src="imagens/excluir.png" width="18" height="18">
                            </form>
                        </td>
                    </tr>
        <?php
                }
            }
        }
        ?>
        <tr>
            <td colspan="3" align="right" bgcolor="#FFCC66">Preço:</td>
            <td colspan="2" align="center" bgcolor="#FFCC66"><?php if (isset($total)) echo $total; ?></td>
        </tr>
    </table>

    <a href="index.php">Voltar</a>

</body>

</html>

<footer class="footer">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-light">© 2020 Copyright:
        <a href="#">Gabriel B Souza - Developer</a>
    </div>

    <!-- Copyright -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>
>>>>>>> 2d16a2a2b5757893497fac4ad4493c6e83957705
