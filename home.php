<?php get_header(); ?>

<section class="row page">
    <div class="small-12 columns">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              
        <article <?php post_class('post'); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <? the_field('excerpt'); ?>

            <?php include 'partials/post-meta.php';?>

            <? include 'partials/post-thumbnail.php';?>
        </article>


        <? include 'partials/similar-posts.php';?>


        <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no pages found.', 'kollektiv-legacy-theme' ); ?></p>

        <?php endif; ?>

    </div>

</section>


<?php get_footer(); ?>