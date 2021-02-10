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

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //associar o evento de click ao botão
            $("#btn_comentario").click(function() {
                if ($("#texto_comentario").val().length > 0) {

                    $.ajax({
                        url: "inserir/inserir_comentarios.php",
                        method: "post",
                        data: $("#inserir_comentarios").serialize(),
                        success: function(data) {
                            $("#texto_comentario").val("");
                            atualizaNoticia();
                        }
                    });
                }
            });

            function atualizaNoticia() {
                //carregar as notícias
                $.ajax({
                    url: "requisicoes_ajax/requisicao_comentarios.php",
                    method: "post",
                    data: $("#inserir_comentarios").serialize(),
                    success: function comentarios(data) {
                        $("#comentarios").html(data);
                    }
                });
            }

            atualizaNoticia();
        });
    </script>

</head>

<body>

    <?php
    require_once("estilo_pagina/barra_navegacao.php");
    require_once("estilo_pagina/capa.php");


    $id_noticia = $_GET['id_noticia'];
    require_once("recuperar_noticias.php");
    paginaNoticia($id_noticia);
    ?>

    <article class="container" id="area_insercao">
        <section class="row">
            <div class="col-md-3 center"></div>
            <div class="col-md-5 center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="inserir_comentarios" class="input-group">
                            <input type="hidden" id="id_noticia" name="id_noticia" value=<?= $id_noticia ?>>
                            <textarea id="texto_comentario" name="texto_comentario" placeholder="Insira um comentário" maxlength="1000" class="formato_resumo"></textarea>
                            <br><br>
                            <spam class="botao">
                                <button class=" btn btn-primary" id="btn_comentario" type="button">Comentar</button>
                            </spam>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="texto_noticias">
                <div id="comentarios" class="list-group"></div>
            </div>
        </section>
    </article>





    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>