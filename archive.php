<? get_header(); ?>

<section class="row page">
  <div class="small-12 columns">

      <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article <? post_class('post'); ?>>

              <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <? the_field('excerpt'); ?>

              <? include 'partials/post-meta.php';?>

              <? include 'partials/post-thumbnail.php';?>

          </article>

          <? include 'partials/similar-posts.php';?>

      <? endwhile; else : ?>

          <p><? _e( 'Sorry, no pages found.', 'kollektiv-legacy-theme' ); ?></p>

      <? endif; ?>

  </div>

</section>

<?php get_footer(); ?>