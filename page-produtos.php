<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>
<div id="content">
	<section id="categorias">
		<div class="container">
			<h1 class="small">Produtos</h1><br><br>
			<?php 

			$args = array(
				'post_type' => 'produto',
			    'orderby' => 'post_date',
			    'order' => 'DESC');
			$query = new WP_Query( $args ); 

			if ( $query->have_posts() ): ?>
				<div class="row">	
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-4">
						<article>
							<?php the_post_thumbnail('', array('class' => "img-responsive e-cinza")); ?>
							<strong class="titulo"><?php the_title(); ?></strong>
							<a class="btn-confira btn-azul" href="<?php the_permalink(); ?>">Saiba Mais</a>
						</article>
					</div>
					<?php if(($query->current_post+1) % 3 == 0 AND $query->current_post != 0): ?>
						</div><br><div class="row">
					<?php endif; ?>		
				<?php endwhile; ?>										
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
