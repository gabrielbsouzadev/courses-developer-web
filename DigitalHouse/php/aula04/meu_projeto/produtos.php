    <?php
        require_once("./inc/head.php")
    ?>
    <body>
        <?php
            require_once("./inc/header.php");
        ?>
        <main>
            <ul class="produtos">
                <li>
                    <h2>Cabelo</h2>
                    <img src="img/cabelo.jpg">
                    <p class="produto-descricao">Corte na tesoura ou máquina, preferência do cliente.</p>
                    <p class="produto-preco">R$ 25,00</p>
                </li>
                <li>
                    <h2>Barba</h2>
                    <img src="img/barba.jpg">
                    <p class="produto-descricao">Corte e desenho profissional de barba.</p>
                    <p class="produto-preco">R$ 18,00</p>
                </li>
                <li>
                    <h2>Cabelo + Barba</h2>
                    <img src="img/cabelo+barba.jpg">
                    <p class="produto-descricao">Pacote completo de cabelo e barba.</p>
                    <p class="produto-preco">R$ 35,00</p>
                </li>
            </ul>
        </main>

        <?php
            require_once("./inc/footer.php");
        ?>
    </body>
</html>
