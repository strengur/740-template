<?php get_header(); ?>

<section class="single-post">
	<div class="single-post-background single-post-content single-post-content-images">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2><?php the_title_attribute(); ?></h2>
		
		<?php the_content(); ?>
		
		<?php endwhile; else : ?>
			<p><?php _e( 'Því miður er ekkert til að birta hér.' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
