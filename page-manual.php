<?php
/*
	Template Name: Manual
*/
?>
<?php get_header(); ?>

<section class="leader text-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
    
        <?php endwhile; endif; ?>

</section>

<?php get_template_part('content', 'manual'); ?>

<?php get_footer(); ?>