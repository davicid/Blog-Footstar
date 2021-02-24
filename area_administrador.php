<?php

session_start();

if (!isset($_SESSION["usuario"]) || !($_SESSION["tipo_usuario"] == "administrador")) {
    header("Location: index.php?erro=1");
}

require_once("estilo_pagina/barra_navegacao.php");
?>

Ainda em contrução

<?php require_once("estilo_pagina/rodape.php"); ?>