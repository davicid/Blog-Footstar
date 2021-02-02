<?php

session_start();

if (!isset($_SESSION["usuario"]) || !($_SESSION["tipo_usuario"] == "administrador")) {
    header("Location: index.php?erro=1");
}
