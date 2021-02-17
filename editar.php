<?php

session_start();

if (!isset($_SESSION["usuario"]) || (!($_SESSION["tipo_usuario"] == "jornalista") && !($_SESSION["tipo_usuario"] == "administrador"))) {
    header("Location: index.php?erro=1");
}


?>

<?php require_once('estilo_pagina/barra_navegacao.php');

$id_noticia = $_GET['id_noticia'];
require_once('recuperar_noticias.php');
editarNoticia($id_noticia);

?>

<script type="text/javascript">
    $(document).ready(function() {

        $("#btn_salvar").click(function() {
            if ($("#novo_titulo").val().length > 0 && $("#novo_texto_noticia").val().length > 0 && $("#novo_tipo_noticia").val().length != "") {

                $.ajax({
                    url: "requisicoes_ajax/editar_noticia.php",
                    method: "post",
                    data: $("#editar_noticia").serialize(),
                    success: function(data) {
                        alert('Notícia editada com sucesso');
                        window.location.href = "area_jornalistas.php";
                    }
                });
            }
        });
    });
</script>

<section class='container area_insercao'>
    <div class='col-md-3 center'></div>
    <div class='panel panel-default'>
        <div class='panel-body'>
            <form id='editar_noticia' class='input-group-md mb-12'>
                <input type="hidden" id="id_noticia" name="id_noticia" value=<?= $id_noticia ?>>
                <select name='novo_tipo_noticia' id='novo_tipo_noticia' class='form-select' aria-label='Default select example'>
                    <option value=''></option>
                    <option value='Ultimas Atualizações'> Ultimas Atualizações </option>
                    <option value='Federação Brasileira'> Federação Brasileira </option>
                    <option value='Tutoriais'> Tutoriais </option>
                    <option value='Competições Nacionais'> Competições Nacionais </option>
                    <option value='Competições Internacionais'> Competições Internacionais </option>
                    <option value='Seleção Brasileira'> Seleção Brasileira </option>
                </select>
                <br><br>
                <input class='form-control' type='text' id='novo_titulo' name='novo_titulo' placeholder='Insira o título da notícia' maxlength='100'>
                <br><br>
                <textarea class='form-control' type='text' id='novo_texto_noticia' name='novo_texto_noticia' placeholder='Insira o resumo da notícia' maxlength='5000' rows='10'></textarea>
                <br>
                <spam class='botao'>
                    <button class=' btn btn-primary' id='btn_salvar' type='button'>Salvar</button>
                </spam>
            </form>
        </div>
    </div>
</section>

<?php require_once('estilo_pagina/rodape.php'); ?>