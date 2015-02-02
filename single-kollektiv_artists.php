<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      <!-- Primary Column -->
	      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
	        <div class="primary">
	       		<h1><?php the_title(); ?></h1>
	      		<p><?php the_content(); ?></p> 
					</div>
				</div>
				<!-- Secondary Column -->
				<div class="small-12 medium-4 medium-pull-8 columns">
					<div class="secondary">
	      		<h4><a href="http://www.twitter.com/<?php the_field('twitter'); ?>"><?php the_field('twitter'); ?></a></h4>
	    			<h4><a href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a></h4>
	    			<h4><a href="<?php the_field('other_link'); ?>"><?php the_field('other_link'); ?></a></h4>

	    			<hr>

	    			<p>
	    				<?php previous_post_link(); ?> -
	    				<a href="<?php bloginfo('url'); ?>/artists">Back to interviews</a> - 
	    				<?php next_post_link(); ?>
	    			</p>

					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>