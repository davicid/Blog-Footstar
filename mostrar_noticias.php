<?php

session_start();

?>

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