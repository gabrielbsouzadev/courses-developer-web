<?php

if (isset($_POST) && $_POST) {

    //recebendo as informacoes enviadas atraves do formulario
    //var_dump($_POST);die; // Verifica os dados de array enviados por pelo formulario
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    //$telefone = $_POST["telefone"]; //Se precisar colocar o campo de telefone
    $senha = $_POST["senha"];
    //echo "$nome - $sobrenome - $email - $senha"; //Campos que foram enviados

    //pegando o id do ultimo usuario para acrescentar mais 1 ao id do usuario novo que sera inserido

    //obtendo conteudo do arquivo usuarios.json
    $usuarios = file_get_contents('./data/usuarios.json'); //Lê todo o conteúdo de um arquivo para uma string

    //transformando o conteudo do arquivo usuarios.json em um array
    $arrayUsuarios = json_decode($usuarios, true); {

        foreach ($arrayUsuarios["usuarios"] as $usuario) {

            if ($email == $usuario["email"]) {
                
                // redirecionando para a lista de usuarios
                echo '<div class="alert alert-danger">Falha ao processar a requisicao, o e-mail cadastrado ja existe</div>';

                return;
            }
        }
    }

    //if (!checkUser($arrayUsuarios, $email)) {

    // pegando o usuario que esta na última posição do array
    $ultimoUsuario = end($arrayUsuarios["usuarios"]);

    //pegando o id do ultimo usuario para incrementar no momento de inserir um novo usuario
    $idUltimoUsuario = $ultimoUsuario["id"];

    // criando array de novo usuario
    $novoUsuario = [
        'id' => $idUltimoUsuario + 1,
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'email' => $email,
        //'telefone' => $telefone,
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ];

    //adicionando novo usuario no array de usuarios
    array_push($arrayUsuarios["usuarios"], $novoUsuario); //array_push — Adiciona um ou mais elementos no final de um array

    //echo "<pre>"
    //var_dump($arrayUsuarios["usuarios"]);die;
    //echo "</pre>"

    $jsonUsuarios = json_encode($arrayUsuarios);

    //echo "<pre>";
    //var_dump($jsonUsuarios);
    //echo "</pre>";die;

    $cadastrou = file_put_contents('./data/usuarios.json', $jsonUsuarios); //file_put_contents — Escreve uma string para um arquivo
    //}


    // function checkUser($arrayUsuarios, $email)
    // {

    //     $uSuarioExiste = false;

    //     foreach ($arrayUsuarios["usuarios"] as $usuario) {

    //         if ($email == $usuario["email"]) {

    //                 $uSuarioExiste = true;

    //         }
    //     }

    // return($uSuarioExiste);

    // }

}

?>

<?php $tituloPagina = "Formulário de Cadastro"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <article class="row">
        <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
            <form action="cadastro.php" method="post">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= isset($_GET["id"]) ? $_GET["id"] : $_POST["id"]  ?>" required>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                    </div>
                </div>
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
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Concordo com os termos
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right" id="btnCadastrar">Cadastrar</button>

                <?php

                if (isset($_POST) && $_POST) {

                    if (isset($cadastrou) && $cadastrou) {
                        echo '<div class="alert alert-success">Seu cadastro foi realizado com sucesso</div>';
                    } else {
                        echo '<div class="alert alert-danger">Falha ao processar a requisicao</div>';
                    }
                }

                ?>

            </form>
        </section>
    </article>
</main>
<?php require_once("./inc/footer.php"); ?>