<?php get_header(); ?>


<section class="row">

    <div class="center circle background-light text-center subscribe-container">

        <h4>SUBSCRIBE</h4>
        <form action="http://kollektivgallery.us7.list-manage.com/subscribe/post?u=20e49663c93adc0174c86ea9e&amp;id=746455a945" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subscribe-form" target="_blank" novalidate>

            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Subscribe" required>
                <button class="subscribe-btn" type="submit" value="GO" name="subscribe" id="mc-embedded-subscribe" class="button">GO</button>

        </form>
    </div>

    <div class="center text-center leader">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <p><?php the_field('main_strapline'); ?></p>

        <?php endwhile; endif; ?>
    </div>

</section>


<?php get_footer(); ?>