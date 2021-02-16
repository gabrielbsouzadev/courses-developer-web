<?php include('conecta.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
</head>

<body>


    <form name="form1" method="post" action="">

        <table width="791" height="377" border="0">
            <tr>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="center" valign="middle"><label for="buscar"></label>
                    <input type="text" name="buscar" id="buscar">
                </td>
                <td align="center" valign="middle"><input type="submit" name="btbuscar" id="btbuscar" value="Buscar"></td>
            </tr>
            <tr>
                <td colspan="8" align="center" valign="middle">LISTA DE PRODUTOS</td>
            </tr>
            <tr>
                <td align="center" valign="middle" bgcolor="#666666">ID</td>
                <td align="center" valign="middle" bgcolor="#666666">IMAGEM</td>
                <td align="center" valign="middle" bgcolor="#666666">NOME</td>
                <td align="center" valign="middle" bgcolor="#666666">DESCRIÇÃO</td>
                <td align="center" valign="middle" bgcolor="#666666">PREÇO</td>
                <td align="center" valign="middle" bgcolor="#666666">QUANTIDADE</td>
                <td align="center" valign="middle" bgcolor="#666666">DATA</td>
                <td align="center" valign="middle" bgcolor="#666666">ADICIONAR</td>
            </tr>

            <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM produtos");

            if (isset($_POST['buscar'])) {
                $consulta = mysqli_query($conexao, "SELECT * FROM produtos WHERE nome LIKE '%" . $_POST['buscar'] . "%'");
            }

            while ($linha = mysqli_fetch_array($consulta)) {
                $id = $linha['id'];
                $imagem = $linha['imagem'];
                $nome = $linha['nome'];
                $desc = $linha['descricao'];
                $preco = $linha['preco'];
                $quant = $linha['quantidade'];
                $data = $linha['data'];

                // $adicionar = '<a href="carrinho.php?id=' . $linha['id'] . '"title="' . $linha['id'] . '"> Adicionar </a>';

            ?>

                <tr>
                    <td align="center" valign="middle"><?= $id; ?></td>
                    <td align="center" valign="middle"> <img src="<?= $imagem; ?>" alt="" width="70" height="70"> </td>
                    <td align="center" valign="middle"><?= $nome; ?></td>
                    <td align="center" valign="middle"><?= $desc; ?></td>
                    <td align="center" valign="middle"><?= $preco; ?></td>
                    <td align="center" valign="middle"><?= $quant; ?></td>
                    <td align="center" valign="middle"><?= $data; ?></td>

                    <!-- <td align="center" valign="middle"><?php //echo $adicionar; ?></td> -->
                    
                    <td align="center" valign="middle">
                        <form action="carrinho.php" method="post" name="comprar">
                            <input value="<?= $id; ?>" type="hidden" name="id_txt" />
                            <input value="<?= $nome; ?>" type="hidden" name="nome" />
                            <input value="<?= $preco; ?>" type="hidden" name="preco" />
                            <input value="1" type="hidden" name="quantidade" />
                            <input name="Comprar" type="submit" value="Comprar" />
                        </form>
                    </td>
                </tr>
            <?php
            };
            ?>
        </table>

        <p><a href="carrinho.php">Carrinho de Compras</a></p>


    </form>
</body>

</html>