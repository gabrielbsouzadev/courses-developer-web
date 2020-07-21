<?php
require_once('./inc/head.php');
require_once('./inc/header.php');
?>

<body>

    <main>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="d-table carousel-item active">
                    <img class="d-block w-100" src="./assets/img/bg-01.jpeg" alt="First slide">
                </div>
            </div>
        </div>


        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="d-table carousel-item active">
                    <img src="./assets/img/bg-01.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="d-table carousel-item">
                    <img src="./assets/img/bg-01.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="d-table carousel-item">
                    <img src="./assets/img/bg-01.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div> 
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->

        <article id="nossosProdutos" class="card-deck mx-3">
            <h2 class="subtitulo my-3">Nossos Produtos</h2>
            <div class="card container" style="width: 17rem;">
                <img src="./assets/img/oculos-sol.png" class="container w-75 card-img-top" width="360px" height="300px" alt="meu card">
                <div class="card-body">
                    <h3 class="card-title">Oculos de sol</h3>
                    <p class="card-text">Some quick example text to build on the Product title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                </div>
            </div>
            <div class="card container" style="width: 18rem;">
                <img src="./assets/img/oculos-armacao.png" class="container w-75 card-img-top" width="360px" height="300px" alt="meu card">
                <div class="card-body">
                    <h3 class="card-title">Armação</h3>
                    <p class="card-text">Some quick example text to build on the Product title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                </div>
            </div>
            <div class="card container" style="width: 18rem;">
                <img src="./assets/img/oculos-lente.png" class="container w-75 card-img-top" width="360px" height="300px" alt="meu card">
                <div class="card-body">
                    <h3 class="card-title">Lentes</h3>
                    <p class="card-text">Some quick example text to build on the Product title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                </div>
            </div>
        </article>
        <!-- ATALHO DO EMMET ABAIXO -->
        <!-- article.container>div.row>(section.col-3)*4 -->
        <article id="exemploGridBootstrap" class="container my-5 bg-secondary">
            <div class="row">
                <section class="col-3 col-sm-6 col-md-9 col-lg-2 col-xl-5 bg-primary">COL-3</section>
                <section class="col-3 col-sm-3 col-md-1 col-lg-2 col-xl-3 bg-alert">COL-3</section>
                <section class="col-6 col-sm-3 col-md-2 col-lg-8 col-xl-4 bg-info">COL-6</section>
            </div>
        </article>
        <article id="containerForm" class="container border mt-5">
            <form action="metodos.php" method="POST">
                <input type="hidden" value="promo01">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="inputNome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" name="inputSobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" name="inputEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTel">Telefone(Celular)</label>
                        <input class="form-control" type="tel" value="(55)55555-5555" name="inputTel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEndereco">Endereço</label>
                    <input type="text" class="form-control" name="inputEndereco" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" name="inputCidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <label for="estado">UF</label>
                        <select class="form-control" name="inputEstado">
                            <option selected disabled>UF</option>
                            <!-- UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->
                            <?php foreach ($ufs as $uf) {
                                echo "<option> $uf </option>";
                            } ?>
                            <!-- /UM LOOP FOREACH DE BRINDE PARA VOCÊS! -->
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Cep</label>
                        <input type="text" class="form-control" name="inputCep">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputReceita">Envie sua receita</label>
                        <input type="file" class="form-control" name="inputReceita">

                    </div>
                    <button type="submit" class="btn btn-primary float-right ml-0 mr-5 mt-4 mb-3 col-md-2">Enviar</button>
                    <!--                         
                    <button type="reset" class="btn btn-secondary float-right ml-2 mt-4 mb-3">Limpar</button>
                    <button type="" class="btn btn-danger float-right ml-2 mt-4 mb-3 col-md-1" data-toggle="modal" data-target="#confirmarExclusao">Excluir</button>
                    -->
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Mantenha conectado
                        </label>
                    </div>
                </div>

            </form>
        </article>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="confirmarExclusao" tabindex="-1" role="dialog" aria-labelledby="confirmarExclusaoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarExclusaoLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam at eaque ratione cupiditate corrupti
                    voluptatum laboriosam, qui quis expedita labore nisi tempora non quia sunt perferendis. Officia
                    ipsum fugit mollitia!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once('./inc/footer.php') ?>

</html>


<!--
    <article id="containerForm">
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" required autofocus autocomplete="" placeholder="preencha seu nome">
            <label for="emailId">E-mail</label>
            <input type="email" name="emailInput" id="emailId" placeholder="email@gmail.com">
            <label for="senha"></label>
            <input type="password" name="senhaInput" id="senha" placeholder="valor minimo de 6 caracteres">

            <label for="idade">Idade</label>
            <input type="number" name="" id="">


            <label for="nascimento">Data de Nascimento</label>
            <input type="date" name="nascimentoInput" id="nascimento">
            <label for="cor">Cor Favorita</label>
            <input type="color" name="corInput" id="cor">

            <label for="mensagem">Mensagem</label>
            <textarea name="mensagemInput" id="mensagem" cols="30" rows="10"></textarea>

            <button type="submit">Enviar</button>
            <button type="reset">limpar</button>
            </form>
    </article>
-->