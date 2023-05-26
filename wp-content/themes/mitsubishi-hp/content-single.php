<?php

/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hp-post-detail-page'); ?>>
	<div class="hp-pdp-header">
		<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>
	<div class="hp-pdp-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
	if ('post' === get_post_type()) {
	?>
		<?php if (has_tag()) : ?>
			<div class="hp-pdp-tags">
				<div class="container">
					<span>
						<img src="<?php echo get_theme_file_uri('assets/images/tag.png'); ?>" alt="tag" />
						Từ khóa:
					</span>
					<?php
					$my_tags = get_the_tags();
					if ($my_tags) {
						foreach ($my_tags as $tag) {
							$tag_names[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
						}
						echo implode(', ', $tag_names);
					}
					?>
				</div>
			</div>
		<?php endif; ?>
		<div class="container">
			<ul class="hp-pdp-related">
				<?php

				$related = get_posts(
					array(
						'post_type'    => get_post_type($post->ID),
						'category__in' => wp_get_post_categories($post->ID),
						'numberposts'  => 5,
						'post__not_in' => array($post->ID)
					)
				);
				if ($related) foreach ($related as $post) {
					setup_postdata($post); ?>
					<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							<span><?php echo get_the_date(); ?></span>
							<strong><?php the_title(); ?></strong>
						</a>
					</li>
				<?php }
				wp_reset_postdata(); ?>
			</ul>
		</div>
	<?php
	}
	?>
</article><!-- /#post-<?php the_ID(); ?> -->

<?php
get_template_part('template/components/hp-news', 'cta');
?>