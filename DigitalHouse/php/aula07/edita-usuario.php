<?php

    // seleciona o usuario
    if (isset($_GET) && $_GET && $_GET["id"]) {

        // obtendo conteudo do arquivo usuarios.json
        $usuarios = file_get_contents('./data/usuarios.json');

        // transformando o conteudo do arquivo usuarios.json em um array
        $arrayUsuarios = json_decode($usuarios, true);

        $usuarioEncontrado = [];
        
        // Percorrendo o array que contem a lista de usuarios
        foreach ($arrayUsuarios["usuarios"] as $usuario) {
        
            if($usuario["id"] == $_GET["id"]){
                array_push($usuarioEncontrado, $usuario);
            }
            
        }

    }

    if(isset($_POST) && $_POST){

        // recebendo as informacoes enviadas atraves do formulario 
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // obtendo conteudo do arquivo usuarios.json
        $usuarios = file_get_contents('./data/usuarios.json');

        // transformando o conteudo do arquivo usuarios.json em um array
        $arrayUsuarios = json_decode($usuarios, true);
    
        // Percorrendo o array que contem a lista de usuarios
        foreach ($arrayUsuarios["usuarios"] as $chave => $usuario) {

            // verificando se encontramos o usuario apra fazer as alteracoes
            if($usuario["id"] == $id){
                
                $arrayUsuarios["usuarios"][$chave]["nome"] = $nome;
                $arrayUsuarios["usuarios"][$chave]["sobrenome"] = $sobrenome;
                $arrayUsuarios["usuarios"][$chave]["email"] = $email;

                // se o usuario nao enviar nada nao iremos alterar a senha
                // se o usuario enviar algo criptografamos a senha e efetuamos a alteracao
                if($senha != ""){
                    $arrayUsuarios["usuarios"][$chave]["senha"] = password_hash($senha, PASSWORD_DEFAULT);
                } 

                // else {
                //     echo "A senha permanesse igual";
                // }

            }
            
        }

        $jsonUsuarios = json_encode($arrayUsuarios);

        $alterou = file_put_contents('./data/usuarios.json', $jsonUsuarios);
        
    }
    
?>

<?php $tituloPagina = "Formulário de Alteração de Cadastro"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="edita-usuario.php" method="post">
                    <input type="hidden" class="form-control" id="id" name="id" 
                    value="<?= isset($_GET["id"]) ? $_GET["id"] : $_POST["id"]  ?>" required>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["nome"] : $_POST["nome"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["sobrenome"] : $_POST["sobrenome"] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["email"] : $_POST["email"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>                                             
                            <input type="password" class="form-control" id="senha" name="senha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if($alterou){
                                    echo '<div class=" col-md-6 mt-2 alert alert-success">Usuário alterado com sucesso</div>';
                                } else {
                                    echo '<div class="col-md-6 mt-2 alert alert-danger">Falha ao processar requisição</div>';
                                }
                            }
                        ?>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>