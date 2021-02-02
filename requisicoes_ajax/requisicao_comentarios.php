<?php

require_once("../db.class.php");

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "SELECT DATE_FORMAT(c.data_inclusao, '%d %b %Y %T') AS data_inclusao, c.comentario, u.usuario, u.nome FROM comentarios AS c JOIN usuarios AS u WHERE c.usuarios = u.id";

$resultado = mysqli_query($link, $sql);


if ($resultado) {
    while ($comentario = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<div class='list-group-item'>";
        echo "<h4 class='list-group-item-heading'>" . $comentario['nome'] . " <small> - " . $comentario['data_inclusao'] . "</small></h4>";
        echo "<p class='list-group-item-text'>" . "<b>" . $comentario["comentario"] . "</b>" . "</p>";
        echo "</div>";
    }
} else {
    echo "Erro na consulta de noticias no banco de dados";
}
