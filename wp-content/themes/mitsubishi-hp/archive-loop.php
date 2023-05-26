<?php

/**
 * The template for displaying the archive loop.
 */
if (have_posts()) :
?>
	<div class="hp-news-list">
		<div class="container">
			<?php
			while (have_posts()) :
				the_post();
				get_template_part('content', 'news');
			endwhile;
			?>
		</div>
	</div>
<?php
endif;
wp_reset_postdata();
mitsubishi_hp_content_nav('nav-below');
