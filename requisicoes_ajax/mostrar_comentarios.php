<?php


require_once("../db.class.php");

$id_noticia = $_POST['id_noticia'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "SELECT DATE_FORMAT(c.data_inclusao, '%d %b %Y %T') AS data_inclusao, c.comentario, c.id_usuario, c.id, u.nome FROM comentarios AS c JOIN usuarios AS u WHERE c.id_usuario = u.id AND c.id_noticia = $id_noticia ORDER BY data_inclusao DESC";

$resultado = mysqli_query($link, $sql);


if ($resultado) {
    while ($comentario = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<div class='container'>";
        echo "<div class='list-group-item'>";
        echo "<h4 class='list-group-item-heading'>" . $comentario['nome'] . " <small> - " . $comentario['data_inclusao'] . "</small></h4>";
        echo "<p class='list-group-item-text'>" . "<b>" . nl2br($comentario["comentario"]) . "</b>" . "</p>";
        echo "<br/><br/>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Erro na consulta de comentarios no banco de dados";
}
