<?php

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Blog Footstar</title>

    <!-- Bootstrap -->
    <link href="bootstrap/scss/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="blog_estilo.css">

</head>

<body>
    <?php require_once("estilo_pagina/barra_navegacao.php"); ?>
    <?php require_once("estilo_pagina/capa.php"); ?>


    <!-- Seção -->
    <section class="texto_noticias">
        <?php
        $tipo_noticia = $_GET['tipo_noticia'];
        require_once("recuperar_noticias.php");
        mostrarNoticias($tipo_noticia);
        ?>
    </section>

    <!-- Rodape -->
    <?php require_once("estilo_pagina/rodape.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>