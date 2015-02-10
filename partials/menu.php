<?php get_search_form(); ?>

<div id="main-menu-wrap" class="main-menu-wrap">
    <nav class="main-menu">
        <div class="icon-list">

              <?php

              $args = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no-bullet'
              );

              wp_nav_menu( $args );

              ?>
        </div>
    </nav>
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
