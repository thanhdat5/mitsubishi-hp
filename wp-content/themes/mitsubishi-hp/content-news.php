<?php

/**
 * The template for displaying content in the index.php template.
 */
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hp-post-item'); ?>>
	<div class="row align-items-center">
		<div class="col-md-4">
			<div class="hp-pi-image">
				<img src="<?php echo $image_url; ?>" alt="" />
			</div>
		</div>
		<div class="col-md-8">
			<div class="hp-pi-date"><?php echo get_the_date(); ?></div>
			<h2 class="hp-pi-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'mitsubishi-hp'), the_title_attribute(array('echo' => false))); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<div class="hp-pi-excerpt"><?php echo get_the_excerpt(); ?></div>
			<a class="hp-link" href="<?php the_permalink(); ?>">Chi tiết</a>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->