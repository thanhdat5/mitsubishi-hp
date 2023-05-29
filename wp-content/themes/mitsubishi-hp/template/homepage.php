<?php
/**
 * Template Name: Trang chủ
 * Description: Mẫu giao diện Trang chủ
 *
 */

get_header();
?>
<section class="banner-hero">
    <div class="banner-hero-items">
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
                <img class="w-100" src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/banner-1.jpg"
                    alt="" />
                <div class="content-right">
                    <img src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/logo-banner-1.png" alt=""
                        class="logo-item w-100" />
                    <div class="title">Ưu đãi mua xe Mitsubishi</div>
                    <div class="intro-item">
                        <p>
                            Phiên bản diện mạo thể thao bật chất cá tính, mang đậm chất
                            riêng.
                        </p>
                    </div>
                    <button class="btn"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
                <img class="w-100" src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05//banner-2.jpg"
                    alt="" />
                <div class="content-right">
                    <img src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/logo-banner-2.png" alt=""
                        class="logo-item w-100" />
                    <div class="title">Vẹn toàn thành công, chu toàn tổ ấm!</div>
                    <div class="intro-item">
                        <p>
                            Điểm nhấn phong cách dành cho quý ông thành đạt trong cả sự
                            nghiệp và cuộc sống.
                        </p>
                    </div>
                    <button class="btn"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
                <img class="w-100" src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/banner-3.jpg"
                    alt="" />
                <div class="content-right">
                    <img src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/logo-banner-3.png" alt=""
                        class="logo-item w-100" />
                    <div class="title">Xe qua sử dụng chính hãng</div>
                    <div class="intro-item">
                        <p>
                            Xe sẽ được đội ngũ kỹ thuật viên chuyên nghiệp kiểm tra và
                            đánh giá 160 hạng mục kỹ thuật.
                        </p>
                    </div>
                    <button class="btn"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
                <img class="w-100" src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/banner-4.jpg"
                    alt="" />
                <div class="content-right">
                    <img src="http://localhost/mitsubishi-hp/wp-content/uploads/2023/05/logo-banner-4.png" alt=""
                        class="logo-item w-100" />
                    <div class="title">
                        TỰ TIN VỮNG LÁI <br />
                        THOẢI MÁI PHIÊU LƯU
                    </div>
                    <div class="intro-item">
                        <p>
                            Tận hưởng phong cách SUV và trải nghiệm lái đầy ấn tượng
                            cùng các nâng cấp về an toàn và vận hành.
                        </p>
                    </div>
                    <button class="btn"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mit-production text-center">
    <div class="mit-title">Sản phẩm</div>
    <div class="hp-product-versions-items">
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
            <?php
                    while ($q->have_posts()) {
                        $q->the_post();
                    ?>
           
             <a href="<?php echo get_permalink(); ?>">
             <div  class="hp-product-version-item">
                    <div class="hp-pv-hover">
                        <div class="hp-pv-hover-inner"  style="background-image: url(<?php echo get_field('anh_hover'); ?>)"></div>
                    </div>
                    <div class="hp-pv-image">
                        <img class="w-100" src="<?php echo get_field('pb1_hinh_anh'); ?>" alt="" />
                    </div>
                    <div class="hp-pv-name"><?php echo get_the_title(); ?></div>
                    <div class="hp-pv-price">Giá: <?php echo get_field('pb1_gia_ban'); ?></div>
                </div>

             </a>
           
            <?php
                        $index++;
                    }
                    wp_reset_postdata();
                    ?>
    <?php
        }
        ?>
 </div>
    <button class="hp-btn"><span>Tìm hiểu thêm</span></button>
</section>
<?php
get_footer();