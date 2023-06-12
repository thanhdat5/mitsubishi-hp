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
                <img class="w-100" src="<?php echo get_field('anh_banner_1'); ?>" alt="" />
                <div class="content-right">
                    <img src="<?php echo get_field('anh_logo_banner_1'); ?>" alt="" class="logo-item w-100" />
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
                <img class="w-100" src="<?php echo get_field('anh_banner_2'); ?>" alt="" />
                <div class="content-right">
                    <img src="<?php echo get_field('anh_logo_banner_2'); ?>" alt="" class="logo-item w-100" />
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
                <img class="w-100" src="<?php echo get_field('anh_banner_3'); ?>" alt="" />
                <div class="content-right">
                    <img src="<?php echo get_field('anh_logo_banner_3'); ?>" alt="" class="logo-item w-100" />
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
                <img class="w-100" src="<?php echo get_field('anh_banner_4'); ?>" alt="" />
                <div class="content-right">
                    <img src="<?php echo get_field('anh_logo_banner_4'); ?>" alt="" class="logo-item w-100" />
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
            <div class="hp-product-version-item">
                <div class="hp-pv-hover">
                    <div class="hp-pv-hover-inner" style="background-image: url(<?php echo get_field('anh_hover'); ?>)">
                    </div>
                </div>
                <div class="hp-pv-image">
                    <img src="<?php echo get_field('pb1_hinh_anh'); ?>" alt="" />
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
    <?php echo get_field('tat_ca_san_pham'); ?>
</section>
<div class="hp-product-banner"
    style="background-image: url(https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/home-trai-nghiem-xe-section.webp?v=2022-08-11-1420);">
    <div class="container">
        <div class="hp-pb-inner text-justify-center">
            <!-- <div class="hp-pb-image">
					<img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/attrage-logo.svg" alt="" />
				</div> -->
            <h1 class="hp-pb-heading">
                <p>Trải nghiệm <br /> Các mẫu xe Mitsubishi</p>
            </h1>
            <p class="hp-pb-description">Lịch trưng bày và lái thử xe Mitsubishi tại Nhà phân phối trên toàn quốc
            </p>
            <div class="hp-pb-action">
                <a class="hp-btn hp-btn-white" href="#">XEM THÊM</a>
            </div>
        </div>
    </div>
</div>
<div class="hp-service-item hp-card-animation ">
    <div class="row g-0 align-items-center">
        <div class="col-md-6 ">
            <div class="hp-si-image">
                <div class="hp-si-image-inner">
                    <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/12/vnE-Award-Visual-3A.webp"
                        class="img-100" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="hp-si-content">
                <h2 class="hp-si-title">MITSUBISHI XPANDER - MẪU XE MPV CỦA NĂM 2022</h2>
                <div class="hp-si-body">
                    <p>Ngày 22 tháng 12 năm 2022, Mitsubishi Xpander được vinh danh ở hạng mục “Mẫu xe MPV của năm
                        2022” lần thứ hai liên tiếp, tại lễ trao giải Car Awards 2022 do Báo điện tử VnExpress tổ
                        chức.</p>
                </div>
                <a href="http://localhost/mitsubishi-hp/dich-vu/bao-duong-dinh-ky/" class="hp-btn">Tìm hiểu thêm
                    tiết</a>
            </div>
        </div>
    </div>
