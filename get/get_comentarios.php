<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php?erro=1");
}

function inserirNoticia()
{

    require_once("../db.class.php");

    $titulo_noticia = $_POST["titulo_noticia"];
    $texto_noticia = $_POST["texto_noticia"];
    $tipo_noticia = $_POST["tipo_noticia"];
    $id_usuario = $_SESSION["id_usuario"];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    if ($tipo_noticia == "" || $titulo_noticia == "" || $texto_noticia == "") {
        die();
    }


    $inserir_noticias = "INSERT INTO noticias(id_usuario, titulo, texto_noticia, tipo_noticia) values($id_usuario, '$titulo_noticia', '$texto_noticia', '$tipo_noticia')";

    mysqli_query($link, $inserir_noticias);
}

inserirNoticia();

function inserirComentario()
{

    require_once("db.class.php");

    $texto_comentario = $_POST["texto_comentario"];
    $id_usuario = $_SESSION["id_usuario"];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $inserir_comentarios = "INSERT INTO comentarios(id_usuario, comentario) values ($id_usuario, '$texto_comentario')";

    mysqli_query($link,  $inserir_comentarios);
}

inserirComentario();
