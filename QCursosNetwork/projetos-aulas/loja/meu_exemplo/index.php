<<<<<<< HEAD
<?php
require_once("conecta.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Loja Virtual</title>
</head>

<body>

	<form id="form1" name="form1" method="post" action="">
		<table width="583" height="137" border="0">
			<tr>
				<td width="15" align="center" valign="middle">&nbsp;</td>
				<td width="15" align="center" valign="middle">&nbsp;</td>
				<td width="15" align="center" valign="middle">&nbsp;</td>
				<td width="15" align="center" valign="middle">&nbsp;</td>
				<td width="15" align="center" valign="middle">&nbsp;</td>
				<td width="83" align="center" valign="middle">Buscar</td>
				<td width="154" align="center" valign="middle" id="Buscar"><label for="buscar"></label>
					<input type="text" name="buscar" id="buscar" /></td>
				<td width="237" align="center" valign="middle"><input type="submit" name="Aceitar" id="Aceitar" value="Buscar" /></td>
			</tr>
			<tr>
				<td colspan="8" align="center" valign="middle">Lista de Produtos</td>
			</tr>

			<tr>
				<td align="center" valign="middle" bgcolor="#999899">ID</td>
				<td align="center" valign="middle" bgcolor="#999899">IMAGEM</td>
				<td align="center" valign="middle" bgcolor="#999899">NOME</td>
				<td align="center" valign="middle" bgcolor="#999899">DESCRIÇÃO</td>
				<td align="center" valign="middle" bgcolor="#999899">PREÇO</td>
				<td align="center" valign="middle" bgcolor="#999899">QUANTIDADE</td>
				<td align="center" valign="middle" bgcolor="#999899">DATA</td>
				<td align="center" valign="middle" bgcolor="#999899">ADICIONAR</td>
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
				//$adicionar = '<a href="carrinho.php?id='.$linha['id'].'"title="'.$linha['id'].'"> Adicionar </a>';
			?>

				<tr>
					<td align="center" valign="middle"><?php echo $id ?></td>
					<td align="center" valign="middle"><img src="<?php echo $imagem ?>" width="50" height="50"></td>
					<td align="center" valign="middle"><?php echo $nome; ?></td>
					<td align="center" valign="middle"><?php echo $desc; ?></td>
					<td align="center" valign="middle"><?php echo $preco; ?></td>
					<td align="center" valign="middle"><?php echo $quant; ?></td>
					<td align="center" valign="middle"><?php echo $data; ?></td>
					<td align="center" valign="middle">
						<form action="carrinho.php" method="post" name="comprar">
							<input name="id_txt" type="hidden" value="<?php echo $id ?>" />
							<input name="nome" type="hidden" value="<?php echo $nome ?>" />
							<input name="preco" type="hidden" value="<?php echo $preco ?>" />
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
=======
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./principal.php">Produtos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Como comprar?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Youtube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Promoções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contatos</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <a class="btn btn-outline-primary" href="#">Sign up</a>

        </div>
    </nav>
</header>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</body>

<footer>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">Gabriel B Souza - Developer</a>
    </div>
    <!-- Copyright -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</footer>
>>>>>>> 2d16a2a2b5757893497fac4ad4493c6e83957705

</html>