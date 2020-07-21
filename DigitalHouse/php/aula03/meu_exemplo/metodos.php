<?php
require_once('./inc/head.php');
require_once('./inc/header.php');
?>

<Body>
    <main>
        <?php if ($_POST && isset($_POST)) { ?>

            <?php

            // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>"; die;

            /*
            array(9) {
                ["inputNome"]=>
                string(15) "Gabriel Bezerra"
                ["inputSobrenome"]=>
                string(5) "Souza"
                ["inputEmail"]=>
                string(26) "gabrielbsouzadev@gmail.com"
                ["inputTel"]=>
                string(14) "+5511959235700"
                ["inputEndereco"]=>
                string(29) "Av Mininstro Petronio Portela"
                ["inputCidade"]=>
                string(10) "São Paulo"
                ["inputEstado"]=>
                string(2) "SP"
                ["inputCep"]=>
                string(7) "0282120"
                ["inputReceita"]=>
                string(18) "logo-optometry.png"
            }
            */

            $nome  = $_POST["inputNome"];
            $sobrenome = $_POST["inputSobrenome"];
            $email = $_POST["inputEmail"];
            $telefone = $_POST["inputTel"];
            $endereco = $_POST["inputEndereco"];
            $cidade = $_POST["inputCidade"];
            $estado = $_POST["inputEstado"];
            $cep = $_POST["inputCep"];
            $receita = $_POST["inputReceita"];

            ?>

            <article>
                <h2>Respostas Recebidas por POST:</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Uf</th>
                            <th scope="col">Cep</th>
                            <th scope="col">Receita</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $nome ?></td>
                            <td><?= $sobrenome ?></td>
                            <td><?= $email ?></td>
                            <td><?= $telefone ?></td>
                            <td><?= $endereco ?></td>
                            <td><?= $cidade ?></td>
                            <td><?= $estado ?></td>
                            <td><?= $cep ?></td>
                            <td><?= $receita ?></td>
                        <tr>
                    </tbody>
                </table>
            </article>

        <?php } elseif ($_GET && isset($_GET)) { ?>

            <?php
            // echo "<pre>";
            // var_dump($_GET);
            // echo "</pre>"; die;

            /*
            array(9) {
                ["inputNome"]=>
                string(15) "Gabriel Bezerra"
                ["inputSobrenome"]=>
                string(5) "Souza"
                ["inputEmail"]=>
                string(26) "gabrielbsouzadev@gmail.com"
                ["inputTel"]=>
                string(14) "+5511959235700"
                ["inputEndereco"]=>
                string(29) "Av Mininstro Petronio Portela"
                ["inputCidade"]=>
                string(10) "São Paulo"
                ["inputEstado"]=>
                string(2) "SP"
                ["inputCep"]=>
                string(7) "0282120"
                ["inputReceita"]=>
                string(18) "logo-optometry.png"
            }
            */

            $nome  = $_GET["inputNome"];
            $sobrenome = $_GET["inputSobrenome"];
            $email = $_GET["inputEmail"];
            $telefone = $_GET["inputTel"];
            $endereco = $_GET["inputEndereco"];
            $cidade = $_GET["inputCidade"];
            $estado = $_GET["inputEstado"];
            $cep = $_GET["inputCep"];
            $receita = $_GET["inputReceita"];

            ?>

            <article>
                <h2>Respostas Recebidas por GET:</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Uf</th>
                            <th scope="col">Cep</th>
                            <th scope="col">Receita</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $nome ?></td>
                            <td><?= $sobrenome ?></td>
                            <td><?= $email ?></td>
                            <td><?= $telefone ?></td>
                            <td><?= $endereco ?></td>
                            <td><?= $cidade ?></td>
                            <td><?= $estado ?></td>
                            <td><?= $cep ?></td>
                            <td><?= $receita ?></td>
                        <tr>
                    </tbody>
                </table>
            </article>
        
        <?php } else { ?>

            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário <a href="11-metodo-GET.php" title="Acessar o Formulário GET" rel="next">GET</a> ou o formulário <a href="11-metodo-POST.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br />deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php } ?>
    </main>
</Body>

<?php
require_once('./inc/footer.php')
?>