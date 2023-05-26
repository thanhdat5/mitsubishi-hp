<?php

/**
 * The Template for displaying Archive pages.
 */

get_header();
?>
<div class="hp-news-page">
	<div class="hp-np-header">
		<div class="container">
			<h1><?php
				if (is_day()) :
					printf(esc_html__('Ngày: %s', 'mitsubishi-hp'), get_the_date());
				elseif (is_month()) :
					printf(esc_html__('Tháng: %s', 'mitsubishi-hp'), get_the_date(_x('F Y', 'monthly archives date format', 'mitsubishi-hp')));
				elseif (is_year()) :
					printf(esc_html__('Năm: %s', 'mitsubishi-hp'), get_the_date(_x('Y', 'yearly archives date format', 'mitsubishi-hp')));
				else :
					esc_html_e('Lưu trữ', 'mitsubishi-hp');
				endif;
				?></h1>
		</div>
	</div>
	<div class="hp-np-content">
		<?php
		if (have_posts()) :
			get_template_part('archive', 'loop');
		else :
		?>
			<div class="container">
				<p class="text-center text-muted">Dữ liệu đang cập nhật...</p>
			</div>
		<?php
		endif;
		?>
	</div>
</div>
<?php
wp_reset_postdata();
get_footer();
