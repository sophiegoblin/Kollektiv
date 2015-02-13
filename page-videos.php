<?php
/*
	Template Name: Videos
*/
?>
<?php get_header(); ?>

<section class="row content">
    <div class="text-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><? the_title(); ?></h1>
    
        <?php endwhile; endif; ?>

    </div>
    <?php get_template_part('content', 'videos'); ?>
</section>

<?php get_footer(); ?>