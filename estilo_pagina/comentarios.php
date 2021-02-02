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
                        url: "get/get_comentarios.php",
                        method: "post",
                        data: $("#inserir_comentarios").serialize(),
                        success: function(data) {
                            $("#texto_comentario").val("");
                            atualizaComentario();
                        }
                    });
                }
            });

            function atualizaComentario() {
                //carregar os comentários
                $.ajax({
                    url: "requisicoes_ajax/requisicao_comentarios.php",
                    success: function noticias(data) {
                        $("#comentarios").html(data);
                    }
                });
            }

            atualizaComentario();
        });
    </script>

</head>

<body>
    <article class="container" id="area_insercao">
        <section class="row">
            <div class="col-md-3 center"></div>
            <div class="col-md-5 center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="inserir_comentarios" class="input-group">
                            <textarea type="text" id="texto_comentario" name="texto_comentario" placeholder="Insira um  comentário" maxlength="600" class="formato_resumo"></textarea>
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