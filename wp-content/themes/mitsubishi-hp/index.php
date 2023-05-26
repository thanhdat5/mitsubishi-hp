<?php

/**
 * Template Name: Trang tin tức
 * Description: Mẫu giao diện Trang tin tức
 *
 */

get_header();

$page_id = get_option('page_for_posts');
?>
<div class="hp-news-page">
	<div class="hp-np-header">
		<div class="container">
			<h1><?php echo get_the_title($page_id); ?></h1>
		</div>
	</div>
	<div class="hp-np-content">
		<?php
		get_template_part('archive', 'loop');
		?>
	</div>
</div>
<?php
get_footer();
