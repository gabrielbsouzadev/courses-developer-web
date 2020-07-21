
<?php

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$end = $_POST['end'];
$tel = $_POST['tel'];
$meucarrinho = $_SESSION['carrinho'];
$pedido = '

<h3> Obrigado por sua compra. <br> </h3>
<h4>'.$nome.'</h4>
<h4>'.$email.'</h4>
<h4>'.$end.'</h4>
<h4>'.$tel.'</h4>
<h4>'.$carrinho.'</h4>

Sua transação foi finalizada, enviamos o recibo de
sua compra por email. <br>';


if(isset($meucarrinho)){
$total = 0;
$pedido.='

<table width="200" border="0">
  <tr>
    <td bgcolor="#FF9966" colspan="4">LISTA DE SUAS COMPRAS </td>
    
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">PRODUTO</td>
    <td bgcolor="#FFFFCC">PREÇO</td>
    <td bgcolor="#FFFFCC">QUANTIDADE</td>
    <td bgcolor="#FFFFCC">TOTAL</td>
  </tr>


';

for ($i=0; $i<count($meucarrinho); $i++){
	if($meucarrinho[$i] <> NULL){
$subtotal = $meucarrinho[$i]['preco'] * $meucarrinho[$i]['quantidade'];
$total = $total + $subtotal;
$pedido.='

    <td bgcolor="#FFFFCC">'.$meucarrinho[$i]['nome'].'</td>
    <td bgcolor="#FFFFCC">'.$meucarrinho[$i]['preco'].'</td>
    <td bgcolor="#FFFFCC">'.$meucarrinho[$i]['quantidade'].'</td>
    <td bgcolor="#FFFFCC">'.$subtotal.'</td>
  </tr>

';	
}}

$pedido.='<tr> <td> Total: '.$total;
$pedido.='</tr> </td>';
echo $pedido;

}


//formulario de envio por email


// multiplos destinatários
$to  = $email . ', '; // note the comma
$to .= 'hugovasconcelosf@hotmail.com.com';

// Assunto
$subject = 'Sua Compra Foi';

// Mensagem
$message = $pedido;


// Cabeçalhos
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From:  <hugovasconcelosf@example.com>' . "\r\n";

// Função Mail
mail($to, $subject, $message, $headers);



// final do formulario


?>