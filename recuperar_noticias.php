<?php

function paginaNoticia($id_noticia)
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.id, n.titulo, n.texto_noticia, u.id, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND n.id = $id_noticia";

    $resultado = mysqli_query($link, $sql);

    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2></a>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
            echo "<br/>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function mostrarNoticias($tipo_noticia)
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.id, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = $tipo_noticia";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            $id_noticia = $noticia['id'];
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<a href='noticia.php?id_noticia=$id_noticia'><h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2></a>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}
