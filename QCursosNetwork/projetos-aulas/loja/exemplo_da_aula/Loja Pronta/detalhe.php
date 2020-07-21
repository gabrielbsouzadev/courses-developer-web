<?php
include ('conexao.php');
$consulta = mysqli_query($conexao, "select * from produtos where id=".$_POST['id']);
?>

<?php include ('modelo/head.php'); ?>

<p>
<div class="conteudo">
<?php

 while($linha=mysqli_fetch_array($consulta)){
	  $id = $linha['id'];
	  $imagem = $linha['imagem'];
	  $nome = $linha['nome'];
	  $desc = $linha['descricao'];
	  $preco = $linha['preco'];
	  $quant = $linha['quantidade'];
	  $data = $linha['data'];
 
?>

<div class="caixa2">
<h2> <?php echo $nome ?> </h2>
<img src="<?php echo $imagem ?>" width="200" />
<p> R$<?php echo $preco ?> </p>
 <!--<a href="..\carrinho.php"> <img src="imagens\colocarcarrinho.png" width="160" height="40" id="produtos"> </a>
 -->

<form action="carrinho.php" method="post" name="comprar">
    
    <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
    <input name="nome" type="hidden" value="<?php echo $nome; ?>" />
    <input name="preco" type="hidden" value="<?php echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="1" />
    
    <input name="Comprar" type="submit" value="Comprar" />
    
    </form> 
    
    
    
    <form action="..\boletos\boleto.php" method="post" name="boleto">
    
   
    <input name="Gerar Boleto" type="submit" value="Geral Boleto" />
    
    </form> 
    
    
    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
<input type="hidden" name="code" value="88C9D6A79A9AA1FFF4D9DF9D28D5896B" />
<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/94x52-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
    
</div>
<div class="caixadesc">
<p> <h3> Descrição </h3> </p>
<p> <?php echo $desc ?> </p>
</div>

<?php
 }
 ?>
</div>
<?php include ('modelo/rodape.php'); ?>