<?php

function ultimasAtualizacoes()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Ultimas Atualizações'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function fedeBrasileira()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Federação Brasileira'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function tutoriais()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Tutoriais'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function compNacionais()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Competições Nacionais'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function compInternacionais()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Competições Internacionais'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}

function seleBrasileira()
{
    require_once("db.class.php");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao, n.titulo, n.texto_noticia, u.usuario, u.nome FROM noticias AS n JOIN usuarios AS u WHERE n.id_usuario = u.id AND tipo_noticia = 'Seleção Brasileira'";

    $resultado = mysqli_query($link, $sql);


    if ($resultado) {
        while ($noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='list-group-item'>";
            echo "<h4 class='list-group-item-heading'>" . $noticia['nome'] . " <small> - " . $noticia['data_inclusao'] . "</small></h4>";
            echo "<h2 class='list-group-item-heading'>" . "<b>" . $noticia["titulo"] . "</b>" . "</h2>";
            echo "<p class='list-group-item-text'>" . "<b>" . $noticia["texto_noticia"] . "</b>" . "</p>";
            echo "</div>";
        }
    } else {
        echo "Erro na consulta de noticias no banco de dados";
    }
}
