<?php

session_start();

?>

<?php
require_once("estilo_pagina/barra_navegacao.php");
require_once("estilo_pagina/capa.php");

$id_noticia = $_GET['id_noticia'];
require_once("recuperar_noticias.php");
paginaNoticia($id_noticia);
?>

<script type="text/javascript">
    $(document).ready(function() {

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
            $.ajax({
                url: "requisicoes_ajax/get_comentarios.php",
                method: "post",
                data: $("#inserir_comentarios").serialize(),
                success: function comentarios(data) {
                    $("#comentarios").html(data);
                }
            });
        }


        $("#btn_remover").click(function() {
            $.ajax({
                url: "requisicoes_ajax/remover_noticia.php",
                method: "post",
                data: $("#alterar_noticia").serialize(),
                success: function(data) {
                    alert('Notícia removida com sucesso');
                    window.location.href = "area_jornalistas.php";
                }
            });
        });

        atualizaNoticia();
    });
</script>


<section class="container">
    <div class=" col-md-3 center"></div>
    <div class="panel panel-default">
        <div class="panel-body">
            <form id="inserir_comentarios" class="input-group-md mb-12">
                <input type="hidden" id="id_noticia" name="id_noticia" value=<?= $id_noticia ?>>
                <textarea class="form-control" id="texto_comentario" name="texto_comentario" placeholder="Insira um comentário" maxlength="600" rows="8" cols="65" class="area_comentarios"></textarea>
                <br>
                <spam>
                    <button class="btn btn-primary" id="btn_comentario" type="button">Comentar</button>
                </spam>
            </form>
        </div>
    </div>
</section>


<section class="area_comentarios">
    <div id="comentarios"></div>
</section>

<?php require_once("estilo_pagina/rodape.php"); ?>