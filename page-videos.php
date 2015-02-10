<?php
/*
	Template Name: Videos
*/
?>
<?php get_header(); ?>

<section class="leader background-light text-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><? the_title(); ?></h1>
    
        <?php endwhile; endif; ?>

</section>

<?php get_template_part('content', 'videos'); ?>

<?php get_footer(); ?>