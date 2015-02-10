<?php get_header(); ?>

<section class="picture-interview">

	<?
		if ( have_posts() ) : while ( have_posts() ) : the_post();

		$new_style = get_field('image_10')? true : false;
	?>

	<div>
		<h1><? the_title(); ?></h1>
<!--			<p>--><?php //the_content(); ?><!--</p>-->
	</div>
	<? if($new_style): ?>

		<? for ($i = 1; $i <= 10; $i++) {
			// vars
			$image = get_field('image_'.$i);
			$question = get_field('question_'.$i);
			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			$caption = $image['caption'];
			// thumbnail
			$size = 'main-artist-image';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];
		?>

			<div id="image-<?= $i; ?>" class="text-center image-wrapper">
				<div class="image">
					<!--		<a href="--><? //echo $url; ?><!--" title="--><? //echo $title; ?><!--">-->
					<img src="<?= $url; ?>" alt="<?= $alt; ?>" >
					<!--		</a>-->
				</div>
				<div class="background-dark text-light label">
					<span><?= $question; ?></span>
	<!--				<span>--><? //echo $caption; ?><!--</span>-->
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

</section>

<?php get_footer(); ?>