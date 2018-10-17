<?php 

$tavole = new WP_Query(array( 'post_type' => 'html5-blank', 'posts_per_page' => 3, 'category_name' => 'tavole', ));

if ( $tavole->have_posts() ) { ?>

  <div class="grid-container full">
  <div class="grid-x">
	
  <?php while ( $tavole->have_posts() ) : $tavole->the_post(); ?>

    <div class="cell small-12 medium-4 products-cell">
      <?php if ( has_post_thumbnail() ) : ?>
      <a class="contentOnModal" href="<?php echo the_permalink(); ?>">
        <div class="fake-table">  
          <div class="products-cell-img">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      </a>
      <?php endif; ?>
  
		  <h4 class="products-cell-title">
        <a class="contentOnModal" href="<?php echo the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h4>

      <p class="products-cell-price">
        <?php 
					$prezzo = get_post_meta( get_the_ID(), 'prezzo', true ); 
					if ($prezzo) :
						echo '&euro; ' . $prezzo;
					endif;
				?>
      </p>
    </div>
  <?php 

  endwhile; 
	
	wp_reset_postdata();
}

?>