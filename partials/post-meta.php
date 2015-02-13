<ul class="post-meta no-bullet">
    <li class="author">
        <? if(!is_search()): ?>
            by <?php the_author_posts_link(); ?>
            on
        <? endif;?>
        <?php the_time( 'j F, Y' ); ?>
    </li>
</ul>