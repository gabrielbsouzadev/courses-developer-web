<?php
$tituloDaPagina = "Métodos | PHP - Aula 02";
require_once("./inc/head.php");
?>

<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container my-5">
        <?php if ($_POST && isset($_POST)) : ?>

            <?php


            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";
            // die;

            $nome = $_POST["inputNome"];
            $email = $_POST["inputEmail"];
            $telefone = $_POST["inputTelefone"];
            $endereco1 = $_POST["inputEndereco1"];
            $cidade = $_POST["inputCidade"];
            $estado = $_POST["inputEstado"];
            $cep = $_POST["inputCep"];
            $msg = $_POST["inputMensagem"];
            $contatoRadio = $_POST["inputContatoRadio"];

            //echo Exit;


            ?>

            <article>
                <h2>Respostas Recebidas por POST:</h2>
                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col" colspan="2">Endereço</th>
                            <th scope="col">Cidade - UF</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Tipo de Contato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DESAFIO: INCLUA CADA UM DOS CAMPOS UTILIZANDO O QUE JÁ APRENDEMOS EM PHP -->
                        <tr>
                            <th scope="row"><?php echo $nome ?></th>
                            <td><?php echo $email ?></td>
                            <td><?php echo $telefone ?></td>
                            <td colspan="2"><?php echo $endereco1 ?></td>
                            <td><?php echo $cidade . " - " .  $estado ?></td>
                            <td><?php echo $cep ?></td>
                            <td><?php echo $msg ?></td>
                            <td><?php echo $contatoRadio ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>

        <?php elseif ($_GET && isset($_GET)) : ?>

            <?php

            /*
                echo "<pre>";
                    var_dump($_POST);
                echo "</pre>";
            */

            $nome = $_GET["inputNome"];
            $email = $_GET["inputEmail"];
            $telefone = $_GET["inputTelefone"];
            $endereco1 = $_GET["inputEndereco1"];
            $cidade = $_GET["inputCidade"];
            $estado = $_GET["inputEstado"];
            $cep = $_GET["inputCep"];
            $msg = $_GET["inputMensagem"];
            $contatoRadio = $_GET["inputContatoRadio"];

            ?>

            <article>
                <h2>Respostas Recebidas por GET:</h2>

                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col" colspan="2">Endereço</th>
                            <th scope="col">Cidade - UF</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Tipo de Contato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DESAFIO: INCLUA CADA UM DOS CAMPOS UTILIZANDO O QUE JÁ APRENDEMOS EM PHP -->
                        <tr>
                            <th scope="row"><?php echo $nome ?></th>
                            <td><?php echo $email ?></td>
                            <td><?php echo $telefone ?></td>
                            <td colspan="2"><?php echo $endereco1 ?></td>
                            <td><?php echo $cidade . " - " .  $estado ?></td>
                            <td><?php echo $cep ?></td>
                            <td><?php echo $msg ?></td>
                            <td><?php echo $contatoRadio ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>

        <?php else : ?>

            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário <a href="11-metodo-GET.php" title="Acessar o Formulário GET" rel="next">GET</a> ou o formulário <a href="11-metodo-POST.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br />deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php endif; ?>
    </main>
    <?php require_once("./inc/footer.php"); ?>
</body>

</html>