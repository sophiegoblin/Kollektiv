<? get_header(); ?>

  <section class="row page">
    <div class="small-12 columns">

      <h1><?php wp_title( '' ); ?></h1>


      <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <article <? post_class('post'); ?>>
          <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <? include 'partials/post-meta.php';?>

          <p><? the_field('excerpt'); ?></p>

          <? include 'partials/post-thumbnail.php';?>

        </article>

      <? endwhile; else : ?>

        <p>No results :(</p>

      <?php endif; ?>

    </div>

  </section>


<? get_footer(); ?>