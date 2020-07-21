<?php include('conecta.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Loja Virtual</title>
</head>

<body>
    <form id="form1" name="fomr1" action="" method="post">
        <table width="554" height="272" border="0">
            <tr>
                <td colspan="5" width="15" align="center" valign="middle"><a href="carrinho.php">Carrinho de compras</a></td>

                <td width="83" align="center" valign="middle">Buscar</td>
                <td width="277" align="center" valign="middle"><label for="buscar"></label>
                    <input type="text" name="buscar" id="buscar" /></td>
                <td width="85" align="center" valign="middle"><input type="submit" name="btbuscar" id="btbuscar" value="Buscar" /></td>
            </tr>
            <tr>
                <td colspan="8" align="center" valign="middle" bgcolor="#6699FF">LISTA DE PRODUTOS</td>
            </tr>
            <tr>
                <td align="center" valign="middle" bgcolor="#FF9966">ID</td>
                <td align="center" valign="middle" bgcolor="#FF9966">IMAGEM</td>
                <td align="center" valign="middle" bgcolor="#FF9966">NOME</td>
                <td align="center" valign="middle" bgcolor="#FF9966">DESCRIÇÃO</td>
                <td align="center" valign="middle" bgcolor="#FF9966">PREÇO</td>
                <td align="center" valign="middle" bgcolor="#FF9966">QUANTIDADE</td>
                <td align="center" valign="middle" bgcolor="#FF9966">DATA</td>
                <td align="center" valign="middle" bgcolor="#FF9966">ADICIONAR</td>
            </tr>

            <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM produtos");

            if (isset($_POST['buscar'])) {
                $consulta = mysqli_query($conexao, "SELECT * FROM produtos where nome like '%" . $_POST['buscar'] . "%'");
            }

            while ($linha = mysqli_fetch_array($consulta)) {
                $id = $linha['id'];
                $imagem = $linha['imagem'];
                $nome = $linha['nome'];
                $desc = $linha['descricao'];
                $preco = $linha['preco'];
                $quant = $linha['quantidade'];
                $data = $linha['data'];
                //$adicionar = '<a href="carrinho.php?id='.$linha['id'].'"title="'.$linha['id'].'">Adicionar </a>'
            ?>

                <tr bgcolor="#FFFF99">
                    <td align="center" valign="middle"><?= $id; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><img src="<?php echo $imagem; ?>" width="70" height="70" /></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><?php echo $nome; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><?php echo $desc; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><?php echo $preco; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><?php echo $quant; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99"><?php echo $data; ?></td>
                    <td align="center" valign="middle" bgcolor="#FFFF99">
                        <form action="carrinho.php" method="post" name="comprar">
                            <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
                            <input name="nome" type="hidden" value="<?php echo $nome; ?>" />
                            <input name="preco" type="hidden" value="<?php echo $preco; ?>" />
                            <input name="quantidade" type="hidden" value="1" />
                            <input name="Comprar" type="submit" value="Comprar" />
                        </form>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </form>
</body>

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

</html>