<?php
/*
	Template Name: Manual
*/
?>
<?php get_header(); ?>

    <section class="leader text-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1>Manual</h1>

            <div id="dom-target-letter" style="display:none"><?$letter = get_field('letter');echo htmlspecialchars(strtolower($letter));?></div>

            <script>
                var domTargetLetter = document.getElementById("dom-target-letter");
                var $scrollPoint = '#manual-id-'+domTargetLetter.textContent;
                console.log($scrollPoint);
                jQuery(document).ready(function($) {
                    $.scrollTo(
                        $($scrollPoint),
                        {
                            duration: 2700,
                            offset: { 'left':0, 'top':-80 }
                        }
                    );
                });
            </script>

        <?php endwhile; endif; ?>

    </section>

<?php get_template_part('content', 'manual'); ?>
<?php get_template_part('content', 'manual-navigation'); ?>

<?php get_footer(); ?>