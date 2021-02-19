<?php

require_once("db.class.php");

$nome_usuario = $_POST["nome_usuario"];
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$objDb = new db();
$link = $objDb->conecta_mysql();

$usuario_existe = false;
$email_existe = false;


$sql = "select * from usuarios where usuario = '$usuario'";
if ($resultado_id = mysqli_query($link, $sql)) {

    $dados_usuario = mysqli_fetch_array($resultado_id);

    if (isset($dados_usuario['usuario'])) {
        $usuario_existe = true;
    }
} else {

    echo "Erro ao tentar localizar o registro de usuário";
}


if ($usuario_existe) {

    $retorno_get = '';

    if ($usuario_existe) {
        $retorno_get .= "erro_usuario=1&";
    }

    header("Location: cadastrese.php?" . $retorno_get);
    die();
}

$sql = "insert into usuarios(nome,usuario,senha) values ('$nome_usuario','$usuario', '$senha') ";

$retorno_get = "";

if (mysqli_query($link, $sql)) {
    $retorno_get .= "usuario_cadastrado=1&";
    header("Location: cadastrese.php?" . $retorno_get);
} else {
    $retorno_get .= "erro_cadastro=1&";
    header("Location: cadastrese.php?" . $retorno_get);
}
