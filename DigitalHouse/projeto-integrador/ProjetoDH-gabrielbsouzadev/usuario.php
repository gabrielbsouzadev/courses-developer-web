<?php
$tituloPagina = "Detalhes do Usuário";
require_once("./inc/head.php");
require_once("./inc/header.php");
require("./utils/usuario.php");
?>
<main class="container">
    <article class="row">
        <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="usuario">
                

            <?php
            
            // var_dump($usuarioEncontrado[0]);die;

            // AGORA SIM QUE TEMOS O $usuarioEncontrado CONSEGUIMOS ACESSAR SUAS PROPRIEDADES
            (isset($usuarioEncontrado) && $usuarioEncontrado && isset($_REQUEST) && isset($_REQUEST["editar"]) && $_REQUEST["editar"] === "editar")  ?>
                <form action="usuarios.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="color: black" for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required value="<?= $usuarioEncontrado["nome"] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label style="color: black" for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required value="<?= $usuarioEncontrado["sobrenome"] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="color: black" for="emailCadastrado">email</label>
                            <input type="email" class="form-control" id="emailCadastrado" name="emailCadastrado" disabled value="<?= $usuarioEncontrado["email"] ?>">
                            <input type="hidden" class="form-control" id="email" name="email" required value="<?= $usuarioEncontrado["email"] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label style="color: black" for="senha">Senha (preencha a atual ou uma nova - obrigatório)</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label style="color: black" class="form-check-label" for="gridCheck">
                                Concordo com os termos
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="editarUsuario" value="editarUsuario">
                    <button type="submit" class="btn btn-primary float-right" id="btnAtualizar">Atualizar</button>
                </form>
            <?php ?>
        </section>
    </article>
</main>
<?php require_once("./inc/footer.php"); ?>