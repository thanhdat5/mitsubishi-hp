<?php
/**
 * The Template used to display Tag Archive pages.
 */

get_header();
?>
<div class="hp-news-page">
	<div class="hp-np-header">
		<div class="container">
			<h1><?php echo single_tag_title('', false); ?></h1>
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
