<div id="search-container" class="search-container">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

            <!--        <span class="screen-reader-text">--><?php //echo _x( 'Search for:', 'label' ) ?><!--</span>-->
            <input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"  name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>
</div>


