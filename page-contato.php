<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="azul small"><div class="animated bounceIn">Contato</div></h1>
		<h3 class="azul">Entre em contato com a VitralTec</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<br>
					<div class="videoWrapperb">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3351563227593!2d-46.643565184559634!3d-23.556403367295395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ae1f031eb1%3A0x98df301bf2fac1d3!2sR.+Vicente+Prado%2C+117+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP%2C+01321-020!5e0!3m2!1spt-BR!2sbr!4v1479318132036" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>
					<div class="quadro">
					<p>
						Rua Vicente Prado, 117 - Bela Vista - São Paulo - SP
					</p>
					<p>
						11 2887-0327  |  11 95340-7221
					</p>
					<p>vendas@vitraltec.com.br</p>							
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
