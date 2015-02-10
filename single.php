<? get_header(); ?>

<section class="row page">
    <div class="small-12 columns">

        <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article <? post_class('post'); ?>>
                <h2><?php the_title(); ?></h2>

                <? include 'partials/post-meta.php';?>

                <p><? the_content(); ?></p>

                <? include 'partials/post-thumbnail.php';?>

            </article>

        <? endwhile; else : ?>

            <p><? _e( 'Sorry, no pages found.', 'kollektiv-legacy-theme' ); ?></p>

        <?php endif; ?>

        <? get_sidebar(); ?>
    </div>

</section>


<? get_footer(); ?>