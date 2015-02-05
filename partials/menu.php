<div class="menu-wrap background-color">
    <nav class="menu">
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
    <span class="close-button" id="close-button"></span>
</div>

<a id="open-button">
    <div class="menu-button" id="open-button"></div>
</a>
