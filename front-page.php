<?php get_header(); ?>


<section class="row">


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // jQuery Validation
            $("#signup").validate({
                // if valid, post data via AJAX
                submitHandler: function(form) {
                    $.post("http://localhost:8888/KOLLEKTIV-V2/wp-content/themes/kollektiv-legacy-theme/subscribe.php", {
                        email: $("#email").val(),
                        kollektivSchool: $("#kollektivSchool").prop('checked')
                        // THIS ISN'T WORKING PROPERLY
                        // IT WORKS WHEN WE DONT USE AJAX
                    }, function(data) {
                        //SUCCESS
                        $('#response').html(data);
                    });
                },
                // all fields are required
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                }
            });
        });
    </script>

    <div id="wrapper">
        <form id="signup" class="formee" action="<? echo get_template_directory_uri(); ?>/subscribe.php" method="post">
            <div>
                <label for="email">Email Address *</label>
                <input name="email" id="email" type="text" placeholder="Email address" />
            </div>
            <div>
                <label for="kollektivSchool">Kollektiv School?</label>
                <input type="checkbox" name="kollektivSchool" id="kollektivSchool" value="Yes" checked />
            </div>
            <div>
                <input class="right inputnew" type="submit" title="Send" value="Send" />
            </div>
        </form>
        <div id="response"></div>
    </div>

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