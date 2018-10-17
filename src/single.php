<!-- section -->
	<section>

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid-container full'); ?>>
		  <button class="close-button close-modal" data-close aria-label="Close modal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			
			<div class="grid-x">
			<div class="cell small-12 medium-7 modal-image-gallery">
				<?php 
					$gallery = get_post_gallery_images( get_the_ID() );
					if (count($gallery) > 0) :
				?>
				

				<div id="zionegro" class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<div class="orbit-wrapper">
					<ul class="orbit-container">
						<?php foreach($gallery as $key => $image) { ?>
						<li class="orbit-slide <?php echo ($key === 0 ? 'is-active' : '') ?>">
							<figure class="orbit-figure">
								<img class="orbit-image" src="<?php echo $image; ?>" alt="<?php echo 'Immagine' . $key; ?>">
							</figure>
						</li>
						<?php } ?>
					</ul>
				</div>
				<nav class="orbit-bullets">
				<?php foreach($gallery as $index => $bullet) { ?>
					<button data-slide="<?php echo $index; ?>"  class="<?php echo ($index === 0 ? 'is-active' : '') ?>" >
						<span class="show-for-sr"><?php echo $index; ?> slide details.</span>
						<?php if($index === 0) : ?>
							<span class="show-for-sr">Current Slide</span>
						<?php endif; ?>
					</button>
				<?php } ?>
				</nav>
				</div>
				<script>
				$(document).ready(function() {
					$('#zionegro').foundation();
				});
				</script>

			<?php else: ?>
				<h4 class="no-foto">nessuna immagine</h4>
			<?php endif; ?>
			</div>
			
			<!-- post content -->
			<div class="cell small-12 medium-5 single-post-modal-content">
			
				<h1 class="modal-product-title">
					<?php the_title(); ?>
				</h1>
				<p>
				<?php 
					$prezzo = get_post_meta( get_the_ID(), 'prezzo', true ); 
					if ($prezzo) :
						echo '&euro; ' . $prezzo;
					endif;
				?>
			  </p>
				 <?php // echo strip_shortcodes(get_the_content()); ?>
				 <?php the_content(); ?>

				<a href="#features" class="button large expanded">Contattaci</a>
			</div>
			<!-- / post content -->
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'totemtheme' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

	<!-- /section -->