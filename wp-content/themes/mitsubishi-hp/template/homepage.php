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
                <img class="w-100" src="<?php echo get_field('anh_banner_1'); ?>"
                    alt="" />
                <div class="content-right">
                    <img src="<?php echo get_field('anh_logo_banner_1'); ?>" alt=""
                        class="logo-item w-100" />
                    <div class="title">Ưu đãi mua xe Mitsubishi</div>
                    <div class="intro-item">
                        <span>
                            Phiên bản diện mạo thể thao bật chất cá tính, mang đậm chất
                            riêng.
                        </span>
                    </div>
                    <button class="hp-btn hp-btn-white"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
            <img class="w-100" src="<?php echo get_field('anh_banner_2'); ?>"
                    alt="" />
                <div class="content-right">
                <img src="<?php echo get_field('anh_logo_banner_2'); ?>" alt=""
                        class="logo-item w-100" />
                    <div class="title">Vẹn toàn thành công, chu toàn tổ ấm!</div>
                    <div class="intro-item">
                        <span>
                            Điểm nhấn phong cách dành cho quý ông thành đạt trong cả sự
                            nghiệp và cuộc sống.
                        </span>
                    </div>
                    <button class="hp-btn hp-btn-white"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
            <img class="w-100" src="<?php echo get_field('anh_banner_3'); ?>"
                    alt="" />
                <div class="content-right">
                <img src="<?php echo get_field('anh_logo_banner_3'); ?>" alt=""
                        class="logo-item w-100" />
                    <div class="title">Xe qua sử dụng chính hãng</div>
                    <div class="intro-item">
                        <span>
                            Xe sẽ được đội ngũ kỹ thuật viên chuyên nghiệp kiểm tra và
                            đánh giá 160 hạng mục kỹ thuật.
                        </span>
                    </div>
                    <button class="hp-btn hp-btn-white"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
        <div class="banner-hero-item">
            <div class="banner-hero-item-content">
            <img class="w-100" src="<?php echo get_field('anh_banner_4'); ?>"
                    alt="" />
                <div class="content-right">
                <img src="<?php echo get_field('anh_logo_banner_4'); ?>" alt=""
                        class="logo-item w-100" />
                    <div class="title">
                        TỰ TIN VỮNG LÁI <br />
                        THOẢI MÁI PHIÊU LƯU
                    </div>
                    <div class="intro-item">
                        <span>
                            Tận hưởng phong cách SUV và trải nghiệm lái đầy ấn tượng
                            cùng các nâng cấp về an toàn và vận hành.
                        </span>
                    </div>
                    <button class="hp-btn hp-btn-white"><span>Tìm hiểu thêm</span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mit-production text-center">
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
                        <img  src="<?php echo get_field('pb1_hinh_anh'); ?>" alt="" />
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
<div class="hp-product-banner" style="background-image: url(https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/home-trai-nghiem-xe-section.webp?v=2022-08-11-1420);">
		<div class="container">
			<div class="hp-pb-inner">
				<!-- <div class="hp-pb-image">
					<img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/attrage-logo.svg" alt="" />
				</div> -->
				<h1 class="hp-pb-heading"><p>Trải nghiệm <br/>  Các mẫu xe Mitsubishi</p></h1>
						<p class="hp-pb-description">Lịch trưng bày và lái thử xe Mitsubishi tại Nhà phân phối trên toàn quốc</p>			
				<div class="hp-pb-action">
					<a class="hp-btn hp-btn-white" href="#">XEM THÊM</a>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();