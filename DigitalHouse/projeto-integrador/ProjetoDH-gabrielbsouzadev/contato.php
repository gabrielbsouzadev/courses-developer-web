 <!-- Inclusão HEAD--> 
 <?php
  require_once("./inc/head.php");
 ?>
  <!-- Inclusão HEADER--> 

 <?php
  require_once("./inc/header.php");
 ?>

    <!--Inicio do MAIN-->
    <main>
    <!--Inicio do Formulário-->
    <h2 class="titulosETextos">Contate-nos</h2>
    <form class="container">
      <div class="form-group mt-2 sm-col-12 h-50">
        <label for="exampleFormControlInput1">Nome</label>
        <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Insira seu nome" required>
        <label for="exampleFormControlInput1 ">Assunto</label>
        <input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Sobre o que deseja conversar">
        <label for="exampleFormControlInput1">Telefone</label>
        <input type="tel" class="form-control mb-2" id="exampleFormControlInput1" placeholder="(11)9.9999-9999" required>
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control mb-2" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Escreva:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button id="sendButton"type="submit" class="btn btn-lg mb-2 float-right border-light">Enviar</button>
    </form>

        <!--Div's só pra criar espaço e o footer não esconder o botão enviar.-->
        <div class="invisible alert alert-light my-5" role="alert">.</div>
        <div class="invisible alert alert-light my-5" role="alert">.</div>



    </main>

  
 <!-- Inclusão FOOTER--> 
 <?php 
  require_once("./inc/footer.php");
?>
