    <?php
        require_once("./inc/head.php");
    ?>

    <body>
        <?php
            require_once("./inc/header.php");
        ?>

        <main class="container">
            
            <form action="metodos.php" method="POST">
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
            
            <!--
            <form action="metodos.php" method="POST" class="col-6 mx-auto border rounded bg-light p-4">
                <div class="form-row">
                    <h3 class="text-center pt-2 pb-0">Formulário de Cadastro POST</h3>
                    <p class="pt-0 pb-4">Preencha o formulário e entenda o método POST</p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="inputNome" placeholder="Fulano da Silva" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="inputEmail" placeholder="fulano@dasilva.com" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="inputSenha" placeholder="*******" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="endereco1">Endereço</label>
                    <input type="text" class="form-control" id="endereco1" name="inputEndereco1" placeholder="Rua Cardoso de Melo, 123">
                </div>
                <div class="form-group">
                    <label for="endereco2">Endereço 2</label>
                    <input type="text" class="form-control" id="endereco2" name="inputEndereco2" placeholder="Bloco A, Andar 1, Sala 12">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="inputCidade">
                    </div>
                        <div class="form-group col-md-2">
                        <label for="estado">UF</label>
                        <select id="estado" class="form-control" name="inputEstado">
                            <option selected disabled>UF</option>
                -->

                            <!-- UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->
                            <?php // foreach($ufs as $uf): ?>

                                <!--<option><? // $uf; ?></option> -->

                            <?php //endforeach ?>
                            <!-- /UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->

                    <!--
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="inputCep" placeholder="12345-678">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aceite" name="inputAceite">
                        <label class="form-check-label" for="aceite">
                            Estou de acordo com os termos e políticas do site
                        </label>
                    </div>
                </div>
                <div class="form-group mt-4 mb-0 d-flex flex-row justify-content-end">
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                    <button type="submit" class="btn btn-primary ml-2">Cadastrar</button>
                </div>
            </form>
            -->
        </main>
        <?php
            require_once("./inc/footer.php");
        ?>
    </body>
</html>