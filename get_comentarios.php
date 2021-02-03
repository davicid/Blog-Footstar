<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php?erro=1");
}


require_once("db.class.php");

$texto_comentario = $_POST["texto_comentario"];
$id_usuario = $_SESSION["id_usuario"];

$objDb = new db();
$link = $objDb->conecta_mysql();

$inserir_comentarios = "INSERT INTO comentarios(id_usuario, comentario) values ($id_usuario, '$texto_comentario')";

mysqli_query($link,  $inserir_comentarios);
