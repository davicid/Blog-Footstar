<?php

session_start();

if (!isset($_SESSION["usuario"]) || (!($_SESSION["tipo_usuario"] == "jornalista") && !($_SESSION["tipo_usuario"] == "administrador"))) {
    header("Location: index.php?erro=1");
}

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
            $("#btn_noticia").click(function() {
                if ($("#titulo_noticia").val().length > 0 && $("#texto_noticia").val().length > 0 && $("#tipo_noticia").val().length != "") {

                    $.ajax({
                        url: "get/get_noticias.php",
                        method: "post",
                        data: $("#inserir_noticia").serialize(),
                        success: function(data) {
                            $("#titulo_noticia").val("");
                            $("#texto_noticia").val("");
                            $("#tipo_noticia").val("");
                            atualizaNoticia();
                        }
                    });
                }
            });

            function atualizaNoticia() {
                //carregar as notícias
                $.ajax({
                    url: "requisicoes_ajax/requisicao_noticias.php",
                    success: function noticias(data) {
                        $("#noticias").html(data);
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
    ?>

    <article class="container" id="area_insercao">
        <section class="row">
            <div class="col-md-3 center"></div>
            <div class="col-md-5 center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="inserir_noticia" class="input-group">
                            <select name="tipo_noticia" id="tipo_noticia" class="form-select" aria-label="Default select example">
                                <option value="">Selecione uma opção</option>
                                <option value="Ultimas Atualizações">Ultimas Atualizações</option>
                                <option value="Federação Brasileira">Federação Brasileira</option>
                                <option value="Tutoriais">Tutoriais</option>
                                <option value="Competições Nacionais">Competições Nacionais</option>
                                <option value="Competições Internacionais">Competições Internacionais</option>
                                <option value="Seleção Brasileira">Seleção Brasileira</option>
                            </select>
                            <br><br>
                            <input type="text" id="titulo_noticia" name="titulo_noticia" placeholder="Insira o título da notícia" maxlength="100" class="formato_titulo">
                            <br><br>
                            <textarea type="text" id="texto_noticia" name="texto_noticia" placeholder="Insira o resumo da notícia" maxlength="1000" class="formato_resumo"></textarea>
                            <br><br>
                            <spam class="botao">
                                <button class=" btn btn-primary" id="btn_noticia" type="button">Enviar</button>
                            </spam>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="texto_noticias">
                <div id="noticias" class="list-group"></div>
            </div>
        </section>
    </article>


    <?php
    require_once("estilo_pagina/rodape.php");
    ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>