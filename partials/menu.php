<?php get_search_form(); ?>

<div id="main-menu-wrap" class="main-menu-wrap">
    <nav class="main-menu">
        <div class="icon-list uppercase">

              <?php

              $args = array(
                    'container' => false,
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'no-bullet',
                    'before'     => '<h5>',
                    'after'      => '</h5>'
              );

              wp_nav_menu( $args );

              ?>
        </div>
    </nav>

    <div class="social-media">
        <a href="https://www.facebook.com/kollektivgallery">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="<? bloginfo('name'); ?> - Facebook"/>
        </a>
        <a href="http://www.twitter.com/kollektiv_">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt="<? bloginfo('name'); ?> - Twitter"/>
        </a>
        <a href="http://www.youtube.com/kollektivgallery">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/icons/youtube.svg" alt="<? bloginfo('name'); ?> - Youtube"/>
        </a>
    </div>

</div>

<div id="main-menu-button" class="hamburglar is-closed">
    <div class="burger-icon">
        <span class="menu-text show-for-large-up">MENU</span>
        <div class="burger-container">
            <span class="burger-bun-top"></span>
            <span class="burger-filling"></span>
            <span class="burger-bun-bot"></span>
        </div>
    </div>
</div>
