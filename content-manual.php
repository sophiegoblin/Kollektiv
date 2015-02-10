<?php

	$num_posts = ( is_front_page() ) ? 4 : -1; //If front page is true only show 4 posts otherwise show all posts

    $args = array(
        'post_type' => 'manual',
        'posts_per_page' => $num_posts,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );
?>

<section class="row page">

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <article class="background-color manual-item">
            <h1><? the_field('letter'); ?></h1>
            <h3><? the_field('title'); ?></h3>
            <? the_content(); ?>
        </article>

        <img src="<?= get_bloginfo('template_directory');?>/assets/images/manual-blocks/<? the_field('letter');?>.png" />

    <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
