<?php
$conexao = mysql_connect('mysql22.redehost.com.br' , 'lhlivia12345678', 'lhrj456789') or die ( 'Não foi possivel conectar ao banco de dados');

$db = mysql_select_db('lojasony', $conexao) or die ( 'Não foi possivel selecionar o banco de dados');





?>

<?php function verProdutos($modo){?><table width="100%" height="100" border="0">
  <tr>
  
    <td bgcolor="#FFCC99"> <form action="../usuarios/dadoslogin.php" method="post">
      <input name="Login" type="submit" value="Login" />
  </form> </td>
    <td bgcolor="#FFCC99" valign="middle" colspan="4" width="21" align="center" valign="top"><a href="../carrinho.php"><img src="../imagens/carrinho.png" border="0" width="50" height="50" /> </a></td>
    
<form id="form1" name="form1" method="post" action="">
<td><input type="Search" value="Buscar" name="buscar" id="buscar" /></td> 
</form>  
  <tr>
    <td colspan="11" align="center" valign="middle" bgcolor="#000000" class="cor">LISTA DE PRODUTOS</td>
  </tr>
  <tr bgcolor="#999999">
    <td align="center" valign="middle" bgcolor="#FF9966">ID</td>
    <td align="center" valign="middle" bgcolor="#FF9966">IMAGEM</td>
    <td align="center" valign="middle" bgcolor="#FF9966">NOME</td>
    <td align="center" valign="middle" bgcolor="#FF9966">DESCRIÇÃO</td>
    <td width="200" align="center" valign="middle" bgcolor="#FF9966">PREÇO</td>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9966">QUANTIDADE</td>
    <td align="center" valign="middle" bgcolor="#FF9966">DATA</td>
    <td colspan="3" align="center" valign="middle" bgcolor="#FF9966">ADICIONAR</td>
  </tr>
  </form>
  <?php
  
  $consulta = mysql_query("select * from produtos order by nome ", $conexao);

 if (isset($_POST['buscar'])){
	
$consulta = mysql_query("SELECT * FROM produtos where nome like '%".$_POST['buscar']."%'");
	 
 }
  if (isset($_POST['buscar'])){
 $consulta = mysql_query("select * from produtos where nome like '%".$_POST['buscar']."%'");


}

  
  while($linha=mysql_fetch_array($consulta)){
	  $id = $linha['id'];
	  $imagem = $linha['imagem'];
	  $nome = $linha['nome'];
	  $desc = $linha['descricao'];
	  $preco = $linha['preco'];
	  $quant = $linha['quantidade'];
	  $data = $linha['data'];
	 // $adicionar = '<a href="carrinho.php?id='.$linha['id'].'"title="'.$linha['id'].'"> Adicionar </a>'
	  
	  
 	  
  ?>
   
<?php    if ($modo <> 'editar') { ?>
   
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $id; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><img src="<?php echo $imagem; ?>" width="70" height="70"></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $nome; ?></td>
    <td  align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $desc; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $preco; ?></td>
    <td colspan="2" align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $quant; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $data; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"> 
    
    <form action="carrinho.php" method="post" name="comprar">
    
    <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
    <input name="nome" type="hidden" value="<?php echo $nome; ?>" />
    <input name="preco" type="hidden" value="<?php echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="1" />
    
    <input name="Comprar" type="submit" value="Comprar" />
    
    </form> 
    
   <?php  } else {?>
   
    <td colspan="2" align="center" valign="middle" bgcolor="#FFFFCC">    
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $id; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><img src="<?php echo $imagem; ?>" width="70" height="70"></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $nome; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $desc; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $preco; ?></td>
    <td colspan="2" align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $quant; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $data; ?></td>
    <td align="center" valign="middle" bgcolor="#FFFFCC"> 
    
    
    <form action="editar.php" method="post" name="comprar">
      <input name="id" type="hidden" value="<?php echo $id; ?>" />
    
        <input name="imagem" type="hidden" value="<?php echo $imagem; ?>" />
    <input name="nome2" type="hidden" value="<?php echo $nome; ?>" />
        <input name="desc2" type="hidden" value="<?php echo $desc; ?>" />
    <input name="preco2" type="hidden" value="<?php echo $preco; ?>" />
    <input name="quantidade2" type="hidden" value="<?php echo $quant; ?>" />
        <input name="data2" type="hidden" value="<?php echo $data; ?>" />
        
         <input name="Comprar2" type="submit" value="Editar" />
      </form>
      
     
    
 <?php    }?>
    
    </td>
    <td width="41" align="center" valign="middle" bgcolor="#FFFFCC"> <form action="excluir.php" method="post">
     
      <input name="Excluir" type="submit" value="Apagar" />   
                  
    <input name="id" type="hidden" value="<?php echo $id; ?>" />
      </form></td>
    <td width="42" align="center" valign="middle" bgcolor="#FFFFCC"><form action="carregarprodutos.php" method="post">
     
      <input name="Cadastrar" type="submit" value="Cadastrar" />   
                  
    
      </form></td>
  </tr>
  <?php } ?>
</table>

<?php }?>


<?php

function encontrarReg($id){

$consulta = "SELECT * from produtos where id=$id";
$res = mysql_query($consulta);
$linha = mysql_fetch_array($res);
return $linha;

}

?>


<?php
function gravaDados($id, $nome, $desc, $preco, $quant, $imagem, $data) {

if (isset($id)){
	
	$cad = "UPDATE produtos set nome='$nome',
			descricao='$desc',
			preco='$preco',
			quantidade='$quant',
			imagem='$imagem',
			data='$data'
			where id=$id";
			
	mysql_query($cad);
	echo '<p> Registro Atualizado</p>';
	
}
	
}
?>

<?php

function apagar($id){
	$sql = "delete from produtos where id=$id";
	mysql_query($sql);
	echo "Registro eliminado com sucesso";
}


?>