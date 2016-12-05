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
			<h1 class="small">Serviços</h1><br><br>
			<?php 

			$args = array(
				'post_type' => 'servico',
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
							<a class="btn-confira btn-azul" href="<?php the_permalink(); ?>">Confira</a>
						</article>
					</div>
					<?php if(($query->current_post+1) % 3 == 0 AND $query->current_post != 0): ?>
						</div><br><div class="row">
					<?php endif; ?>		
				<?php endwhile; ?>										
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="paginacao">
						<?php
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $query->max_num_pages
						) );
						?>
					</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
