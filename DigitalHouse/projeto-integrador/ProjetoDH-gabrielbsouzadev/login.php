<?php

// Validacao de login sem usar funcao

if (isset($_POST) && $_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $logado = false;

    //obtendo o conteudo do arquivo usuarios.json
    $usuarios = file_get_contents('./data/usuarios.json');

    //transformando o conteudo do arquivo usuarios.json em um array
    $arrayUsuarios = json_decode($usuarios, true); //Quando TRUE, o object retornado será convertido em array associativo.

    // Percorrendo o array que contem a lista de usuarios
    foreach ($arrayUsuarios["usuarios"] as $usuario) {

        if ($email == $usuario["email"]) {
            if (password_verify($senha, $usuario["senha"])) {

                $logado = true;

                //iniciando a sessao caso usuario tenha informado o usuario e senha corretos
                session_start();
                $_SESSION['logado'] = $logado;
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                // redirecionando para a pagina principal com o usuario logado
                header("Location: index.php");
            }
        }
    }
}

?>

<?php $tituloPagina = "Formulário de Login"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <article class="row">
        <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
            <form action="login.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btnCadastrar">Entrar</button>
                <div class="form-group">
                    <?php
                    if (isset($_POST) && $_POST) {
                        if (!$logado) {
                            echo '<div class="col-md-6 mt-2 alert alert-danger">Usuário ou senha inválidos</div>';
                        }
                    }
                    ?>
                </div>
            </form>
        </section>
    </article>
</main>
<?php require_once("./inc/footer.php"); ?>