<?php

/* Template Name: One Page Home */

get_header();

?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'totemtheme' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		<div class="reveal-container reveal" id="containerReveal" data-animation-in="slide-in-down" data-animation-out="spin-out" data-reveal>
		<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
  	</button>
		</div>
	</main>

<?php get_footer(); ?>
