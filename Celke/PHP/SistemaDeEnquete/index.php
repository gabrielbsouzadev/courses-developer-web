<?php
    session_start();
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacao</title>
</head>
<body>
    <h1>Listar</h1>

    <?php
    //Pesquisar os votos
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg']."<br><br>";
        unset ($_SESSION['msg']);
    }
    $result_votos = "SELECT * FROM votos";
    $resultadoVotos = mysqli_query($link, $result_votos); 

    while ($row_votos = mysqli_fetch_assoc($resultadoVotos)) {
        echo ("id do voto: " . $row_votos['id']  . "<br>");
        echo ("Descrição do voto: " . $row_votos['nome']  . "<br>");
        echo ("quantidade de votos: " . $row_votos['qtd_votos']  . "<br>");
        echo ("<a href='votar.php?id=" . $row_votos['id']."'>Votar</a><br><hr>");
    }
    ?>

</body>
</html>