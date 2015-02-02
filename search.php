<?php get_header(); ?>



<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <h1><?php wp_title( '' ); ?></h1>       

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_excerpt(); ?>        
    
      <?php endwhile; else; ?>

        <p>No results :(</p>

        <p><?php get_search_form(); ?></p>

      <?php endif; ?>
      
    </div>
  </div>
</section>



<?php get_footer(); ?>