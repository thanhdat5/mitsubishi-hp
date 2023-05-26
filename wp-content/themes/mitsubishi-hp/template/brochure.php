<?php

/**
 * Template Name: Tải Brochures
 * Description: Mẫu giao diện Trang Tải Brochures
 *
 */

get_header();
?>
<div class="hp-brochures-page">
    <div class="hp-brochures-header">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <div class="hp-brochures-content">
        <?php
        $args = array(
            'post_type'           => 'brochure',
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
            'posts_per_page'      => -1,
        );
        $q = new WP_Query($args);
        if ($q->have_posts()) {
        ?>
            <div class="row justify-content-center">
                <?php
                while ($q->have_posts()) {
                    $q->the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    $image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
                    $file_pdf = get_field('file_pdf');
                ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hp-brochure-item">
                            <div class="hp-brochure-header">
                                <div class="hp-brochure-image">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo get_the_title(); ?>" />
                                </div>
                            </div>
                            <div class="hp-brochure-body">
                                <h2 class="hp-brochure-title"><?php echo get_the_title(); ?></h2>
                                <a class="hp-brochure-download" href="<?php echo $file_pdf['url']; ?>" target="_blank">
                                <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24' height='24' viewBox='0 0 24 24'><defs><path fill='currentColor' id='a' d='M4 21v-2h16v2H4zm7-18h2v9.865l4.36-3.633 1.28 1.537L12 16.302l-6.64-5.533 1.28-1.537L11 12.865V3z'/></defs><use fill-rule='evenodd' xlink:href='#a'/></svg>
                                    <span>TẢI PDF (<?php echo size_format($file_pdf['filesize']); ?>)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
