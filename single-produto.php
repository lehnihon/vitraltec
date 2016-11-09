<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="categorias-detalhe">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<article class="row">	
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-12">
							<h1 class="small"><?php the_title(); ?></h1>
							<?php the_post_thumbnail('', array('class' => "img-responsive")); ?>
							<div class="text-left"><?php the_content();?></div>
						</div>
					<?php endwhile; ?>
				</article>
			<?php endif; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>



