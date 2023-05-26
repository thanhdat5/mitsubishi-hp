<?php

/**
 * Template Name: Trang dịch vụ
 * Description: Mẫu giao diện Trang dịch vụ
 *
 */

get_header();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
$image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
?>
<div class="hp-service-page">
    <div class="hp-service-header" style="background-image: url(<?php echo $image_url; ?>);">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
    <div class="hp-service-content">
        <?php
        $args = array(
            'post_type'           => 'dich-vu',
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
            'posts_per_page'      => -1,
            'meta_key'            => 'thu_tu_hien_thi',
            'orderby'             => 'meta_value_num',
            'order'               => 'ASC',
        );
        $q = new WP_Query($args);
        if ($q->have_posts()) {
        ?>
            <div class="hp-services-list">
                <?php
                $index = 0;
                while ($q->have_posts()) {
                    $q->the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    $image_url = $image ? $image[0] : get_theme_file_uri('assets/images/no-image.png');
                ?>
                    <div class="hp-service-item hp-card-animation <?php if($index%2!=0) echo 'image-right';?>">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6 <?php if($index%2!=0) echo 'order-md-2 order-1';?>">
                                <div class="hp-si-image">
                                    <div class="hp-si-image-inner">
                                        <img src="<?php echo $image_url;?>" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 <?php if($index%2!=0) echo 'order-md-1 order-2';?>">
                                <div class="hp-si-content">
                                    <h2 class="hp-si-title"><?php echo get_the_title();?></h2>
                                    <div class="hp-si-body">
                                        <p><?php echo get_the_excerpt()?></p>
                                    </div>
                                    <a href="<?php echo get_the_permalink();?>" class="hp-btn">Khám phá chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                $index++;
                }
                wp_reset_postdata();
                ?>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    get_template_part('template/components/hp-product', 'cta');
    ?>
</div>
<?php
get_footer();
