<?php

    if (isset($_POST) && $_POST) {
        $nome = $_POST["inputNome"];
        $email = $_POST["inputEmail"];
        $telefone = $_POST["inputTelefone"];
        $senha = $_POST["inputSenha"];

        //criando array de novo cliente
        $novoUsuario = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'senha' => $senha
        ];
    }

    //Obtendo o conteudo do arquivo usuarios.json
    $usuarios = file_get_contents('./data/usuarios.json');

    //transformando o conteudo do arquivo usuarios,json
    $arrayUsuarios = json_decode($usuarios, true);


    //adicionando novo usuario no array de usuarios
    array_push($arrayUsuarios["usuarios"], $novoUsuario);

    $jSonUsuarios = json_encode($arrayUsuarios);

    $cadastrou = file_put_contents('./data/usuarios.json', $jSonUsuarios);

    if ($cadastrou){
        echo '<div class="alert alert-success">Cliente cadastrou com sucesso</div>';
    } else {
        echo '<div class="alert alert-danger">Falha ao processar a requisicao</div>';
    }


?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
                <form action="" method="POST">
                    <label for="nome">Nome e sobrenome</label>
                    <input type="text" id="nome" name="inputNome" class="input-padrao" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="inputEmail" class="input-padrao" required placeholder="seuemail@dominio.com">

                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="inputTelefone" class="input-padrao" required placeholder="(xx) x xxxx-xxxx">

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="inputSenha" class="input-padrao" required>

                    <label class="checkbox"><input type="checkbox">Concordo com os termos</label>
                    <input type="submit" value="Enviar Formulário" class="enviar">
                </form>
            </section>
        </article>
    </main>
<?php require_once("./inc/footer.php"); ?>