   <?php
    if (!isset($_SESSION)) {
      session_start();
    }
    if ($_SESSION) {
      $id = $_SESSION["id"];
      $nome = $_SESSION["nome"];
    }
    ?>
   <!--Inicio do NAV MENU-->
   <header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="../ProjetoDH/index.php">Home</a>
       <h3>| </h3>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           <li class="nav-item">
             <a class="nav-link active" href="../ProjetoDH/produtos.php"> Produtos</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="../ProjetoDH/quem-somos.php">Quem somos</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="../ProjetoDH/contato.php">Contato</a>
           </li>

           <!-- Menu exibido para usuario logado -->
           <?php if ($_SESSION) : ?>
             <li class="nav-item">
               <a class="nav-link" href="">Olá, <?= $nome; ?></a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="./usuario.php">Editar Perfil</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="./logout.php">Sair <span class="sr-only">(current)</span></a>
             </li>
           <?php else : ?>

             <!--Menu exibido para Usuario nao logados -->
             <li class="nav-item active">
               <a class="nav-link" href="./cadastro.php">Cadastre-se <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="./login.php">Login</a>
             </li>

           <?php endif; ?>

         </ul>
         <!--Botão de login-->
         <form class="form-inline my-2 my-lg-0">
           <button class="btn my-2 my-sm-0" type="button"><img src="../ProjetoDH/css/img/header/login.png" height="35" width="35" alt="botão de LogIn" data-toggle="modal" data-target="#exampleModal"></button>

           <!--Botões do carrinho de compra-->
           <button class="btn my-2 my-sm-0" type="submit"><img src="../ProjetoDH/css/img/header/carrinho.png" height="35" width="35" alt="botão do carrinho"></button>
         </form>
       </div>
     </nav>
   </header>