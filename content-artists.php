<?php
	
	$num_posts = ( is_front_page() ) ? 4 : -1; //If front page is true only show 4 posts otherwise show all posts

  $args = array(
    'post_type' => 'kollektiv_artists',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
?>

<section class="row">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
