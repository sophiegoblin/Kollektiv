<ul class="post-meta no-bullet">
    <li class="author">
        <span class="wpt-avatar small">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
        </span>
        by <?php the_author_posts_link(); ?>
        on <?php the_time( 'j F, Y' ); ?>
    </li>
</ul>