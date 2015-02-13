<?php get_header(); ?>

<section class="picture-interview">

	<? if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<? $new_style = get_field('image_10')? true : false; ?>

		<h1><? the_title(); ?></h1>

		<? if ($new_style): ?>

			<? for ($i = 1; $i <= 10; $i++) {
				// vars
				$image = get_field('image_'.$i);
				$question = get_field('question_'.$i);
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
				$artist = get_the_title();
			?>

				<div id="image-<?= $i; ?>" class="text-center slide">
						<div class="image">
							<img src="<?= $url; ?>" alt="<?= $artist.' - '.$question.' - Kollektiv Gallery'; ?>" title="<?= $question.' By '.$artist; ?>" >


							<div class="background-dark text-light label">
								<span><?= $question; ?></span>
							</div>
						</div>

				</div>
			<? } ?>
		<? else: // Revert to the old style picture interview format ?>
			<div class="row">
				<div class="small-6 small-centered columns text-center image-full-width">
					<? the_content(); ?>
				</div>
			</div>
		<? endif; ?>

		<div>
			<h4><a href="http://www.twitter.com/<?php the_field('twitter'); ?>"><?php the_field('twitter'); ?></a></h4>
			<h4><a href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a></h4>
			<h4><a href="<?php the_field('other_link'); ?>"><?php the_field('other_link'); ?></a></h4>

			<hr>

			<p>
				<?php previous_post_link(); ?> -
				<a href="<?php bloginfo('url'); ?>/artists">Back to interviews</a> -
				<?php next_post_link(); ?>
			</p>
		</div>

	<?php endwhile; endif; ?>

	<a class="arrow-down arrow-down-slide trigger-scroll" href="#">NEXT</a>

</section>

<?php get_footer(); ?>