</div>
<section class="hp-preview">
    <div class="hp-preview-select">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 pe-xl-0">
                    <h2>Chọn mẫu xe</h2>
                    <p>Cùng Mitsubishi Motors Việt Nam chọn lựa mẫu xe phù hợp nhất với bạn.</p>
                    <div class="hp-ps-form">
                        <label>LỰA CHỌN</label>
                        <div class="dropdown">
                            <button class="hp-select dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span id="Car_Selected">Xpander Cross</span>
                            </button>
                            <ul class="dropdown-menu w-100" id="Car_Options">
                                <li>
                                    <div id="Car_0_Option" class="dropdown-item">Xpander Cross</a></div>
                                <li>
                                    <div id="Car_1_Option" class="dropdown-item">Attrage</a></div>
                                <li>
                                    <div id="Car_2_Option" class="dropdown-item">Xpander</a></div>
                                <li>
                                    <div id="Car_3_Option" class="dropdown-item">Outlander</a></div>
                                <li>
                                    <div id="Car_4_Option" class="dropdown-item">Pajero Sport</a></div>
                                <li>
                                    <div id="Car_5_Option" class="dropdown-item">Triton Athlete</a></div>
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="hp-btn w-100">Cấu hình xe</button>
                </div>
            </div>
        </div>
    </div>
    <div class="hp-preview-model">
        <div class="row justify-content-end">
            <div class="col-lg-8">
                <div class="hp-pm-car" id="Car_0_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img class="shadow-item"
                                src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_khung_camden.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_banhxe.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_banhxe.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>

                <div class="hp-pm-car" id="Car_1_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img class="shadow-item"
                                src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/attrage-khungxe-trang2-min.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/attrage-wheel-2.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/attrage-wheel-2.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>

                <div class="hp-pm-car" id="Car_2_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img class="shadow-item"
                                src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/xpander-khungxe-trang.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/xpander-wheel.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/xpander-wheel.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>

                <div class="hp-pm-car" id="Car_3_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img class="shadow-item"
                                src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/outlander-khungxe-trang.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/outlander-wheel2.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/outlander-wheel2.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>

                <div class="hp-pm-car" id="Car_4_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/pa%CC%A3ero-sport-khung-trang.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/pa%CC%A3ero-sport-wheel.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/03/pa%CC%A3ero-sport-wheel.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>

                <div class="hp-pm-car" id="Car_5_Model">
                    <div class="hp-pm-car-bg"></div>
                    <div class="hp-pm-car-inner">
                        <div class="hp-pm-car-item">
                            <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/xpander_cross_bongxe_camden.webp"
                                alt="" />
                            <div class="hp-pm-car-body">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/new-triton-athlete-side-cam.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel top">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/new-triton-athlete-wheel.webp"
                                    alt="" />
                            </div>
                            <div class="hp-pm-car-wheel bottom">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/new-triton-athlete-wheel.webp"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="hp-pm-controls">
                        <button class="hp-pm-arrow prev"></button>
                        <div class="hp-pm-paging">01<span>/</span>05</div>
                        <button class="hp-pm-arrow next"></button>
                    </div>
                    <div class="hp-pm-colors"></div>
                    <div class="hp-pm-text"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="hp-sect-services">
    <div class="row g-0">
        <div class="col-12 col-md-4">
            <a href="#" class="hp-service-card">
                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/home-page-promotion.webp?v=2022-08-11-1420"
                    alt="" />
                <div class="hp-sc-body">
                    <h2>Khuyến mại</h2>
                    <p>Cập nhật những chương trình ưu đãi hấp dẫn cho khách hàng mua xe Mitsubishi.</p>
                    <div>Tìm hiểu thêm</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="#" class="hp-service-card">
                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/home-page-maintenance.webp?v=2022-08-11-1420"
                    alt="" />
                <div class="hp-sc-body">
                    <h2>Bảo dưỡng</h2>
                    <p>Dịch vụ hậu mãi chất lượng với đội ngũ kỹ thuật viên chuyên nghiệp.</p>
                    <div>Tìm hiểu thêm</div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="#" class="hp-service-card">
                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2022/05/home-page-dealer.webp?v=2022-08-11-1420"
                    alt="" />
                <div class="hp-sc-body">
                    <h2>Nhà Phân Phối</h2>
                    <p>Với hơn 50 nhà phân phối ủy quyền rộng khắp trên cả nước với cơ sở vật chất hiện đại.</p>
                    <div>Tìm hiểu thêm</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="hp-sect-news">
    <div class="container">
        <h2 class="hp-sect-news-title">Tin tức</h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#" class="hp-news-item">
                            <div class="hp-ni-content">
                                <div class="date">Thứ 3, 13 Tháng sáu 2017</div>
                                <div class="title">Chương trình “Thử thách tiết kiệm nhiên liệu”</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="hp-news-item">
                            <div class="hp-ni-content">
                                <div class="date">Thứ 4, 22 Tháng ba 2017</div>
                                <div class="title">BTC cân nhắc điều chỉnh thuế TTĐB đối với xe bán tải lên 60%
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="#" class="hp-news-item-full">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="hp-ni-content">
                                <div class="date">Thứ 4, 22 Tháng ba 2017</div>
                                <div class="title">BTC cân nhắc điều chỉnh thuế TTĐB đối với xe bán tải lên 60%
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2020/04/newtriton-banner-mobile.webp?v=2022-08-11-1420"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="hp-news-item-highlight"
                    style="background-image: url(https://www.mitsubishi-motors.com.vn/storage/content/w/wp-content/uploads/2020/01/mitsubishi-thong-tin-trieu-hoi-thumbnail.webp?v=2022-08-11-1420);">
                    <div class="hp-ni-content">
                        <div class="date">Thứ 4, 22 Tháng ba 2017</div>
                        <div class="title">BTC cân nhắc điều chỉnh thuế TTĐB đối với xe bán tải lên 60%
                        </div>
                    </div>
                </a>
                <a href="#" class="hp-news-item">
                    <div class="hp-ni-content">
                        <div class="date">Thứ 4, 22 Tháng ba 2017</div>
                        <div class="title">BTC cân nhắc điều chỉnh thuế TTĐB đối với xe bán tải lên 60%
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="hp-news-all">
            <a href="#" class="hp-btn">Xem tất cả</a>
        </div>
    </div>
</div>
<?php
get_footer();