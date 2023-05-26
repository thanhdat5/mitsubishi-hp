<?php

/**
 * Template Name: Trang danh sách xe
 * Description: Mẫu giao diện Trang danh sách xe
 *
 */

get_header();
?>
<div class="hp-products-page">
    <div class="container">
        <h1 class="hp-pp-title"><?php echo get_the_title(); ?></h1>
        <div class="hp-pp-description">
            <?php the_content(); ?>
        </div>
        <?php
        $args = array(
            'post_type'           => 'san-pham',
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
            <div class="hp-pp-list">
                <div class="row gx-xl-5">
                    <?php
                    while ($q->have_posts()) {
                        $q->the_post();
                    ?>
                        <div class="col-lg-6">
                            <div class="hp-pp-item">
                                <div class="hp-pp-item-image">
                                    <img src="<?php echo get_field('anh_banner'); ?>" alt="<?php echo get_the_title(); ?>" />
                                </div>
                                <div class="hp-pp-item-info">
                                    <div class="hp-pp-item-name"><?php echo get_the_title(); ?></div>
                                    <div class="hp-pp-item-price"><?php echo get_field('gia_ban'); ?></div>
                                    <div class="hp-pp-item-description"><?php echo get_field('mo_ta'); ?></div>
                                    <?php
                                    if (get_field('loai_nhieu_lieu') || get_field('loai_xe')) {
                                    ?>
                                        <div class="hp-pp-item-meta">
                                            <div class="d-flex align-items-center">
                                                <?php
                                                if (get_field('loai_nhieu_lieu')) {
                                                ?>
                                                    <div class="d-inline-flex align-items-center me-4">
                                                        <img height="24px" src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/05/fuel-icon.svg" alt="" />
                                                        <span class="ms-2"><?php echo get_field('loai_nhieu_lieu'); ?></span>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if (get_field('loai_xe')) {
                                                ?>
                                                    <div class="d-inline-flex align-items-center">
                                                        <img height="24px" src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/seat-icon.svg" alt="" />
                                                        <span class="ms-2"><?php echo get_field('loai_xe'); ?></span>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="hp-pp-item-action">
                                        <a href="<?php echo get_the_permalink(); ?>" class="hp-btn">Khám phá</a>
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
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
