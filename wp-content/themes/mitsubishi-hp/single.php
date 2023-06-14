<?php

/**
 * The Template for displaying all single posts.
 */

get_header();
if (have_posts()) :
	while (have_posts()) :
		the_post();
		if ('san-pham' === get_post_type()) {
			get_template_part('content', 'product');
		} else if ('attrage' === get_post_type() || 'triton' === get_post_type() || 'xpander' === get_post_type() || 'xpander-cross' === get_post_type() || 'outlander' === get_post_type() || 'pajero' === get_post_type() ) {
			get_template_part('content', 'feature');
		}
		else if ('safe' === get_post_type()){
			get_template_part('content', 'safe');
		}
		else{
			get_template_part('content', 'single');
		}
	endwhile;
endif;
wp_reset_postdata();
get_footer();