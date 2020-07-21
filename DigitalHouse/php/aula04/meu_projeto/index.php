    <?php
        require_once("./inc/head.php");
    ?>

    <body>

        <?php
            require_once("./inc/header.php");
        ?>

        <img class="banner" src="img/banner.jpg">

        <main>
            <section class="principal">
                <h2 class="titulo-principal">Sobre a Barbearia Alura</h2>
                <img class="utensilios" src="img/utensilios.jpg" alt="Utensilios de um barbeiro">
                <p>Localizada no coração da cidade a <Strong>Barbearia Alura</Strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia Alura já é destaque na cidade e conquista novos clientes a cada dia.</p>
                <p id="missao"><em>Nossa missão é: <strong>"Proporcionar auto-estima e qualidade de vida aos clientes"</strong></em></p>
                <p>Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.
                </p>
            </section>

            <section class="mapa">
                <h3 class="titulo-principal">Nosso Estabelecimento</h3>
                <p>Nosso estabelecimento está localizado no coração da cidade</p>
                
                <div class="mapa-conteudo">
                    <iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.6217508003883!2d-46.66772279999998!3d-23.582024699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59e111f106ed%3A0x2478f54a6a1c3f73!2sJassa%20Cabeleireiros!5e0!3m2!1spt-BR!2sbr!4v1581641940799!5m2!1spt-BR!2sbr"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </section>

            <section class="beneficios">
                <h3 class="titulo-principal">Beneficios</h3>

                <div class="conteudo-beneficios">
                    <ul class="lista-beneficios">
                        <li class="itens">Atendimento aos clientes</li>
                        <li class="itens">Espaço diferenciado</li>
                        <li class="itens">Localização</li>
                        <li class="itens">Profissionais Qualificados</li>
                        <li class="itens">Pontualidade</li>
                        <li class="itens">Limpeza</li>
                    </ul><img src="img/beneficios.jpg" class="imagem-beneficios">
                </div>

                <div class="video">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/wcVVXUV0YUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
        </main>

        <?php
            require_once("./inc/footer.php");
        ?>

    </body>