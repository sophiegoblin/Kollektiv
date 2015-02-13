<?php
/*
	Template Name: Manual
*/
?>
<?php get_header(); ?>
    <section class="row content">
        <div class="text-center">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><? the_title(); ?></h1>

            <?php endwhile; endif; ?>

        </div>

        <?php get_template_part('content', 'manual'); ?>
    </section>

<?php get_template_part('content', 'manual-navigation'); ?>

<?php get_footer(); ?>