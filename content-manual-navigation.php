<?php

    $args = array(
        'post_type' => 'manual',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );
?>

<nav id="nav-manual" class="show-for-large-up nav-manual">
    <a class="arrow-up" href="#">up</a>

    <ul class="no-bullet">
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
            <? $letter = strtolower(get_field('letter')); ?>
            <a href="#<?=$letter;?>">
                <li>
                    <span class="letter uppercase"><?if (strlen($letter) < 2){echo $letter;};?></span>

                    <span class="title"><? the_field('title') ?></span>
                </li>
            </a>

        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>

    <a class="arrow-down" href="#">down</a>
</nav>