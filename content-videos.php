<?php

    $args = array(
        'post_type' => 'video',
        'posts_per_page' => -1
    );
    $query = new WP_Query( $args );
?>

<section class="row content">

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <? $youtube_url = get_field('youtube_url'); ?>

    <div class="small-12 medium-12 large-4 columns image">
        <a href="<?php the_permalink(); ?>">
            <div class="flex-video">

            </div>
        </a>


        <div class="background-dark text-light text-center label">
            <a href="#" data-featherlight="#myLightbox"><span><?php the_title(); ?></span></a>
        </div>

        <div id="myLightbox">
            <div class="flex-video">
                <iframe src="https://www.youtube.com/embed/tkx3qffXFFE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <script>

        </script>

        <? the_content(); ?>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
