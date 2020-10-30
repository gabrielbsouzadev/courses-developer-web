<?php

session_start();

include_once("conexao.php");
if (isset($_GET['id'])) {

    if (isset($_COOKIE['voto_contabilizado'])) {
        $_SESSION['msg'] = "<span style='color: red'>Erro ao votar</span>";
        header("Location: index.php");
    } else {

        setcookie('voto_contabilizado', $_SERVER['REMOTE_ADDR'], time() + 1361542579);

        $adicionaVoto = "UPDATE votos SET qtd_votos = qtd_votos + 1 WHERE id = '" . $_GET['id'] . "'";
        $resultadoVotos = mysqli_query($link, $adicionaVoto);

        if (mysqli_affected_rows($link)) {
            $_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "<span style='color: red'>Erro ao votar</span>";
            header("Location: index.php");
        }
    }
}
