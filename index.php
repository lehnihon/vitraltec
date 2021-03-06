<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h1 class="small"><div class="animated bounceIn">VitralTec Vidraçaria</div></h1>
					<h3>Instalação e Manutenção de Vidros em geral</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<div class="row">
			    <?php
			        $args = array( 'post_type' => array('produto','servico'), 'posts_per_page' => 3, 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			    ?>
	                <div class="col-md-4 <?php if($query->current_post == 0): echo "anima-a";  endif; if($query->current_post == 1): echo "anima-b";  endif; if($query->current_post == 2): echo "anima-c";  endif;?>">   
	                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
	                        <?php the_post_thumbnail('home-thumb', array('class' => "img-responsive e-cinza")); ?>
	                    </a><br>
	                    <h4><?php the_title(); ?></h4><br>
	                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btn-confira" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="saiba-mais">
	                    	CONFIRA
	                    </a>
	                </div>
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left anima-h">
					<h2>Vidraçaria VitralTec</h2>
					<p>A Vitraltec é especializada na instalação e manutenção de vidros, e é considerada uma das melhores vidraçarias de São Paulo.<br>
					Na Vidraçaria Vitraltec você encontra: box de vidro, portas de vidro, espelhos modelados, tampo de mesa de vidro, tijolo de vidro, janelas de vidro, vidros laminados, vidros temperados, prateleiras de vidro e vidro comuns.
					</p>
					<ul>
						<li>Manutenção de vidros</li>
						<li>Instalação de vidros</li>
						<li>Vidros Personalizados</li>
						<li>Vidraçaria em São Paulo</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="btn-confira btn-azul margin-responsivo">CONFIRA</a>
				</div>
				<div class="col-md-6 text-left anima-i">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-mesa.jpg"; ?>"/>
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2 class="branco">Nossa localização</h2>
					<p>
						Rua Vicente Prado, 117 - Bela Vista - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 2887-0327  |  11 95340-7221  <strong>Email.: </strong>vendas@vitraltec.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3351563227593!2d-46.643565184559634!3d-23.556403367295395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ae1f031eb1%3A0x98df301bf2fac1d3!2sR.+Vicente+Prado%2C+117+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP%2C+01321-020!5e0!3m2!1spt-BR!2sbr!4v1479318132036" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
