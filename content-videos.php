<?php

    $args = array(
        'post_type' => 'video',
        'posts_per_page' => -1
    );
    $query = new WP_Query( $args );
?>



    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <? $youtube_url = get_field('youtube_url'); ?>

        <div class="small-12 medium-12 large-4 columns image">
            <a href="#" class="video-placeholder" data-url="<?=$youtube_url;?>">
                <?php the_post_thumbnail('main-artist-image'); ?>
                <div class="background-dark text-light text-center label">
                    <span><?php the_title(); ?></span>
                </div>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>



<div class="overlay overlay-video background-dark"></div>
<div class="video-container">
    <div class="flex-video"></div>
</div>

