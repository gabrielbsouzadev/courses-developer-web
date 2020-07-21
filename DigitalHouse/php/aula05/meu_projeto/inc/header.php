        <header>
            <div class="caixa">
                <h1><img src="img/logo.png"></h1>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                        <li><a href="contato.php">Contato</a></li>

                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="./usuarios.php">Usuários</a>
                        </li>
                        -->

                        <?php

                        // Verificando se há sessão e se temos o usuário logado:
                        if (isset($_SESSION["usuarioLogado"]) && $_SESSION["usuarioLogado"] === true) :

                        ?>
                            <!-- Menu exibido para usuários logados -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menuUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> <?= $_SESSION["usuarioNome"] ?> | Editar Perfil
                                </a>
                                <div class="dropdown-menu" aria-labelledby="menuUsuario">
                                    <a class="dropdown-item" disabled href="./perfil.php" tabindex="-1" aria-disabled="true">Editar Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./utils/logout.php">Logout</a>
                                </div>
                            </li>
                            <!-- /Menu exibido para usuários logados -->

                        <?php else : ?>

                            <!-- Menu exibido para usuários não logados -->
                            <li class="nav-item">
                                <a class="nav-link" href="./cadastro.php">Cadastre-se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php">Login</a>
                            </li>
                            <!-- /Menu exibido para usuários não logados -->

                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>