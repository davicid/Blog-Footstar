<?php

session_start();

require_once("estilo_pagina/barra_navegacao.php");
require_once("estilo_pagina/capa.php");
?>

<section class="area_secao">
	<div class="container area_introducao">
		<h1><b>Introdução ao Footstar</b></h1>
		<p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium congue est nec vestibulum. Etiam malesuada congue arcu, et sodales purus pulvinar at. Donec vel velit vitae nulla consectetur pharetra. Mauris lacinia nec nulla in aliquet. Sed ultrices eros et eros mollis auctor. Phasellus ac euismod augue. Mauris vitae ipsum ornare, eleifend lacus ut, luctus neque. Suspendisse potenti. Pellentesque elementum sodales fringilla. Mauris non risus maximus, viverra est ac, auctor odio. Donec pharetra efficitur libero et pharetra. Quisque maximus et odio vitae sodales. Fusce in mi turpis.</b></p>
		<p><b>Praesent vel lobortis sapien. Sed sed dui molestie, tempus odio vitae, rhoncus ligula. Cras in maximus lacus. Donec a nibh condimentum, aliquam eros eget, porttitor eros. Pellentesque luctus bibendum mauris. Nam facilisis massa ligula, sit amet semper nulla cursus at. Donec ut vulputate felis, non cursus ex. Donec tellus nisi, imperdiet a nibh ac, suscipit malesuada nibh. Proin laoreet nisi vel dui tristique, nec ullamcorper est tincidunt. Ut ultricies, augue nec accumsan tempus, metus neque iaculis nulla, nec commodo arcu massa vel nulla.</b></p>
		<p><b>Quisque sit amet cursus leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus placerat, risus sed maximus congue, purus erat ornare massa, tempor euismod neque risus non orci. Suspendisse sed urna quis ex gravida tempus. In luctus pharetra nulla, eget molestie dolor sodales non. Duis quis massa ex. Etiam scelerisque massa quis accumsan sagittis. Nullam ut massa nisl. Aenean bibendum dui tincidunt aliquam placerat. Praesent tempor quam quis pretium eleifend. Mauris eu nisi mattis, fringilla dolor vulputate, pulvinar risus. Aliquam erat volutpat. Donec suscipit tortor ac libero scelerisque consectetur. Etiam in nisi at quam facilisis pulvinar. Nulla eget ante vitae sapien fermentum convallis sit amet non leo.</b></p>
	</div>
</section>

<section class="area_secao">
	<h1 class="titulo_noticias"><b>Últimas Notícias</b></h1>
	<?php
	require_once('recuperar_noticias.php');
	ultimasNoticia();
	?>
	<!-- row -->
	<div class="row">
		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Ultimas Atualizações'"><img src="imagens/tutoriais.png" class="logo img-responsive">
				<b id="posicionamento1">Ultimas Atualizações</b></a>
		</div>
		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Federação Brasileira'"><img src="imagens/fede_br.png" class="logo img-responsive">
				<b id="posicionamento2">Federação Brasileira</b></a>
		</div>
		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Tutoriais'"><img src="imagens/ultimas_atualizacoes.png" class="logo img-responsive">
				<b id="posicionamento3">Tutoriais</b></a>
		</div>

		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Competições Nacionais'"><img src="imagens/comp_nacionais.png" class="logo img-responsive">
				<b id="posicionamento4">Competições Nacionais</b></a>
		</div>
		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Competições Internacionais'"><img src="imagens/comp_internacionais.png" class="logo img-responsive">
				<b id="posicionamento5">Competições Internacionais</b></a>
		</div>
		<div class="col-sm-6 col-lg-4">
			<a href="mostrar_noticias.php?tipo_noticia='Seleção Brasileira'"><img src="imagens/sele_br.png" class="logo img-responsive">
				<b id="posicionamento6">Seleção Brasileira</b></a>
		</div>
</section>

<?php require_once("estilo_pagina/rodape.php"); ?>