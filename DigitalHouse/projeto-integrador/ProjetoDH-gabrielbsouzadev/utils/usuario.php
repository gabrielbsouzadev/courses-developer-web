<?php
// CAPTURANDO DADOS DO USUÁRIO LOGADO NO JSON
// AQUI TEMOS O CONTEÚDO DO ARQUIVO JSON (UMA STRING)
$arquivo = file_get_contents('./data/usuarios.json'); // <= O erro cemeçou aqui, não havia o json_decode nem o loop para achar o user
// AQUI TRANSFORMAMOS A STRING EM ARRAY
$arrayDosUsuarios = json_decode($arquivo, true);
// AQUI ACHAMOS O USUÁRIO ENCONTRADO ATRAVÉS DO EMAIL DELE (MAS PRECISA SER ENVIADO UM $_REQUEST COM O ÍNDICE email E UM VALOR)
// $usuarioEncontrado = getRegisters("usuarios", ["email", $_REQUEST["email"]]);
// OBSERVAÇÃO: VI QUE PEGARAM DAQUELE MEU REPOSITÓRIO COMO BASE, MAS CUIDADO QUE LÁ TÁ UM POUCO MAIS COMPLEXO, POIS AS FUNÇÕES FORAM FEITAS PARA RECEBER UM JSON MAIS COMPLEXO TB. DE FORMA GERAL, ESSA FUNÇÃO getRegisters() DEVE RECEBER O ÍNDICE DENTRO DO ARRAY (usuarios) E UM ARRAY QUE RECEBE O PARÂMETRO A SER ANALISADO E O VALOR DESSE PARÂMETRO. PORÉM NÃO EXISTE ESSA FUNÇÃO NO PROJETO DE VOCÊS. ENTÃO FIZ UM LOOP AQUI PRA GENTE ACHAR ESSE USUÁRIO PELO ID TRAZIDO PELA SESSION (DEFINIDA NO LOGIN.PHP)
if(isset($_SESSION) && isset($_SESSION["id"])):
    foreach($arrayDosUsuarios["usuarios"] as $usuario):
        if($usuario["id"] === $_SESSION["id"]):
            $usuarioEncontrado = $usuario;
        endif;
    endforeach;
endif;
// /CAPTURANDO DADOS DO USUÁRIO LOGADO NO JSON

// EDITANDO REGISTRO NO JSON
if (isset($_REQUEST["editarUsuario"]) && $_REQUEST["editarUsuario"]) :
    $arrayNovoUsuario = [
        "nome" => $_REQUEST["nome"],
        "sobrenome" => $_REQUEST["sobrenome"],
        "email" => $_REQUEST["email"],
        "senha" => $_REQUEST["senha"]
    ];
    $identificador = ["email", $_REQUEST["email"]];
    setRegister("usuarios", $arrayNovoUsuario, $identificador);
    header("Location: usuarios.php");
endif;
// /EDITANDO REGISTRO NO JSON
?>