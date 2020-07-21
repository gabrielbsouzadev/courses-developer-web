    <?php
    
        if (isset($_POST) && $_POST) {
            $nome = $_POST["inputNome"];
            $email = $_POST["inputEmail"];
            $telefone = $_POST["inputTelefone"];
            $endereco1 = $_POST["inputEndereco1"];
            $cidade = $_POST["inputCidade"];
            $estado = $_POST["inputEstado"];
            $cep = $_POST["inputCep"];
            $msg = $_POST["inputMensagem"];
            $contatoRadio = $_POST["inputContatoRadio"];
            
            //criando array de novo cliente
            $novoCliente = [
                'nome' => $nome,
                'email' => $email,
                'telefone' => $telefone,
                'endereco1' => $endereco1,
                'cidade' => $cidade,
                'estado' => $estado,
                'cep' => $cep,
                'msg' => $msg,
                'contatoRadio' => $contatoRadio
            ];

            /*
            echo "<pre>";
                var_dump($novoCliente);
            echo "</pre>";die;
            */

            //obtendo conteudo do arquivo clientes.json
            $clientes = file_get_contents('./data/clientes.json');

            //transformando o conteudo do arquivo clientes.json em um array
            $arrayClientes = json_decode($clientes, true);

            //adicionando novo cliente no array de usuarios
            array_push($arrayClientes["clientes"], $novoCliente);

            $jSonClientes = json_encode($arrayClientes);

            $agendou = file_put_contents('./data/clientes.json', $jSonClientes);

            if ($agendou){
                echo '<div class="alert alert-success">Cliente agendou com sucesso</div>';
            } else {
                echo '<div class="alert alert-danger">Falha ao processar a requisicao</div>';
            }
        }
        
    ?>
    
    <?php
        require_once("./inc/head.php");
    ?>

    <body>
        <?php
            require_once("./inc/header.php");
        ?>

        <main class="container">

            <form action="" method="POST">
                <label for="nome">Nome e sobrenome</label>
                <input type="text" id="nome" name="inputNome" class="input-padrao" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="inputEmail" class="input-padrao" required placeholder="seuemail@dominio.com">

                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="inputTelefone" class="input-padrao" required placeholder="(xx) x xxxx-xxxx">

                <label for="nome">Endereço</label>
                <input type="text" id="endereco1" name="inputEndereco1" class="input-padrao" required>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Cidade</label>
                        <input type="text" id="cidade" name="inputCidade" class="input-padrao" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estado">UF</label>
                        <select id="estado" class="input-padrao" name="inputEstado">
                            <option selected disabled>UF</option>
                            <!-- UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->
                            <?php foreach($ufs as $uf): ?>
                                <option><?= $uf; ?></option>
                            <?php endforeach; ?>
                            <!-- /UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <input type="text" class="input-padrao" id="cep" name="inputCep" placeholder="12345-678">
                </div>

                <label for="mensagem">Mensagem</label>
                <textarea cols="70" rows="10" id="mensagem" name="inputMensagem" class="input-padrao" required></textarea>

                <fieldset>
                    <legend>Como prefere o nosso contato?</legend>
                    <label for="radio-email"><input type="radio" name="inputContatoRadio" value="email" id="radio-email">Email</label>
                    
                    <label for="radio-telefone"><input type="radio" name="inputContatoRadio" value="telefone" id="radio-telefone">Telefone</label>
                    
                    <label for="radio-whatsapp"><input type="radio" name="inputContatoRadio" value="whatsapp" id="radio-whatsapp" checked >Whatsapp</label>
                </fieldset>

                <fieldset>
                    <legend>Qual horário prefere ser atendido?</legend>
                    <select>
                        <option>Manhã</option>
                        <option>Tarde</option>
                        <option>Noite</option>
                    </select>
                </fieldset>

                <table>
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            <td>Quinta-Feria</td>
                            <td>7h ~ 20h</td>
                        </tr>
                        <tr>
                            <td>Sexta-Feira</td>
                            <td>7h ~ 20h</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>7h ~ 20h</td>
                        </tr>
                    </tbody>
                </table>

                <label class="checkbox"><input type="checkbox" checked >Gostaria de receber nossas novidades por email?</label>
                <input type="submit" value="Enviar Formulário" class="enviar">
            </form>
            
        </main>
        <?php
            require_once("./inc/footer.php");
        ?>
    </body>
</html>