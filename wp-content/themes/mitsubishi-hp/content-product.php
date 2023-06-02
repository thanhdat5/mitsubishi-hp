<?php

/**
 * The template for displaying content product in the index.php template.
 */
?>

<div class="hp-product-page">
    <div class="hp-product-banner" style="background-image: url(<?php echo get_field('anh_banner'); ?>);">
        <div class="container">
            <div class="hp-pb-inner">
                <div class="hp-pb-image">
                    <img src="<?php echo get_field('logo'); ?>" alt="<?php echo get_field('slogan'); ?>" />
                </div>
                <h1 class="hp-pb-heading"><?php echo get_field('slogan'); ?></h1>
                <p class="hp-pb-description"><?php echo get_field('mo_ta_ngan'); ?></p>
                <ul class="hp-pb-features">
                    <?php
					if (get_field('tinh_nang_1')) {
					?>
                    <li class="hp-pb-feature">
                        <img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/pajero-sport-safety-icon.svg"
                            alt="" />
                        <span><?php echo get_field('tinh_nang_1'); ?></span>
                    </li>
                    <?php
					}
					?>

                    <?php
					if (get_field('tinh_nang_2')) {
					?>
                    <li class="hp-pb-feature">
                        <img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/pajero-sport-automatic-icon.svg"
                            alt="" />
                        <span><?php echo get_field('tinh_nang_2'); ?></span>
                    </li>
                    <?php
					}
					?>

                    <?php
					if (get_field('tinh_nang_3')) {
					?>
                    <li class="hp-pb-feature">
                        <img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/pejero-sport-electric-icon.svg"
                            alt="" />
                        <span><?php echo get_field('tinh_nang_3'); ?></span>
                    </li>
                    <?php
					}
					?>

                    <?php
					if (get_field('tinh_nang_4')) {
					?>
                    <li class="hp-pb-feature">
                        <img src="https://www.mitsubishi-motors.com.vn/w/wp-content/uploads/2022/04/pajero-sport-safety-icon.svg"
                            alt="" />
                        <span><?php echo get_field('tinh_nang_4'); ?></span>
                    </li>
                    <?php
					}
					?>
                </ul>
                <div class="hp-pb-action">
                    <a class="hp-btn hp-btn-white" href="#DangKyLaiThu">ĐĂNG KÝ LÁI THỬ</a>
                    <a class="hp-btn hp-btn-white" href="<?php echo get_field('link_brochure'); ?>">TẢI BROCHURE</a>
                </div>
            </div>
        </div>
    </div>

    <?php
	$total_version = 0;
	if (get_field('pb1_ten_phien_ban')) {
		$total_version += 1;
	}
	if (get_field('pb2_ten_phien_ban')) {
		$total_version += 1;
	}
	if (get_field('pb3_ten_phien_ban')) {
		$total_version += 1;
	}
	if ($total_version > 1) {
	?>
    <div class="hp-product-versions">
        <div class="container">
            <div class="row justify-content-center">
                <?php
					if (get_field('pb1_ten_phien_ban')) {
					?>
                <div class="col-4 col-md-4 col-lg-4">
                    <div id="SelectVersionImage1" class="hp-product-version">
                        <div class="hp-pv-hover">
                            <div class="hp-pv-hover-inner"></div>
                        </div>
                        <div class="hp-pv-image">
                            <img src="<?php echo get_field('pb1_hinh_anh_thumbnail'); ?>" alt="" />
                        </div>
                        <div class="hp-pv-name"><?php echo get_field('pb1_ten_phien_ban'); ?></div>
                        <div class="hp-pv-price">Giá: <?php echo get_field('pb1_gia_ban'); ?></div>
                    </div>
                </div>
                <?php
					}
					?>

                <?php
					if (get_field('pb2_ten_phien_ban')) {
					?>
                <div class="col-4 col-md-4 col-lg-4">
                    <div id="SelectVersionImage2" class="hp-product-version">
                        <div class="hp-pv-hover">
                            <div class="hp-pv-hover-inner"></div>
                        </div>
                        <div class="hp-pv-image">
                            <img src="<?php echo get_field('pb2_hinh_anh_thumbnail'); ?>" alt="" />
                        </div>
                        <div class="hp-pv-name"><?php echo get_field('pb2_ten_phien_ban'); ?></div>
                        <div class="hp-pv-price">Giá: <?php echo get_field('pb2_gia_ban'); ?></div>
                    </div>
                </div>
                <?php
					}
					?>

                <?php
					if (get_field('pb3_ten_phien_ban')) {
					?>
                <div class="col-4 col-md-4 col-lg-4">
                    <div id="SelectVersionImage3" class="hp-product-version">
                        <div class="hp-pv-hover">
                            <div class="hp-pv-hover-inner"></div>
                        </div>
                        <div class="hp-pv-image">
                            <img src="<?php echo get_field('pb3_hinh_anh_thumbnail'); ?>" alt="" />
                        </div>
                        <div class="hp-pv-name"><?php echo get_field('pb3_ten_phien_ban'); ?></div>
                        <div class="hp-pv-price">Giá: <?php echo get_field('pb3_gia_ban'); ?></div>
                    </div>
                </div>
                <?php
					}
					?>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <div class="hp-product-view">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-5">
                    <ul class="hp-pv-tabs text-uppercase">
                        <?php
						if (get_field('pb1_ten_phien_ban')) {
						?>
                        <li id="SelectVersion1" class="hp-pv-tab"><?php echo get_field('pb1_ten_phien_ban'); ?></li>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb2_ten_phien_ban')) {
						?>
                        <li id="SelectVersion2" class="hp-pv-tab"><?php echo get_field('pb2_ten_phien_ban'); ?></li>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb3_ten_phien_ban')) {
						?>
                        <li id="SelectVersion3" class="hp-pv-tab"><?php echo get_field('pb3_ten_phien_ban'); ?></li>
                        <?php
						}
						?>
                    </ul>
                    <div class="hp-pv-infors">
                        <?php
						if (get_field('pb1_ten_phien_ban')) {
						?>
                        <div id="VersionInfo1" class="hp-pv-info">
                            <h2><?php echo get_field('pb1_ten_phien_ban'); ?></h2>
                            <div>
                                <p><?php echo get_field('pb1_mo_ta_ngan'); ?></p>
                            </div>
                            <h5>Giá: <?php echo get_field('pb1_gia_ban'); ?></h5>
                            <h5>Trang thiết bị</h5>
                            <?php echo get_field('pb1_trang_thiet_bi'); ?>
                            <a class="hp-view-compare" href="#">Xem thêm</a>
                        </div>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb2_ten_phien_ban')) {
						?>
                        <div id="VersionInfo2" class="hp-pv-info">
                            <h2><?php echo get_field('pb2_ten_phien_ban'); ?></h2>
                            <div>
                                <p><?php echo get_field('pb2_mo_ta_ngan'); ?></p>
                            </div>
                            <h5>Giá: <?php echo get_field('pb2_gia_ban'); ?></h5>
                            <h5>Trang thiết bị</h5>
                            <?php echo get_field('pb2_trang_thiet_bi'); ?>
                            <a class="hp-view-compare" href="#">Xem thêm</a>
                        </div>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb3_ten_phien_ban')) {
						?>
                        <div id="VersionInfo3" class="hp-pv-info">
                            <h2><?php echo get_field('pb3_ten_phien_ban'); ?></h2>
                            <div>
                                <p><?php echo get_field('pb3_mo_ta_ngan'); ?></p>
                            </div>
                            <h5>Giá: <?php echo get_field('pb3_gia_ban'); ?></h5>
                            <h5>Trang thiết bị</h5>
                            <?php echo get_field('pb3_trang_thiet_bi'); ?>
                            <a class="hp-view-compare" href="#">Xem thêm</a>
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="hp-pv-images">
                        <?php
						if (get_field('pb1_ten_phien_ban')) {
						?>
                        <div id="VersionImage1" class="hp-pv-image">
                            <img src="<?php echo get_field('pb1_hinh_anh'); ?>" alt="" />
                            <p>* Lưu ý: Hình ảnh và màu sắc có thể khác với thực tế. Thông số kỹ thuật và trang thiết bị
                                có thể thay đổi từ nhà sản xuất mà không cần báo trước..</p>
                        </div>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb2_ten_phien_ban')) {
						?>
                        <div id="VersionImage2" class="hp-pv-image">
                            <img src="<?php echo get_field('pb2_hinh_anh'); ?>" alt="" />
                            <p>* Lưu ý: Hình ảnh và màu sắc có thể khác với thực tế. Thông số kỹ thuật và trang thiết bị
                                có thể thay đổi từ nhà sản xuất mà không cần báo trước..</p>
                        </div>
                        <?php
						}
						?>

                        <?php
						if (get_field('pb3_ten_phien_ban')) {
						?>
                        <div id="VersionImage3" class="hp-pv-image">
                            <img src="<?php echo get_field('pb3_hinh_anh'); ?>" alt="" />
                            <p>* Lưu ý: Hình ảnh và màu sắc có thể khác với thực tế. Thông số kỹ thuật và trang thiết bị
                                có thể thay đổi từ nhà sản xuất mà không cần báo trước..</p>
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hp-compare d-none" id="CompareList">
        <div class="container">
            <h2>Trang thiết bị</h2>
            <div class="hp-compare-models">
                <?php
				$col_size = 12;
				if ($total_version == 2) {
					$col_size = 6;
				}
				if ($total_version == 3) {
					$col_size = 4;
				}
				?>
                <div class="row gx-5 justify-content-center">
                    <?php
					if (get_field('pb1_ten_phien_ban')) {
					?>
                    <div
                        class="col-<?php echo $total_version == 1 ? '6' : $col_size; ?> col-md-<?php echo $total_version == 1 ? '6' : $col_size; ?> col-lg-<?php echo $total_version == 1 ? '6' : $col_size; ?>">
                        <div class="hp-compare-model" id="CompareVersion1">
                            <div class="hp-cm-image">
                                <?php
									if (get_field('pb1_mau_1_ten')) {
									?>
                                <img id="CompareVersion1Image1" class="w-100"
                                    src="<?php echo get_field('pb1_mau_1_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_2_ten')) {
									?>
                                <img id="CompareVersion1Image2" class="w-100"
                                    src="<?php echo get_field('pb1_mau_2_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_3_ten')) {
									?>
                                <img id="CompareVersion1Image3" class="w-100"
                                    src="<?php echo get_field('pb1_mau_3_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_4_ten')) {
									?>
                                <img id="CompareVersion1Image4" class="w-100"
                                    src="<?php echo get_field('pb1_mau_4_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_5_ten')) {
									?>
                                <img id="CompareVersion1Image5" class="w-100"
                                    src="<?php echo get_field('pb1_mau_5_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-name"><?php echo get_field('pb1_ten_phien_ban'); ?></div>
                            <div class="hp-cm-price">Giá: <?php echo get_field('pb1_gia_ban'); ?></div>
                            <div class="hp-cm-colors gap-1 d-flex">
                                <?php
									if (get_field('pb1_mau_1_ten')) {
									?>
                                <span id="CompareVersion1ColorCode1"
                                    style="background-color:<?php echo get_field('pb1_mau_1_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_2_ten')) {
									?>
                                <span id="CompareVersion1ColorCode2"
                                    style="background-color:<?php echo get_field('pb1_mau_2_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_3_ten')) {
									?>
                                <span id="CompareVersion1ColorCode3"
                                    style="background-color:<?php echo get_field('pb1_mau_3_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_4_ten')) {
									?>
                                <span id="CompareVersion1ColorCode4"
                                    style="background-color:<?php echo get_field('pb1_mau_4_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_5_ten')) {
									?>
                                <span id="CompareVersion1ColorCode5"
                                    style="background-color:<?php echo get_field('pb1_mau_5_ma'); ?>"></span>
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-color">
                                <?php
									if (get_field('pb1_mau_1_ten')) {
									?>
                                <span id="CompareVersion1Color1"><?php echo get_field('pb1_mau_1_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_2_ten')) {
									?>
                                <span id="CompareVersion1Color2"><?php echo get_field('pb1_mau_2_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_3_ten')) {
									?>
                                <span id="CompareVersion1Color3"><?php echo get_field('pb1_mau_3_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_4_ten')) {
									?>
                                <span id="CompareVersion1Color4"><?php echo get_field('pb1_mau_4_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb1_mau_5_ten')) {
									?>
                                <span id="CompareVersion1Color5"><?php echo get_field('pb1_mau_5_ten'); ?></span>
                                <?php
									}
									?>
                            </div>
                        </div>
                    </div>
                    <?php
					}
					?>

                    <?php
					if (get_field('pb2_ten_phien_ban')) {
					?>
                    <div
                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?>col-lg-<?php echo $col_size; ?>">
                        <div class="hp-compare-model" id="CompareVersion2">
                            <div class="hp-cm-image">
                                <?php
									if (get_field('pb2_mau_1_ten')) {
									?>
                                <img id="CompareVersion2Image1" class="w-100"
                                    src="<?php echo get_field('pb2_mau_1_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_2_ten')) {
									?>
                                <img id="CompareVersion2Image2" class="w-100"
                                    src="<?php echo get_field('pb2_mau_2_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_3_ten')) {
									?>
                                <img id="CompareVersion2Image3" class="w-100"
                                    src="<?php echo get_field('pb2_mau_3_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_4_ten')) {
									?>
                                <img id="CompareVersion2Image4" class="w-100"
                                    src="<?php echo get_field('pb2_mau_4_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_5_ten')) {
									?>
                                <img id="CompareVersion2Image5" class="w-100"
                                    src="<?php echo get_field('pb2_mau_5_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-name"><?php echo get_field('pb2_ten_phien_ban'); ?></div>
                            <div class="hp-cm-price">Giá: <?php echo get_field('pb2_gia_ban'); ?></div>
                            <div class="hp-cm-colors gap-1 d-flex">
                                <?php
									if (get_field('pb2_mau_1_ten')) {
									?>
                                <span id="CompareVersion2ColorCode1"
                                    style="background-color:<?php echo get_field('pb2_mau_1_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_2_ten')) {
									?>
                                <span id="CompareVersion2ColorCode2"
                                    style="background-color:<?php echo get_field('pb2_mau_2_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_3_ten')) {
									?>
                                <span id="CompareVersion2ColorCode3"
                                    style="background-color:<?php echo get_field('pb2_mau_3_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_4_ten')) {
									?>
                                <span id="CompareVersion2ColorCode4"
                                    style="background-color:<?php echo get_field('pb2_mau_4_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_5_ten')) {
									?>
                                <span id="CompareVersion2ColorCode5"
                                    style="background-color:<?php echo get_field('pb2_mau_5_ma'); ?>"></span>
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-color">
                                <?php
									if (get_field('pb2_mau_1_ten')) {
									?>
                                <span id="CompareVersion2Color1"><?php echo get_field('pb2_mau_1_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_2_ten')) {
									?>
                                <span id="CompareVersion2Color2"><?php echo get_field('pb2_mau_2_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_3_ten')) {
									?>
                                <span id="CompareVersion2Color3"><?php echo get_field('pb2_mau_3_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_4_ten')) {
									?>
                                <span id="CompareVersion2Color4"><?php echo get_field('pb2_mau_4_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb2_mau_5_ten')) {
									?>
                                <span id="CompareVersion2Color5"><?php echo get_field('pb2_mau_5_ten'); ?></span>
                                <?php
									}
									?>
                            </div>
                        </div>
                    </div>
                    <?php
					}
					?>

                    <?php
					if (get_field('pb3_ten_phien_ban')) {
					?>
                    <div
                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                        <div class="hp-compare-model" id="CompareVersion3">
                            <div class="hp-cm-image">
                                <?php
									if (get_field('pb3_mau_1_ten')) {
									?>
                                <img id="CompareVersion3Image1" class="w-100"
                                    src="<?php echo get_field('pb3_mau_1_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_2_ten')) {
									?>
                                <img id="CompareVersion3Image2" class="w-100"
                                    src="<?php echo get_field('pb3_mau_2_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_3_ten')) {
									?>
                                <img id="CompareVersion3Image3" class="w-100"
                                    src="<?php echo get_field('pb3_mau_3_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_4_ten')) {
									?>
                                <img id="CompareVersion3Image4" class="w-100"
                                    src="<?php echo get_field('pb3_mau_4_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_5_ten')) {
									?>
                                <img id="CompareVersion3Image5" class="w-100"
                                    src="<?php echo get_field('pb3_mau_5_hinh_anh'); ?>" alt="" />
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-name"><?php echo get_field('pb3_ten_phien_ban'); ?></div>
                            <div class="hp-cm-price">Giá: <?php echo get_field('pb3_gia_ban'); ?></div>
                            <div class="hp-cm-colors gap-1 d-flex">
                                <?php
									if (get_field('pb3_mau_1_ten')) {
									?>
                                <span id="CompareVersion3ColorCode1"
                                    style="background-color:<?php echo get_field('pb3_mau_1_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_2_ten')) {
									?>
                                <span id="CompareVersion3ColorCode2"
                                    style="background-color:<?php echo get_field('pb3_mau_2_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_3_ten')) {
									?>
                                <span id="CompareVersion3ColorCode3"
                                    style="background-color:<?php echo get_field('pb3_mau_3_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_4_ten')) {
									?>
                                <span id="CompareVersion3ColorCode4"
                                    style="background-color:<?php echo get_field('pb3_mau_4_ma'); ?>"></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_5_ten')) {
									?>
                                <span id="CompareVersion3ColorCode5"
                                    style="background-color:<?php echo get_field('pb3_mau_5_ma'); ?>"></span>
                                <?php
									}
									?>
                            </div>
                            <div class="hp-cm-color">
                                <?php
									if (get_field('pb3_mau_1_ten')) {
									?>
                                <span id="CompareVersion3Color1"><?php echo get_field('pb3_mau_1_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_2_ten')) {
									?>
                                <span id="CompareVersion3Color2"><?php echo get_field('pb3_mau_2_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_3_ten')) {
									?>
                                <span id="CompareVersion3Color3"><?php echo get_field('pb3_mau_3_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_4_ten')) {
									?>
                                <span id="CompareVersion3Color4"><?php echo get_field('pb3_mau_4_ten'); ?></span>
                                <?php
									}
									?>
                                <?php
									if (get_field('pb3_mau_5_ten')) {
									?>
                                <span id="CompareVersion3Color5"><?php echo get_field('pb3_mau_5_ten'); ?></span>
                                <?php
									}
									?>
                            </div>
                        </div>
                    </div>
                    <?php
					}
					?>
                </div>
            </div>
            <div class="hp-compare-details">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                                KÍCH THƯỚC VÀ TRỌNG LƯỢNG
                            </button>
                        </h2>
                        <div id="collapse0" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Kích thước tổng thể (DàixRộngxCao) -->
                                <?php
								if (
									get_field('pb1_kich_thuoc_tong_the') ||
									get_field('pb2_kich_thuoc_tong_the') ||
									get_field('pb3_kich_thuoc_tong_the')
								) {
								?>
                                <div class="hp-compare-label">Kích thước tổng thể (DàixRộngxCao)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_kich_thuoc_tong_the'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_kich_thuoc_tong_the'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_kich_thuoc_tong_the'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Kích thước thùng xe (DxRxC) -->
                                <?php
								if (
									get_field('pb1_kich_thuoc_thung_xe') ||
									get_field('pb2_kich_thuoc_thung_xe') ||
									get_field('pb3_kich_thuoc_thung_xe')
								) {
								?>
                                <div class="hp-compare-label">Kích thước thùng xe (DxRxC)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_kich_thuoc_thung_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_kich_thuoc_thung_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_kich_thuoc_thung_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoảng cách hai cầu xe (Chiều dài cơ sở) -->
                                <?php
								if (
									get_field('pb1_khoang_cach_hai_cau_xe') ||
									get_field('pb2_khoang_cach_hai_cau_xe') ||
									get_field('pb3_khoang_cach_hai_cau_xe')
								) {
								?>
                                <div class="hp-compare-label">Khoảng cách hai cầu xe (Chiều dài cơ sở)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_khoang_cach_hai_cau_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_khoang_cach_hai_cau_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_khoang_cach_hai_cau_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoảng cách hai bánh xe trước -->
                                <?php
								if (
									get_field('pb1_khoang_cach_hai_banh_xe_truoc') ||
									get_field('pb2_khoang_cach_hai_banh_xe_truoc') ||
									get_field('pb3_khoang_cach_hai_banh_xe_truoc')
								) {
								?>
                                <div class="hp-compare-label">Khoảng cách hai bánh xe trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_khoang_cach_hai_banh_xe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_khoang_cach_hai_banh_xe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_khoang_cach_hai_banh_xe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoảng cách hai bánh xe sau -->
                                <?php
								if (
									get_field('pb1_khoang_cach_hai_banh_xe_sau') ||
									get_field('pb2_khoang_cach_hai_banh_xe_sau') ||
									get_field('pb3_khoang_cach_hai_banh_xe_sau')
								) {
								?>
                                <div class="hp-compare-label">Khoảng cách hai bánh xe sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_khoang_cach_hai_banh_xe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_khoang_cach_hai_banh_xe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_khoang_cach_hai_banh_xe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bán kính quay vòng tối thiểu -->
                                <?php
								if (
									get_field('pb1_ban_kinh_quay_vong_toi_thieu') ||
									get_field('pb2_ban_kinh_quay_vong_toi_thieu') ||
									get_field('pb3_ban_kinh_quay_vong_toi_thieu')
								) {
								?>
                                <div class="hp-compare-label">Bán kính quay vòng tối thiểu</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_ban_kinh_quay_vong_toi_thieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_ban_kinh_quay_vong_toi_thieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_ban_kinh_quay_vong_toi_thieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoảng sáng gầm xe -->
                                <?php
								if (
									get_field('pb1_khoang_sang_gam_xe') ||
									get_field('pb2_khoang_sang_gam_xe') ||
									get_field('pb3_khoang_sang_gam_xe')
								) {
								?>
                                <div class="hp-compare-label">Khoảng sáng gầm xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_khoang_sang_gam_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_khoang_sang_gam_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_khoang_sang_gam_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Trọng lượng không tải -->
                                <?php
								if (
									get_field('pb1_trong_luong_khong_tai') ||
									get_field('pb2_trong_luong_khong_tai') ||
									get_field('pb3_trong_luong_khong_tai')
								) {
								?>
                                <div class="hp-compare-label">Trọng lượng không tải</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_trong_luong_khong_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_trong_luong_khong_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_trong_luong_khong_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Trọng lượng toàn tải -->
                                <?php
								if (
									get_field('pb1_trong_luong_toan_tai') ||
									get_field('pb2_trong_luong_toan_tai') ||
									get_field('pb3_trong_luong_toan_tai')
								) {
								?>
                                <div class="hp-compare-label">Trọng lượng toàn tải</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_trong_luong_toan_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_trong_luong_toan_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_trong_luong_toan_tai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Số chỗ ngồi -->
                                <?php
								if (
									get_field('pb1_so_cho_ngoi') ||
									get_field('pb2_so_cho_ngoi') ||
									get_field('pb3_so_cho_ngoi')
								) {
								?>
                                <div class="hp-compare-label">Số chỗ ngồi</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_so_cho_ngoi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_so_cho_ngoi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_so_cho_ngoi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                ĐỘNG CƠ VÀ VẬN HÀNH
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Loại động cơ -->
                                <?php
								if (
									get_field('pb1_loai_dong_co') ||
									get_field('pb2_loai_dong_co') ||
									get_field('pb3_loai_dong_co')
								) {
								?>
                                <div class="hp-compare-label">Loại động cơ</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_loai_dong_co'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_loai_dong_co'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_loai_dong_co'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Dung tích xylanh -->
                                <?php
								if (
									get_field('pb1_dung_tich_xylanh') ||
									get_field('pb2_dung_tich_xylanh') ||
									get_field('pb3_dung_tich_xylanh')
								) {
								?>
                                <div class="hp-compare-label">Dung tích xylanh</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_dung_tich_xylanh'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_dung_tich_xylanh'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_dung_tich_xylanh'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống nhiên liệu -->
                                <?php
								if (
									get_field('pb1_he_thong_nhien_lieu') ||
									get_field('pb2_he_thong_nhien_lieu') ||
									get_field('pb3_he_thong_nhien_lieu')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống nhiên liệu</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_he_thong_nhien_lieu'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_he_thong_nhien_lieu'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_he_thong_nhien_lieu'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Công suất cực đại -->
                                <?php
								if (
									get_field('pb1_cong_suat_cuc_dai') ||
									get_field('pb2_cong_suat_cuc_dai') ||
									get_field('pb3_cong_suat_cuc_dai')
								) {
								?>
                                <div class="hp-compare-label">Công suất cực đại</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_cong_suat_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_cong_suat_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_cong_suat_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Mômen xoắn cực đại -->
                                <?php
								if (
									get_field('pb1_momen_xoan_cuc_dai') ||
									get_field('pb2_momen_xoan_cuc_dai') ||
									get_field('pb3_momen_xoan_cuc_dai')
								) {
								?>
                                <div class="hp-compare-label">Mômen xoắn cực đại</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_momen_xoan_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_momen_xoan_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_momen_xoan_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Tốc độ cực đại -->
                                <?php
								if (
									get_field('pb1_toc_do_cuc_dai') ||
									get_field('pb2_toc_do_cuc_dai') ||
									get_field('pb3_toc_do_cuc_dai')
								) {
								?>
                                <div class="hp-compare-label">Tốc độ cực đại</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_toc_do_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_toc_do_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_toc_do_cuc_dai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Dung tích thùng nhiên liệu -->
                                <?php
								if (
									get_field('pb1_dung_tich_thung_nhien_lieu') ||
									get_field('pb2_dung_tich_thung_nhien_lieu') ||
									get_field('pb3_dung_tich_thung_nhien_lieu')
								) {
								?>
                                <div class="hp-compare-label">Dung tích thùng nhiên liệu</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_dung_tich_thung_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_dung_tich_thung_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_dung_tich_thung_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Mức tiêu hao nhiên liệu (Kết hợp/Đô thị/Ngoài đô thị) -->
                                <?php
								if (
									get_field('pb1_muc_tieu_hao_nhien_lieu') ||
									get_field('pb2_muc_tieu_hao_nhien_lieu') ||
									get_field('pb3_muc_tieu_hao_nhien_lieu')
								) {
								?>
                                <div class="hp-compare-label">Mức tiêu hao nhiên liệu (Kết hợp/Đô thị/Ngoài đô thị)
                                </div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_muc_tieu_hao_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_muc_tieu_hao_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_muc_tieu_hao_nhien_lieu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                TRUYỀN ĐỘNG VÀ HỆ THỐNG TREO
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Hộp số -->
                                <?php
								if (
									get_field('pb1_hop_so') ||
									get_field('pb2_hop_so') ||
									get_field('pb3_hop_so')
								) {
								?>
                                <div class="hp-compare-label">Hộp số</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_hop_so'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_hop_so'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_hop_so'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Truyền động -->
                                <?php
								if (
									get_field('pb1_truyen_dong') ||
									get_field('pb2_truyen_dong') ||
									get_field('pb3_truyen_dong')
								) {
								?>
                                <div class="hp-compare-label">Truyền động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_truyen_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_truyen_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_truyen_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoá vi sai cầu sau -->
                                <?php
								if (
									get_field('pb1_khoa_vi_sai_cau_sau') ||
									get_field('pb2_khoa_vi_sai_cau_sau') ||
									get_field('pb3_khoa_vi_sai_cau_sau')
								) {
								?>
                                <div class="hp-compare-label">Khoá vi sai cầu sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_khoa_vi_sai_cau_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_khoa_vi_sai_cau_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_khoa_vi_sai_cau_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Trợ lực lái -->
                                <?php
								if (
									get_field('pb1_tro_luc_lai') ||
									get_field('pb2_tro_luc_lai') ||
									get_field('pb3_tro_luc_lai')
								) {
								?>
                                <div class="hp-compare-label">Trợ lực lái</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_tro_luc_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_tro_luc_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_tro_luc_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống treo trước -->
                                <?php
								if (
									get_field('pb1_he_thong_treo_truoc') ||
									get_field('pb2_he_thong_treo_truoc') ||
									get_field('pb3_he_thong_treo_truoc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống treo trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_he_thong_treo_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_he_thong_treo_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_he_thong_treo_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống treo sau -->
                                <?php
								if (
									get_field('pb1_he_thong_treo_sau') ||
									get_field('pb2_he_thong_treo_sau') ||
									get_field('pb3_he_thong_treo_sau')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống treo sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_he_thong_treo_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_he_thong_treo_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_he_thong_treo_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Kích thước lốp xe trước/sau -->
                                <?php
								if (
									get_field('pb1_kich_thuoc_lop_xe_truoc_sau') ||
									get_field('pb2_kich_thuoc_lop_xe_truoc_sau') ||
									get_field('pb3_kich_thuoc_lop_xe_truoc_sau')
								) {
								?>
                                <div class="hp-compare-label">Kích thước lốp xe trước/sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_kich_thuoc_lop_xe_truoc_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_kich_thuoc_lop_xe_truoc_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_kich_thuoc_lop_xe_truoc_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Phanh trước -->
                                <?php
								if (
									get_field('pb1_phanh_truoc') ||
									get_field('pb2_phanh_truoc') ||
									get_field('pb3_phanh_truoc')
								) {
								?>
                                <div class="hp-compare-label">Phanh trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_phanh_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_phanh_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_phanh_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Phanh sau -->
                                <?php
								if (
									get_field('pb1_phanh_sau') ||
									get_field('pb2_phanh_sau') ||
									get_field('pb3_phanh_sau')
								) {
								?>
                                <div class="hp-compare-label">Phanh sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_phanh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_phanh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_phanh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                NGOẠI THẤT
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Ốp cản trước/sau thiết kế mới -->
                                <?php
								if (
									get_field('pb1_op_can_truoc_sau_thiet_ke_moi') ||
									get_field('pb2_op_can_truoc_sau_thiet_ke_moi') ||
									get_field('pb3_op_can_truoc_sau_thiet_ke_moi')
								) {
								?>
                                <div class="hp-compare-label">Ốp cản trước/sau thiết kế mới</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_op_can_truoc_sau_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_op_can_truoc_sau_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_op_can_truoc_sau_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ốp vè trước cùng màu thân xe -->
                                <?php
								if (
									get_field('pb1_op_ve_truoc_cung_mau_than_xe') ||
									get_field('pb2_op_ve_truoc_cung_mau_than_xe') ||
									get_field('pb3_op_ve_truoc_cung_mau_than_xe')
								) {
								?>
                                <div class="hp-compare-label">Ốp vè trước cùng màu thân xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_op_ve_truoc_cung_mau_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_op_ve_truoc_cung_mau_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_op_ve_truoc_cung_mau_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống đèn chiếu sáng phía trước -->
                                <?php
								if (
									get_field('pb1_he_thong_den_chieu_sang_phia_truoc') ||
									get_field('pb2_he_thong_den_chieu_sang_phia_truoc') ||
									get_field('pb3_he_thong_den_chieu_sang_phia_truoc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống đèn chiếu sáng phía trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_den_chieu_sang_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_den_chieu_sang_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_den_chieu_sang_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn định vị LED -->
                                <?php
								if (
									get_field('pb1_den_dinh_vi_led') ||
									get_field('pb2_den_dinh_vi_led') ||
									get_field('pb3_den_dinh_vi_led')
								) {
								?>
                                <div class="hp-compare-label">Đèn định vị LED</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_den_dinh_vi_led'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_den_dinh_vi_led'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_den_dinh_vi_led'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn LED chiếu sáng ban ngày -->
                                <?php
								if (
									get_field('pb1_den_led_chieu_sang_ban_ngay') ||
									get_field('pb2_den_led_chieu_sang_ban_ngay') ||
									get_field('pb3_den_led_chieu_sang_ban_ngay')
								) {
								?>
                                <div class="hp-compare-label">Đèn LED chiếu sáng ban ngày</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_led_chieu_sang_ban_ngay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_led_chieu_sang_ban_ngay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_led_chieu_sang_ban_ngay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn chào mừng & đèn hỗ trợ chiếu sáng khi rời xe -->
                                <?php
								if (
									get_field('pb1_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe') ||
									get_field('pb2_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe') ||
									get_field('pb3_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe')
								) {
								?>
                                <div class="hp-compare-label">Đèn chào mừng & đèn hỗ trợ chiếu sáng khi rời xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_chao_mung_den_ho_tro_chieu_sang_khi_roi_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống tự động Bật/Tắt đèn chiếu sáng phía trước -->
                                <?php
								if (
									get_field('pb1_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc') ||
									get_field('pb2_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc') ||
									get_field('pb3_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống tự động Bật/Tắt đèn chiếu sáng phía trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_tu_dong_bat_tat_den_chieu_sang_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống điều chỉnh độ cao đèn chiếu sáng -->
                                <?php
								if (
									get_field('pb1_he_thong_dieu_chinh_do_cao_den_chieu_sang') ||
									get_field('pb2_he_thong_dieu_chinh_do_cao_den_chieu_sang') ||
									get_field('pb3_he_thong_dieu_chinh_do_cao_den_chieu_sang')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống điều chỉnh độ cao đèn chiếu sáng</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_dieu_chinh_do_cao_den_chieu_sang'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_dieu_chinh_do_cao_den_chieu_sang'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_dieu_chinh_do_cao_den_chieu_sang'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn pha tự động -->
                                <?php
								if (
									get_field('pb1_den_pha_tu_dong') ||
									get_field('pb2_den_pha_tu_dong') ||
									get_field('pb3_den_pha_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Đèn pha tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_den_pha_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_den_pha_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_den_pha_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn sương mù phía trước LED -->
                                <?php
								if (
									get_field('pb1_den_suong_mu_phia_truoc_led') ||
									get_field('pb2_den_suong_mu_phia_truoc_led') ||
									get_field('pb3_den_suong_mu_phia_truoc_led')
								) {
								?>
                                <div class="hp-compare-label">Đèn sương mù phía trước LED</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_suong_mu_phia_truoc_led'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_suong_mu_phia_truoc_led'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_suong_mu_phia_truoc_led'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn sương mù phía trước -->
                                <?php
								if (
									get_field('pb1_den_suong_mu_phia_truoc') ||
									get_field('pb2_den_suong_mu_phia_truoc') ||
									get_field('pb3_den_suong_mu_phia_truoc')
								) {
								?>
                                <div class="hp-compare-label">Đèn sương mù phía trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_suong_mu_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_suong_mu_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_suong_mu_phia_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ốp đèn sương mù mạ Chrome -->
                                <?php
								if (
									get_field('pb1_op_den_suong_mu_ma_chrome') ||
									get_field('pb2_op_den_suong_mu_ma_chrome') ||
									get_field('pb3_op_den_suong_mu_ma_chrome')
								) {
								?>
                                <div class="hp-compare-label">Ốp đèn sương mù mạ Chrome</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_op_den_suong_mu_ma_chrome'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_op_den_suong_mu_ma_chrome'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_op_den_suong_mu_ma_chrome'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống rửa đèn pha -->
                                <?php
								if (
									get_field('pb1_he_thong_rua_den_pha') ||
									get_field('pb2_he_thong_rua_den_pha') ||
									get_field('pb3_he_thong_rua_den_pha')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống rửa đèn pha</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_rua_den_pha'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_rua_den_pha'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_rua_den_pha'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cụm đèn LED phía sau -->
                                <?php
								if (
									get_field('pb1_cum_den_led_phia_sau') ||
									get_field('pb2_cum_den_led_phia_sau') ||
									get_field('pb3_cum_den_led_phia_sau')
								) {
								?>
                                <div class="hp-compare-label">Cụm đèn LED phía sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cum_den_led_phia_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cum_den_led_phia_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cum_den_led_phia_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn báo phanh thứ ba trên cao -->
                                <?php
								if (
									get_field('pb1_den_bao_phanh_thu_ba_tren_cao') ||
									get_field('pb2_den_bao_phanh_thu_ba_tren_cao') ||
									get_field('pb3_den_bao_phanh_thu_ba_tren_cao')
								) {
								?>
                                <div class="hp-compare-label">Đèn báo phanh thứ ba trên cao</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_bao_phanh_thu_ba_tren_cao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_bao_phanh_thu_ba_tren_cao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_bao_phanh_thu_ba_tren_cao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Kính chiếu hậu -->
                                <?php
								if (
									get_field('pb1_kinh_chieu_hau') ||
									get_field('pb2_kinh_chieu_hau') ||
									get_field('pb3_kinh_chieu_hau')
								) {
								?>
                                <div class="hp-compare-label">Kính chiếu hậu</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_kinh_chieu_hau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_kinh_chieu_hau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_kinh_chieu_hau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cửa sau đóng mở bằng điện -->
                                <?php
								if (
									get_field('pb1_cua_sau_dong_mo_bang_dien') ||
									get_field('pb2_cua_sau_dong_mo_bang_dien') ||
									get_field('pb3_cua_sau_dong_mo_bang_dien')
								) {
								?>
                                <div class="hp-compare-label">Cửa sau đóng mở bằng điện</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cua_sau_dong_mo_bang_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cua_sau_dong_mo_bang_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cua_sau_dong_mo_bang_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Tay nắm cửa ngoài -->
                                <?php
								if (
									get_field('pb1_tay_nam_cua_ngoai') ||
									get_field('pb2_tay_nam_cua_ngoai') ||
									get_field('pb3_tay_nam_cua_ngoai')
								) {
								?>
                                <div class="hp-compare-label">Tay nắm cửa ngoài</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_tay_nam_cua_ngoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_tay_nam_cua_ngoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_tay_nam_cua_ngoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Lưới tản nhiệt -->
                                <?php
								if (
									get_field('pb1_luoi_tan_nhiet') ||
									get_field('pb2_luoi_tan_nhiet') ||
									get_field('pb3_luoi_tan_nhiet')
								) {
								?>
                                <div class="hp-compare-label">Lưới tản nhiệt</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_luoi_tan_nhiet'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_luoi_tan_nhiet'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_luoi_tan_nhiet'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Kính cửa màu sậm (cửa đuôi, cửa sau) -->
                                <?php
								if (
									get_field('pb1_kinh_cua_mau_sam') ||
									get_field('pb2_kinh_cua_mau_sam') ||
									get_field('pb3_kinh_cua_mau_sam')
								) {
								?>
                                <div class="hp-compare-label">Kính cửa màu sậm (cửa đuôi, cửa sau)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_kinh_cua_mau_sam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_kinh_cua_mau_sam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_kinh_cua_mau_sam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cửa cốp đóng/mở điện rảnh tay -->
                                <?php
								if (
									get_field('pb1_cua_cop_dong_mo_dien_ranh_tay') ||
									get_field('pb2_cua_cop_dong_mo_dien_ranh_tay') ||
									get_field('pb3_cua_cop_dong_mo_dien_ranh_tay')
								) {
								?>
                                <div class="hp-compare-label">Cửa cốp đóng/mở điện rảnh tay</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cua_cop_dong_mo_dien_ranh_tay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cua_cop_dong_mo_dien_ranh_tay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cua_cop_dong_mo_dien_ranh_tay'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Gạt nước kính trước -->
                                <?php
								if (
									get_field('pb1_gat_nuoc_kinh_truoc') ||
									get_field('pb2_gat_nuoc_kinh_truoc') ||
									get_field('pb3_gat_nuoc_kinh_truoc')
								) {
								?>
                                <div class="hp-compare-label">Gạt nước kính trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_gat_nuoc_kinh_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_gat_nuoc_kinh_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_gat_nuoc_kinh_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Gạt nước kính sau -->
                                <?php
								if (
									get_field('pb1_gat_nuoc_kinh_sau') ||
									get_field('pb2_gat_nuoc_kinh_sau') ||
									get_field('pb3_gat_nuoc_kinh_sau')
								) {
								?>
                                <div class="hp-compare-label">Gạt nước kính sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_gat_nuoc_kinh_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_gat_nuoc_kinh_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_gat_nuoc_kinh_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Sưởi kính sau -->
                                <?php
								if (
									get_field('pb1_suoi_kinh_sau') ||
									get_field('pb2_suoi_kinh_sau') ||
									get_field('pb3_suoi_kinh_sau')
								) {
								?>
                                <div class="hp-compare-label">Sưởi kính sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_suoi_kinh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_suoi_kinh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_suoi_kinh_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cảm biến BẬT/TẮT gạt mưa tự động -->
                                <?php
								if (
									get_field('pb1_cam_bien_bat_tat_gat_mua_tu_dong') ||
									get_field('pb2_cam_bien_bat_tat_gat_mua_tu_dong') ||
									get_field('pb3_cam_bien_bat_tat_gat_mua_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Cảm biến BẬT/TẮT gạt mưa tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cam_bien_bat_tat_gat_mua_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cam_bien_bat_tat_gat_mua_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cam_bien_bat_tat_gat_mua_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Giá đỡ hành lý trên mui xe -->
                                <?php
								if (
									get_field('pb1_gia_do_hanh_ly_tren_mui_xe') ||
									get_field('pb2_gia_do_hanh_ly_tren_mui_xe') ||
									get_field('pb3_gia_do_hanh_ly_tren_mui_xe')
								) {
								?>
                                <div class="hp-compare-label">Giá đỡ hành lý trên mui xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_gia_do_hanh_ly_tren_mui_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_gia_do_hanh_ly_tren_mui_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_gia_do_hanh_ly_tren_mui_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ăng-ten vây cá -->
                                <?php
								if (
									get_field('pb1_angten_vay_ca') ||
									get_field('pb2_angten_vay_ca') ||
									get_field('pb3_angten_vay_ca')
								) {
								?>
                                <div class="hp-compare-label">Ăng-ten vây cá</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_angten_vay_ca'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_angten_vay_ca'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_angten_vay_ca'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cánh lướt gió đuôi xe -->
                                <?php
								if (
									get_field('pb1_canh_luot_gio_duoi_xe') ||
									get_field('pb2_canh_luot_gio_duoi_xe') ||
									get_field('pb3_canh_luot_gio_duoi_xe')
								) {
								?>
                                <div class="hp-compare-label">Cánh lướt gió đuôi xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_canh_luot_gio_duoi_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_canh_luot_gio_duoi_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_canh_luot_gio_duoi_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Mâm đúc hợp kim thiết kế mới -->
                                <?php
								if (
									get_field('pb1_mam_duc_hop_kim_thiet_ke_moi') ||
									get_field('pb2_mam_duc_hop_kim_thiet_ke_moi') ||
									get_field('pb3_mam_duc_hop_kim_thiet_ke_moi')
								) {
								?>
                                <div class="hp-compare-label">Mâm đúc hợp kim thiết kế mới</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_mam_duc_hop_kim_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_mam_duc_hop_kim_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_mam_duc_hop_kim_thiet_ke_moi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bệ bước hông xe màu đen -->
                                <?php
								if (
									get_field('pb1_be_buoc_hong_xe_mau_den') ||
									get_field('pb2_be_buoc_hong_xe_mau_den') ||
									get_field('pb3_be_buoc_hong_xe_mau_den')
								) {
								?>
                                <div class="hp-compare-label">Bệ bước hông xe màu đen</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_be_buoc_hong_xe_mau_den'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_be_buoc_hong_xe_mau_den'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_be_buoc_hong_xe_mau_den'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Thanh trang trí thể thao -->
                                <?php
								if (
									get_field('pb1_thanh_trang_tri_the_thao') ||
									get_field('pb2_thanh_trang_tri_the_thao') ||
									get_field('pb3_thanh_trang_tri_the_thao')
								) {
								?>
                                <div class="hp-compare-label">Thanh trang trí thể thao</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_thanh_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_thanh_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_thanh_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ốp vè trang trí thể thao -->
                                <?php
								if (
									get_field('pb1_op_ve_trang_tri_the_thao') ||
									get_field('pb2_op_ve_trang_tri_the_thao') ||
									get_field('pb3_op_ve_trang_tri_the_thao')
								) {
								?>
                                <div class="hp-compare-label">Ốp vè trang trí thể thao</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_op_ve_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_op_ve_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_op_ve_trang_tri_the_thao'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ốp cản trước trang trí -->
                                <?php
								if (
									get_field('pb1_op_can_truoc_trang_tri') ||
									get_field('pb2_op_can_truoc_trang_tri') ||
									get_field('pb3_op_can_truoc_trang_tri')
								) {
								?>
                                <div class="hp-compare-label">Ốp cản trước trang trí</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_op_can_truoc_trang_tri'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_op_can_truoc_trang_tri'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_op_can_truoc_trang_tri'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bệ bước cản sau -->
                                <?php
								if (
									get_field('pb1_be_buoc_can_sau') ||
									get_field('pb2_be_buoc_can_sau') ||
									get_field('pb3_be_buoc_can_sau')
								) {
								?>
                                <div class="hp-compare-label">Bệ bước cản sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_be_buoc_can_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_be_buoc_can_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_be_buoc_can_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chắn bùn trước/sau -->
                                <?php
								if (
									get_field('pb1_chan_bun_truoc_sau') ||
									get_field('pb2_chan_bun_truoc_sau') ||
									get_field('pb3_chan_bun_truoc_sau')
								) {
								?>
                                <div class="hp-compare-label">Chắn bùn trước/sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_chan_bun_truoc_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_chan_bun_truoc_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_chan_bun_truoc_sau'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                NỘI THẤT
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Tay lái trợ lực điện -->
                                <?php
								if (
									get_field('pb1_tay_lai_tro_luc_dien') ||
									get_field('pb2_tay_lai_tro_luc_dien') ||
									get_field('pb3_tay_lai_tro_luc_dien')
								) {
								?>
                                <div class="hp-compare-label">Tay lái trợ lực điện</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tay_lai_tro_luc_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tay_lai_tro_luc_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tay_lai_tro_luc_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Vô lăng và cần số bọc da -->
                                <?php
								if (
									get_field('pb1_vo_lang_va_can_so_boc_da') ||
									get_field('pb2_vo_lang_va_can_so_boc_da') ||
									get_field('pb3_vo_lang_va_can_so_boc_da')
								) {
								?>
                                <div class="hp-compare-label">Vô lăng và cần số bọc da</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_vo_lang_va_can_so_boc_da'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_vo_lang_va_can_so_boc_da'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_vo_lang_va_can_so_boc_da'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đàm thoại rảnh tay và điều khiển bằng giọng nói -->
                                <?php
								if (
									get_field('pb1_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi') ||
									get_field('pb2_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi') ||
									get_field('pb3_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi')
								) {
								?>
                                <div class="hp-compare-label">Đàm thoại rảnh tay và điều khiển bằng giọng nói</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_dam_thoai_ranh_tay_va_dieu_khien_bang_giong_noi'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Nút điều khiển âm thanh trên vô lăng -->
                                <?php
								if (
									get_field('pb1_nut_dieu_khien_am_thanh_tren_vo_lang') ||
									get_field('pb2_nut_dieu_khien_am_thanh_tren_vo_lang') ||
									get_field('pb3_nut_dieu_khien_am_thanh_tren_vo_lang')
								) {
								?>
                                <div class="hp-compare-label">Nút điều khiển âm thanh trên vô lăng</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_nut_dieu_khien_am_thanh_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_nut_dieu_khien_am_thanh_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_nut_dieu_khien_am_thanh_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống kiểm soát hành trình -->
                                <?php
								if (
									get_field('pb1_he_thong_kiem_soat_hanh_trinh') ||
									get_field('pb2_he_thong_kiem_soat_hanh_trinh') ||
									get_field('pb3_he_thong_kiem_soat_hanh_trinh')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống kiểm soát hành trình</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_kiem_soat_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_kiem_soat_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_kiem_soat_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống điều khiển hành trình -->
                                <?php
								if (
									get_field('pb1_he_thong_dieu_khien_hanh_trinh') ||
									get_field('pb2_he_thong_dieu_khien_hanh_trinh') ||
									get_field('pb3_he_thong_dieu_khien_hanh_trinh')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống điều khiển hành trình</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_dieu_khien_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_dieu_khien_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_dieu_khien_hanh_trinh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chìa khoá thông minh (KOS) -->
                                <?php
								if (
									get_field('pb1_chia_khoa_thong_minh') ||
									get_field('pb2_chia_khoa_thong_minh') ||
									get_field('pb3_chia_khoa_thong_minh')
								) {
								?>
                                <div class="hp-compare-label">Chìa khoá thông minh (KOS)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_chia_khoa_thong_minh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_chia_khoa_thong_minh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_chia_khoa_thong_minh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khởi động bằng nút bấm (OSS) -->
                                <?php
								if (
									get_field('pb1_khoi_dong_bang_nut_bam') ||
									get_field('pb2_khoi_dong_bang_nut_bam') ||
									get_field('pb3_khoi_dong_bang_nut_bam')
								) {
								?>
                                <div class="hp-compare-label">Khởi động bằng nút bấm (OSS)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_khoi_dong_bang_nut_bam'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_khoi_dong_bang_nut_bam'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_khoi_dong_bang_nut_bam'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống ga tự động -->
                                <?php
								if (
									get_field('pb1_he_thong_ga_tu_dong') ||
									get_field('pb2_he_thong_ga_tu_dong') ||
									get_field('pb3_he_thong_ga_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống ga tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_he_thong_ga_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_he_thong_ga_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_he_thong_ga_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Lẫy sang số trên vô lăng -->
                                <?php
								if (
									get_field('pb1_lay_sang_so_tren_vo_lang') ||
									get_field('pb2_lay_sang_so_tren_vo_lang') ||
									get_field('pb3_lay_sang_so_tren_vo_lang')
								) {
								?>
                                <div class="hp-compare-label">Lẫy sang số trên vô lăng</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_lay_sang_so_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_lay_sang_so_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_lay_sang_so_tren_vo_lang'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Phanh tay điện tử & Giữ phanh tự động -->
                                <?php
								if (
									get_field('pb1_phanh_dien_tu_giu_phanh_tu_dong') ||
									get_field('pb2_phanh_dien_tu_giu_phanh_tu_dong') ||
									get_field('pb3_phanh_dien_tu_giu_phanh_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Phanh tay điện tử & Giữ phanh tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_phanh_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_phanh_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_phanh_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Vô lăng điều chỉnh 4 hướng -->
                                <?php
								if (
									get_field('pb1_vo_lang_dieu_chinh_4_huong') ||
									get_field('pb2_vo_lang_dieu_chinh_4_huong') ||
									get_field('pb3_vo_lang_dieu_chinh_4_huong')
								) {
								?>
                                <div class="hp-compare-label">Vô lăng điều chỉnh 4 hướng</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_vo_lang_dieu_chinh_4_huong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_vo_lang_dieu_chinh_4_huong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_vo_lang_dieu_chinh_4_huong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Gương chiếu hậu trong xe chống chói tự động -->
                                <?php
								if (
									get_field('pb1_guong_chieu_hau_trong_xe_chong_choi_tu_dong') ||
									get_field('pb2_guong_chieu_hau_trong_xe_chong_choi_tu_dong') ||
									get_field('pb3_guong_chieu_hau_trong_xe_chong_choi_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Gương chiếu hậu trong xe chống chói tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_guong_chieu_hau_trong_xe_chong_choi_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_guong_chieu_hau_trong_xe_chong_choi_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_guong_chieu_hau_trong_xe_chong_choi_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Điều hoà nhiệt độ tự động -->
                                <?php
								if (
									get_field('pb1_dieu_hoa_nhiet_do_tu_dong') ||
									get_field('pb2_dieu_hoa_nhiet_do_tu_dong') ||
									get_field('pb3_dieu_hoa_nhiet_do_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Điều hoà nhiệt độ tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_dieu_hoa_nhiet_do_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_dieu_hoa_nhiet_do_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_dieu_hoa_nhiet_do_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Điều hoà nhiệt độ -->
                                <?php
								if (
									get_field('pb1_dieu_hoa_nhiet_do') ||
									get_field('pb2_dieu_hoa_nhiet_do') ||
									get_field('pb3_dieu_hoa_nhiet_do')
								) {
								?>
                                <div class="hp-compare-label">Điều hoà nhiệt độ</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_dieu_hoa_nhiet_do'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_dieu_hoa_nhiet_do'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_dieu_hoa_nhiet_do'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chức năng làm sạch không khí NanoE -->
                                <?php
								if (
									get_field('pb1_chuc_nang_lam_sach_khong_khi_nanoe') ||
									get_field('pb2_chuc_nang_lam_sach_khong_khi_nanoe') ||
									get_field('pb3_chuc_nang_lam_sach_khong_khi_nanoe')
								) {
								?>
                                <div class="hp-compare-label">Chức năng làm sạch không khí NanoE</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_chuc_nang_lam_sach_khong_khi_nanoe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_chuc_nang_lam_sach_khong_khi_nanoe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_chuc_nang_lam_sach_khong_khi_nanoe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Lọc gió điều hoà -->
                                <?php
								if (
									get_field('pb1_loc_gio_dieu_hoa') ||
									get_field('pb2_loc_gio_dieu_hoa') ||
									get_field('pb3_loc_gio_dieu_hoa')
								) {
								?>
                                <div class="hp-compare-label">Lọc gió điều hoà</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_loc_gio_dieu_hoa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_loc_gio_dieu_hoa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_loc_gio_dieu_hoa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Màu nội thất -->
                                <?php
								if (
									get_field('pb1_mau_noi_that') ||
									get_field('pb2_mau_noi_that') ||
									get_field('pb3_mau_noi_that')
								) {
								?>
                                <div class="hp-compare-label">Màu nội thất</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_mau_noi_that'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_mau_noi_that'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_mau_noi_that'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chất liệu ghế -->
                                <?php
								if (
									get_field('pb1_chat_lieu_ghe') ||
									get_field('pb2_chat_lieu_ghe') ||
									get_field('pb3_chat_lieu_ghe')
								) {
								?>
                                <div class="hp-compare-label">Chất liệu ghế</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_chat_lieu_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_chat_lieu_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_chat_lieu_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ghế tài xế -->
                                <?php
								if (
									get_field('pb1_ghe_tai_xe') ||
									get_field('pb2_ghe_tai_xe') ||
									get_field('pb3_ghe_tai_xe')
								) {
								?>
                                <div class="hp-compare-label">Ghế tài xế</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_ghe_tai_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_ghe_tai_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_ghe_tai_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ghế hành khách trước -->
                                <?php
								if (
									get_field('pb1_ghe_hanh_khach_truoc') ||
									get_field('pb2_ghe_hanh_khach_truoc') ||
									get_field('pb3_ghe_hanh_khach_truoc')
								) {
								?>
                                <div class="hp-compare-label">Ghế hành khách trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_ghe_hanh_khach_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_ghe_hanh_khach_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_ghe_hanh_khach_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đệm tựa lưng chỉnh điện -->
                                <?php
								if (
									get_field('pb1_dem_tua_lung_chinh_dien') ||
									get_field('pb2_dem_tua_lung_chinh_dien') ||
									get_field('pb3_dem_tua_lung_chinh_dien')
								) {
								?>
                                <div class="hp-compare-label">Đệm tựa lưng chỉnh điện</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_dem_tua_lung_chinh_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_dem_tua_lung_chinh_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_dem_tua_lung_chinh_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống sưởi ấm hàng ghế trước -->
                                <?php
								if (
									get_field('pb1_he_thong_suoi_am_hang_ghe_truoc') ||
									get_field('pb2_he_thong_suoi_am_hang_ghe_truoc') ||
									get_field('pb3_he_thong_suoi_am_hang_ghe_truoc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống sưởi ấm hàng ghế trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_suoi_am_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_suoi_am_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_suoi_am_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hàng ghế thứ hai gập 60:40 -->
                                <?php
								if (
									get_field('pb1_hang_ghe_thu_hai_gap_60_40') ||
									get_field('pb2_hang_ghe_thu_hai_gap_60_40') ||
									get_field('pb3_hang_ghe_thu_hai_gap_60_40')
								) {
								?>
                                <div class="hp-compare-label">Hàng ghế thứ hai gập 60:40</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_hang_ghe_thu_hai_gap_60_40'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_hang_ghe_thu_hai_gap_60_40'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_hang_ghe_thu_hai_gap_60_40'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hàng ghế thứ hai gập 50:50 -->
                                <?php
								if (
									get_field('pb1_hang_ghe_thu_hai_gap_50_50') ||
									get_field('pb2_hang_ghe_thu_hai_gap_50_50') ||
									get_field('pb3_hang_ghe_thu_hai_gap_50_50')
								) {
								?>
                                <div class="hp-compare-label">Hàng ghế thứ hai gập 50:50</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_hang_ghe_thu_hai_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_hang_ghe_thu_hai_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_hang_ghe_thu_hai_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hàng ghế thứ ba gập 50:50 -->
                                <?php
								if (
									get_field('pb1_hang_ghe_thu_ba_gap_50_50') ||
									get_field('pb2_hang_ghe_thu_ba_gap_50_50') ||
									get_field('pb3_hang_ghe_thu_ba_gap_50_50')
								) {
								?>
                                <div class="hp-compare-label">Hàng ghế thứ ba gập 50:50</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_hang_ghe_thu_ba_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_hang_ghe_thu_ba_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_hang_ghe_thu_ba_gap_50_50'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cửa sổ trời -->
                                <?php
								if (
									get_field('pb1_cua_so_troi') ||
									get_field('pb2_cua_so_troi') ||
									get_field('pb3_cua_so_troi')
								) {
								?>
                                <div class="hp-compare-label">Cửa sổ trời</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_cua_so_troi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_cua_so_troi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_cua_so_troi'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Gương chiếu hậu chống chói tự động -->
                                <?php
								if (
									get_field('pb1_guong_chieu_hau_chong_choi_tu_dong') ||
									get_field('pb2_guong_chieu_hau_chong_choi_tu_dong') ||
									get_field('pb3_guong_chieu_hau_chong_choi_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Gương chiếu hậu chống chói tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_guong_chieu_hau_chong_choi_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_guong_chieu_hau_chong_choi_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_guong_chieu_hau_chong_choi_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bệ tì tay dành cho người lái -->
                                <?php
								if (
									get_field('pb1_be_ti_tay_cho_nguoi_lai') ||
									get_field('pb2_be_ti_tay_cho_nguoi_lai') ||
									get_field('pb3_be_ti_tay_cho_nguoi_lai')
								) {
								?>
                                <div class="hp-compare-label">Bệ tì tay dành cho người lái</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_be_ti_tay_cho_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_be_ti_tay_cho_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_be_ti_tay_cho_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Tay nắm cửa trong mạ crôm -->
                                <?php
								if (
									get_field('pb1_tay_nam_cua_ma_crom') ||
									get_field('pb2_tay_nam_cua_ma_crom') ||
									get_field('pb3_tay_nam_cua_ma_crom')
								) {
								?>
                                <div class="hp-compare-label">Tay nắm cửa trong mạ crôm</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_tay_nam_cua_ma_crom'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_tay_nam_cua_ma_crom'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_tay_nam_cua_ma_crom'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Kính cửa điều khiển điện -->
                                <?php
								if (
									get_field('pb1_kinh_cua_dieu_khien_dien') ||
									get_field('pb2_kinh_cua_dieu_khien_dien') ||
									get_field('pb3_kinh_cua_dieu_khien_dien')
								) {
								?>
                                <div class="hp-compare-label">Kính cửa điều khiển điện</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_kinh_cua_dieu_khien_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_kinh_cua_dieu_khien_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_kinh_cua_dieu_khien_dien'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Màn hình hiển thị đa thông tin -->
                                <?php
								if (
									get_field('pb1_man_hinh_hien_thi_da_thong_tin') ||
									get_field('pb2_man_hinh_hien_thi_da_thong_tin') ||
									get_field('pb3_man_hinh_hien_thi_da_thong_tin')
								) {
								?>
                                <div class="hp-compare-label">Màn hình hiển thị đa thông tin</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_man_hinh_hien_thi_da_thong_tin'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_man_hinh_hien_thi_da_thong_tin'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_man_hinh_hien_thi_da_thong_tin'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Móc gắn ghế an toàn trẻ em -->
                                <?php
								if (
									get_field('pb1_moc_gan_ghe_an_toan_tre_em') ||
									get_field('pb2_moc_gan_ghe_an_toan_tre_em') ||
									get_field('pb3_moc_gan_ghe_an_toan_tre_em')
								) {
								?>
                                <div class="hp-compare-label">Móc gắn ghế an toàn trẻ em</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_moc_gan_ghe_an_toan_tre_em'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_moc_gan_ghe_an_toan_tre_em'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_moc_gan_ghe_an_toan_tre_em'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Tấm ngăn khoang hành lý -->
                                <?php
								if (
									get_field('pb1_tam_ngan_khoang_hanh_ly') ||
									get_field('pb2_tam_ngan_khoang_hanh_ly') ||
									get_field('pb3_tam_ngan_khoang_hanh_ly')
								) {
								?>
                                <div class="hp-compare-label">Tấm ngăn khoang hành lý</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tam_ngan_khoang_hanh_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tam_ngan_khoang_hanh_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tam_ngan_khoang_hanh_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Tựa tay hàng ghế sau với giá để ly -->
                                <?php
								if (
									get_field('pb1_tua_tay_hang_ghe_sau_voi_gia_de_ly') ||
									get_field('pb2_tua_tay_hang_ghe_sau_voi_gia_de_ly') ||
									get_field('pb3_tua_tay_hang_ghe_sau_voi_gia_de_ly')
								) {
								?>
                                <div class="hp-compare-label">Tựa tay hàng ghế sau với giá để ly</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tua_tay_hang_ghe_sau_voi_gia_de_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tua_tay_hang_ghe_sau_voi_gia_de_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tua_tay_hang_ghe_sau_voi_gia_de_ly'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cửa gió phía sau cho hành khách -->
                                <?php
								if (
									get_field('pb1_cua_gio_phia_sau_cho_hanh_khach') ||
									get_field('pb2_cua_gio_phia_sau_cho_hanh_khach') ||
									get_field('pb3_cua_gio_phia_sau_cho_hanh_khach')
								) {
								?>
                                <div class="hp-compare-label">Cửa gió phía sau cho hành khách</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cua_gio_phia_sau_cho_hanh_khach'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cua_gio_phia_sau_cho_hanh_khach'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cua_gio_phia_sau_cho_hanh_khach'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống giải trí (Hệ thống âm thanh) -->
                                <?php
								if (
									get_field('pb1_he_thong_giai_tri') ||
									get_field('pb2_he_thong_giai_tri') ||
									get_field('pb3_he_thong_giai_tri')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống giải trí (Hệ thống âm thanh)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_he_thong_giai_tri'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_he_thong_giai_tri'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_he_thong_giai_tri'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Ứng dụng điều khiển từ xa thông qua điện thoại -->
                                <?php
								if (
									get_field('pb1_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai') ||
									get_field('pb2_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai') ||
									get_field('pb3_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai')
								) {
								?>
                                <div class="hp-compare-label">Ứng dụng điều khiển từ xa thông qua điện thoại</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_ung_dung_dieu_khien_tu_xa_thong_qua_dien_thoai'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cổng nguồn điện 220V-150W -->
                                <?php
								if (
									get_field('pb1_cong_nguon_dien_220v_150w') ||
									get_field('pb2_cong_nguon_dien_220v_150w') ||
									get_field('pb3_cong_nguon_dien_220v_150w')
								) {
								?>
                                <div class="hp-compare-label">Cổng nguồn điện 220V-150W</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cong_nguon_dien_220v_150w'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cong_nguon_dien_220v_150w'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cong_nguon_dien_220v_150w'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Số lượng loa -->
                                <?php
								if (
									get_field('pb1_so_luong_loa') ||
									get_field('pb2_so_luong_loa') ||
									get_field('pb3_so_luong_loa')
								) {
								?>
                                <div class="hp-compare-label">Số lượng loa</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_so_luong_loa'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_so_luong_loa'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_so_luong_loa'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cửa gió điều hòa hàng ghế sau -->
                                <?php
								if (
									get_field('pb1_cua_gio_dieu_hoa_hang_ghe_sau') ||
									get_field('pb2_cua_gio_dieu_hoa_hang_ghe_sau') ||
									get_field('pb3_cua_gio_dieu_hoa_hang_ghe_sau')
								) {
								?>
                                <div class="hp-compare-label">Cửa gió điều hòa hàng ghế sau</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cua_gio_dieu_hoa_hang_ghe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cua_gio_dieu_hoa_hang_ghe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cua_gio_dieu_hoa_hang_ghe_sau'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bệ tỳ tay trung tâm hàng ghế trước -->
                                <?php
								if (
									get_field('pb1_be_ty_tay_trung_tam_hang_ghe_truoc') ||
									get_field('pb2_be_ty_tay_trung_tam_hang_ghe_truoc') ||
									get_field('pb3_be_ty_tay_trung_tam_hang_ghe_truoc')
								) {
								?>
                                <div class="hp-compare-label">Bệ tỳ tay trung tâm hàng ghế trước</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_be_ty_tay_trung_tam_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_be_ty_tay_trung_tam_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_be_ty_tay_trung_tam_hang_ghe_truoc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Bệ tỳ tay trung tâm hàng ghế thứ hai có giá để ly -->
                                <?php
								if (
									get_field('pb1_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly') ||
									get_field('pb2_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly') ||
									get_field('pb3_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly')
								) {
								?>
                                <div class="hp-compare-label">Bệ tỳ tay trung tâm hàng ghế thứ hai có giá để ly</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_be_ty_tay_trung_tam_hang_ghe_thu_hai_co_gia_de_ly'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cổng 12V hàng ghế thứ nhất và thứ ba -->
                                <?php
								if (
									get_field('pb1_cong_12v_hang_ghe_thu_nhat_va_thu_ba') ||
									get_field('pb2_cong_12v_hang_ghe_thu_nhat_va_thu_ba') ||
									get_field('pb3_cong_12v_hang_ghe_thu_nhat_va_thu_ba')
								) {
								?>
                                <div class="hp-compare-label">Cổng 12V hàng ghế thứ nhất và thứ ba</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cong_12v_hang_ghe_thu_nhat_va_thu_ba'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cong_12v_hang_ghe_thu_nhat_va_thu_ba'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cong_12v_hang_ghe_thu_nhat_va_thu_ba'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cổng sạc USB hàng ghế thứ hai -->
                                <?php
								if (
									get_field('pb1_cong_sac_usb_hang_ghe_thu_hai') ||
									get_field('pb2_cong_sac_usb_hang_ghe_thu_hai') ||
									get_field('pb3_cong_sac_usb_hang_ghe_thu_hai')
								) {
								?>
                                <div class="hp-compare-label">Cổng sạc USB hàng ghế thứ hai</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_cong_sac_usb_hang_ghe_thu_hai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_cong_sac_usb_hang_ghe_thu_hai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_cong_sac_usb_hang_ghe_thu_hai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                AN TOÀN
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Hệ thống kiểm soát hành trình thích ứng (ACC) -->
                                <?php
								if (
									get_field('pb1_he_thong_kiem_soat_hanh_trinh_thich_ung') ||
									get_field('pb2_he_thong_kiem_soat_hanh_trinh_thich_ung') ||
									get_field('pb3_he_thong_kiem_soat_hanh_trinh_thich_ung')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống kiểm soát hành trình thích ứng (ACC)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_kiem_soat_hanh_trinh_thich_ung'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_kiem_soat_hanh_trinh_thich_ung'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_kiem_soat_hanh_trinh_thich_ung'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống cảnh báo điểm mù (BSW) -->
                                <?php
								if (
									get_field('pb1_he_thong_canh_bao_diem_mu') ||
									get_field('pb2_he_thong_canh_bao_diem_mu') ||
									get_field('pb3_he_thong_canh_bao_diem_mu')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống cảnh báo điểm mù (BSW)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_canh_bao_diem_mu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_canh_bao_diem_mu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_canh_bao_diem_mu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống cảnh báo và giảm thiểu va chạm phía trước (FCM) -->
                                <?php
								if (
									get_field('pb1_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc') ||
									get_field('pb2_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc') ||
									get_field('pb3_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống cảnh báo và giảm thiểu va chạm phía trước (FCM)
                                </div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_canh_bao_va_giam_thieu_va_cham_phia_truoc'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống chống tăng tốc ngoài ý muốn (UMS) -->
                                <?php
								if (
									get_field('pb1_he_thong_chong_tang_toc_ngoai_y_muon') ||
									get_field('pb2_he_thong_chong_tang_toc_ngoai_y_muon') ||
									get_field('pb3_he_thong_chong_tang_toc_ngoai_y_muon')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống chống tăng tốc ngoài ý muốn (UMS)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_chong_tang_toc_ngoai_y_muon'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_chong_tang_toc_ngoai_y_muon'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_chong_tang_toc_ngoai_y_muon'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống cảnh báo lệch làn đường (LDW) -->
                                <?php
								if (
									get_field('pb1_he_thong_canh_bao_lech_lan_duong') ||
									get_field('pb2_he_thong_canh_bao_lech_lan_duong') ||
									get_field('pb3_he_thong_canh_bao_lech_lan_duong')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống cảnh báo lệch làn đường (LDW)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_canh_bao_lech_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_canh_bao_lech_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_canh_bao_lech_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống cảnh báo phương tiện cắt ngang khi lùi xe (RCTA) -->
                                <?php
								if (
									get_field('pb1_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe') ||
									get_field('pb2_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe') ||
									get_field('pb3_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống cảnh báo phương tiện cắt ngang khi lùi xe (RCTA)
                                </div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_canh_bao_phuong_tien_cat_ngang_khi_lui_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hỗ trợ thay đổi làn đường (LCA) -->
                                <?php
								if (
									get_field('pb1_ho_tro_doi_lan_duong') ||
									get_field('pb2_ho_tro_doi_lan_duong') ||
									get_field('pb3_ho_tro_doi_lan_duong')
								) {
								?>
                                <div class="hp-compare-label">Hỗ trợ thay đổi làn đường (LCA)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_ho_tro_doi_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_ho_tro_doi_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_ho_tro_doi_lan_duong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cảm biến góc -->
                                <?php
								if (
									get_field('pb1_cam_bien_goc') ||
									get_field('pb2_cam_bien_goc') ||
									get_field('pb3_cam_bien_goc')
								) {
								?>
                                <div class="hp-compare-label">Cảm biến góc</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_cam_bien_goc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_cam_bien_goc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_cam_bien_goc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Dây đai an toàn cho tất cả các ghế -->
                                <?php
								if (
									get_field('pb1_day_dai_an_toan_cho_tat_ca_cac_ghe') ||
									get_field('pb2_day_dai_an_toan_cho_tat_ca_cac_ghe') ||
									get_field('pb3_day_dai_an_toan_cho_tat_ca_cac_ghe')
								) {
								?>
                                <div class="hp-compare-label">Dây đai an toàn cho tất cả các ghế</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_day_dai_an_toan_cho_tat_ca_cac_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_day_dai_an_toan_cho_tat_ca_cac_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_day_dai_an_toan_cho_tat_ca_cac_ghe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cảnh báo thắt dây an toàn -->
                                <?php
								if (
									get_field('pb1_canh_bao_that_day_an_toan') ||
									get_field('pb2_canh_bao_that_day_an_toan') ||
									get_field('pb3_canh_bao_that_day_an_toan')
								) {
								?>
                                <div class="hp-compare-label">Cảnh báo thắt dây an toàn</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_canh_bao_that_day_an_toan'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_canh_bao_that_day_an_toan'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_canh_bao_that_day_an_toan'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Túi khí an toàn -->
                                <?php
								if (
									get_field('pb1_tui_khi_an_toan') ||
									get_field('pb2_tui_khi_an_toan') ||
									get_field('pb3_tui_khi_an_toan')
								) {
								?>
                                <div class="hp-compare-label">Túi khí an toàn</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_tui_khi_an_toan'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_tui_khi_an_toan'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_tui_khi_an_toan'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Túi khí phía trước dành cho người lái và hành khách -->
                                <?php
								if (
									get_field('pb1_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach') ||
									get_field('pb2_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach') ||
									get_field('pb3_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach')
								) {
								?>
                                <div class="hp-compare-label">Túi khí phía trước dành cho người lái và hành khách
                                </div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tui_khi_phia_truoc_cho_nguoi_lai_va_hanh_khach'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Túi khí bên -->
                                <?php
								if (
									get_field('pb1_tui_khi_ben') ||
									get_field('pb2_tui_khi_ben') ||
									get_field('pb3_tui_khi_ben')
								) {
								?>
                                <div class="hp-compare-label">Túi khí bên</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_tui_khi_ben'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_tui_khi_ben'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_tui_khi_ben'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Túi khí rèm dọc hai bên thân xe -->
                                <?php
								if (
									get_field('pb1_tui_khi_rem_doc_hai_ben_than_xe') ||
									get_field('pb2_tui_khi_rem_doc_hai_ben_than_xe') ||
									get_field('pb3_tui_khi_rem_doc_hai_ben_than_xe')
								) {
								?>
                                <div class="hp-compare-label">Túi khí rèm dọc hai bên thân xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tui_khi_rem_doc_hai_ben_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tui_khi_rem_doc_hai_ben_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tui_khi_rem_doc_hai_ben_than_xe'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Túi khí đầu gối bảo vệ người lái -->
                                <?php
								if (
									get_field('pb1_tui_khi_dau_goi_bao_ve_nguoi_lai') ||
									get_field('pb2_tui_khi_dau_goi_bao_ve_nguoi_lai') ||
									get_field('pb3_tui_khi_dau_goi_bao_ve_nguoi_lai')
								) {
								?>
                                <div class="hp-compare-label">Túi khí đầu gối bảo vệ người lái</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_tui_khi_dau_goi_bao_ve_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_tui_khi_dau_goi_bao_ve_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_tui_khi_dau_goi_bao_ve_nguoi_lai'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cơ cấu căng đai tự động -->
                                <?php
								if (
									get_field('pb1_co_cau_cang_dai_tu_dong') ||
									get_field('pb2_co_cau_cang_dai_tu_dong') ||
									get_field('pb3_co_cau_cang_dai_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Cơ cấu căng đai tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_co_cau_cang_dai_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_co_cau_cang_dai_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_co_cau_cang_dai_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Camera toàn cảnh 360 -->
                                <?php
								if (
									get_field('pb1_camera_toan_canh_360') ||
									get_field('pb2_camera_toan_canh_360') ||
									get_field('pb3_camera_toan_canh_360')
								) {
								?>
                                <div class="hp-compare-label">Camera toàn cảnh 360</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_camera_toan_canh_360'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_camera_toan_canh_360'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_camera_toan_canh_360'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Camera lùi -->
                                <?php
								if (
									get_field('pb1_camera_lui') ||
									get_field('pb2_camera_lui') ||
									get_field('pb3_camera_lui')
								) {
								?>
                                <div class="hp-compare-label">Camera lùi</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_camera_lui'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_camera_lui'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_camera_lui'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống chống bó cứng phanh (ABS) -->
                                <?php
								if (
									get_field('pb1_he_thong_chong_bo_cung_phanh') ||
									get_field('pb2_he_thong_chong_bo_cung_phanh') ||
									get_field('pb3_he_thong_chong_bo_cung_phanh')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống chống bó cứng phanh (ABS)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_chong_bo_cung_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_chong_bo_cung_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_chong_bo_cung_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống phân phối lực phanh điện tử (EBD) -->
                                <?php
								if (
									get_field('pb1_he_thong_phan_phoi_luc_phanh_dien_tu') ||
									get_field('pb2_he_thong_phan_phoi_luc_phanh_dien_tu') ||
									get_field('pb3_he_thong_phan_phoi_luc_phanh_dien_tu')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống phân phối lực phanh điện tử (EBD)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_phan_phoi_luc_phanh_dien_tu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_phan_phoi_luc_phanh_dien_tu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_phan_phoi_luc_phanh_dien_tu'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống trợ lực phanh khẩn cấp (BA) -->
                                <?php
								if (
									get_field('pb1_he_thong_tro_luc_phanh_khan_cap') ||
									get_field('pb2_he_thong_tro_luc_phanh_khan_cap') ||
									get_field('pb3_he_thong_tro_luc_phanh_khan_cap')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống trợ lực phanh khẩn cấp (BA)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_tro_luc_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_tro_luc_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_tro_luc_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Phanh tay điện tử & Giữ phanh tự động -->
                                <?php
								if (
									get_field('pb1_phanh_tay_dien_tu_giu_phanh_tu_dong') ||
									get_field('pb2_phanh_tay_dien_tu_giu_phanh_tu_dong') ||
									get_field('pb3_phanh_tay_dien_tu_giu_phanh_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Phanh tay điện tử & Giữ phanh tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_phanh_tay_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_phanh_tay_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_phanh_tay_dien_tu_giu_phanh_tu_dong'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống cân bằng điện tử & kiểm soát lực kéo (ASTC) -->
                                <?php
								if (
									get_field('pb1_he_thong_can_bang_dien_tu_kiem_soat_luc_keo') ||
									get_field('pb2_he_thong_can_bang_dien_tu_kiem_soat_luc_keo') ||
									get_field('pb3_he_thong_can_bang_dien_tu_kiem_soat_luc_keo')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống cân bằng điện tử & kiểm soát lực kéo (ASTC)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_can_bang_dien_tu_kiem_soat_luc_keo'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_can_bang_dien_tu_kiem_soat_luc_keo'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_can_bang_dien_tu_kiem_soat_luc_keo'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống khởi hành ngang dốc (HSA) -->
                                <?php
								if (
									get_field('pb1_he_thong_khoi_hanh_ngang_doc') ||
									get_field('pb2_he_thong_khoi_hanh_ngang_doc') ||
									get_field('pb3_he_thong_khoi_hanh_ngang_doc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống khởi hành ngang dốc (HSA)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_khoi_hanh_ngang_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_khoi_hanh_ngang_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_khoi_hanh_ngang_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống hỗ trợ xuống dốc (HDC) -->
                                <?php
								if (
									get_field('pb1_he_thong_ho_tro_xuong_doc') ||
									get_field('pb2_he_thong_ho_tro_xuong_doc') ||
									get_field('pb3_he_thong_ho_tro_xuong_doc')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống hỗ trợ xuống dốc (HDC)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_ho_tro_xuong_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_ho_tro_xuong_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_ho_tro_xuong_doc'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chế độ lựa chọn địa hình off-road -->
                                <?php
								if (
									get_field('pb1_che_do_lua_chon_dia_hinh_off_road') ||
									get_field('pb2_che_do_lua_chon_dia_hinh_off_road') ||
									get_field('pb3_che_do_lua_chon_dia_hinh_off_road')
								) {
								?>
                                <div class="hp-compare-label">Chế độ lựa chọn địa hình off-road</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_che_do_lua_chon_dia_hinh_off_road'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_che_do_lua_chon_dia_hinh_off_road'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_che_do_lua_chon_dia_hinh_off_road'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Hệ thống kiểm soát chân ga khi phanh -->
                                <?php
								if (
									get_field('pb1_he_thong_kiem_soat_chan_ga_khi_phanh') ||
									get_field('pb2_he_thong_kiem_soat_chan_ga_khi_phanh') ||
									get_field('pb3_he_thong_kiem_soat_chan_ga_khi_phanh')
								) {
								?>
                                <div class="hp-compare-label">Hệ thống kiểm soát chân ga khi phanh</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_he_thong_kiem_soat_chan_ga_khi_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_he_thong_kiem_soat_chan_ga_khi_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_he_thong_kiem_soat_chan_ga_khi_phanh'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chìa khoá mã hoá chống trộm -->
                                <?php
								if (
									get_field('pb1_chia_khoa_ma_hoa_chong_trom') ||
									get_field('pb2_chia_khoa_ma_hoa_chong_trom') ||
									get_field('pb3_chia_khoa_ma_hoa_chong_trom')
								) {
								?>
                                <div class="hp-compare-label">Chìa khoá mã hoá chống trộm</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_chia_khoa_ma_hoa_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_chia_khoa_ma_hoa_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_chia_khoa_ma_hoa_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chìa khóa thông minh/Khởi động bằng nút bấm -->
                                <?php
								if (
									get_field('pb1_chia_khoa_thong_minh_khoi_dong_bang_nut_bam') ||
									get_field('pb2_chia_khoa_thong_minh_khoi_dong_bang_nut_bam') ||
									get_field('pb3_chia_khoa_thong_minh_khoi_dong_bang_nut_bam')
								) {
								?>
                                <div class="hp-compare-label">Chìa khóa thông minh/Khởi động bằng nút bấm</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_chia_khoa_thong_minh_khoi_dong_bang_nut_bam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_chia_khoa_thong_minh_khoi_dong_bang_nut_bam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_chia_khoa_thong_minh_khoi_dong_bang_nut_bam'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Khoá cửa từ xa -->
                                <?php
								if (
									get_field('pb1_khoa_cua_tu_xa') ||
									get_field('pb2_khoa_cua_tu_xa') ||
									get_field('pb3_khoa_cua_tu_xa')
								) {
								?>
                                <div class="hp-compare-label">Khoá cửa từ xa</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_khoa_cua_tu_xa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_khoa_cua_tu_xa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_khoa_cua_tu_xa'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Đèn cảnh báo phanh khẩn cấp (ESS) -->
                                <?php
								if (
									get_field('pb1_den_canh_bao_phanh_khan_cap') ||
									get_field('pb2_den_canh_bao_phanh_khan_cap') ||
									get_field('pb3_den_canh_bao_phanh_khan_cap')
								) {
								?>
                                <div class="hp-compare-label">Đèn cảnh báo phanh khẩn cấp (ESS)</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_den_canh_bao_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_den_canh_bao_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_den_canh_bao_phanh_khan_cap'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chức năng chống trộm -->
                                <?php
								if (
									get_field('pb1_chuc_nang_chong_trom') ||
									get_field('pb2_chuc_nang_chong_trom') ||
									get_field('pb3_chuc_nang_chong_trom')
								) {
								?>
                                <div class="hp-compare-label">Chức năng chống trộm</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb1_chuc_nang_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb2_chuc_nang_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item">
                                            <?php echo get_field('pb3_chuc_nang_chong_trom'); ?></div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cảm biến trước xe -->
                                <?php
								if (
									get_field('pb1_cam_bien_truoc_xe') ||
									get_field('pb2_cam_bien_truoc_xe') ||
									get_field('pb3_cam_bien_truoc_xe')
								) {
								?>
                                <div class="hp-compare-label">Cảm biến trước xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_cam_bien_truoc_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_cam_bien_truoc_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_cam_bien_truoc_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Cảm biến sau xe -->
                                <?php
								if (
									get_field('pb1_cam_bien_sau_xe') ||
									get_field('pb2_cam_bien_sau_xe') ||
									get_field('pb3_cam_bien_sau_xe')
								) {
								?>
                                <div class="hp-compare-label">Cảm biến sau xe</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_cam_bien_sau_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_cam_bien_sau_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_cam_bien_sau_xe'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                                <!-- Chốt cửa tự động -->
                                <?php
								if (
									get_field('pb1_chot_cua_tu_dong') ||
									get_field('pb2_chot_cua_tu_dong') ||
									get_field('pb3_chot_cua_tu_dong')
								) {
								?>
                                <div class="hp-compare-label">Chốt cửa tự động</div>
                                <div class="row gx-5 justify-content-center">
                                    <?php
										if (get_field('pb1_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb1_chot_cua_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb2_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb2_chot_cua_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                    <?php
										if (get_field('pb3_ten_phien_ban')) {
										?>
                                    <div
                                        class="col-<?php echo $col_size; ?> col-md-<?php echo $col_size; ?> col-lg-<?php echo $col_size; ?>">
                                        <div class="hp-compare-item"><?php echo get_field('pb3_chot_cua_tu_dong'); ?>
                                        </div>
                                    </div>
                                    <?php
										}
										?>
                                </div>
                                <?php
								}
								?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <a class="hp-link hp-hide-compare" href="#">Thu gọn</a>
            </div>
        </div>
    </div>
    <?php
	if (get_field('ddnb_tieu_de')) {
	?>
    <div class="hp-product-special">
        <div class="container">
            <div class="hp-ps-inner">
                <img alt="" src="<?php echo get_field('ddnb_hinh_anh'); ?>" />
                <div class="hp-ps-box">
                    <div class="hp-ps-subtitle"><?php echo get_field('ddnb_tieu_de_phu'); ?></div>
                    <h2 class="hp-ps-title"><?php echo get_field('ddnb_tieu_de'); ?></h2>
                    <div class="hp-ps-body">
                        <?php echo get_field('ddnb_noi_dung'); ?>
                        <?php echo get_field('ddnb_hanh_dong'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <?php
	if (get_field('mt1_tieu_de')) {
	?>
    <div class="hp-product-features hp-card-animation">
        <div class="row g-0 align-items-center">
            <div class="col-md-6">
                <div class="hp-pf-image">
                    <div class="hp-pf-image-inner">
                        <img src="<?php echo get_field('mt1_hinh_anh'); ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hp-pf-content">
                    <div class="hp-pf-subtitle"><?php echo get_field('mt1_tieu_de_phu'); ?></div>
                    <h2 class="hp-pf-title"><?php echo get_field('mt1_tieu_de'); ?></h2>
                    <div class="hp-pf-body">
                        <?php echo get_field('mt1_noi_dung'); ?>
                    </div>
                    <?php echo get_field('mt1_hanh_dong'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <?php
	if (get_field('mt2_tieu_de')) {
	?>
    <div class="hp-product-features hp-card-animation image-right">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 order-md-2 order-1">
                <div class="hp-pf-image">
                    <div class="hp-pf-image-inner">
                        <img src="<?php echo get_field('mt2_hinh_anh'); ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1 order-2">
                <div class="hp-pf-content">
                    <div class="hp-pf-subtitle"><?php echo get_field('mt2_tieu_de_phu'); ?></div>
                    <h2 class="hp-pf-title"><?php echo get_field('mt2_tieu_de'); ?></h2>
                    <div class="hp-pf-body">
                        <?php echo get_field('mt2_noi_dung'); ?>
                    </div>
                    <?php echo get_field('mt2_hanh_dong'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <?php
	if (get_field('mt3_tieu_de')) {
	?>
    <div class="hp-product-features hp-card-animation">
        <div class="row g-0 align-items-center">
            <div class="col-md-6">
                <div class="hp-pf-image">
                    <div class="hp-pf-image-inner">
                        <img src="<?php echo get_field('mt3_hinh_anh'); ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hp-pf-content">
                    <div class="hp-pf-subtitle"><?php echo get_field('mt3_tieu_de_phu'); ?></div>
                    <h2 class="hp-pf-title"><?php echo get_field('mt3_tieu_de'); ?></h2>
                    <div class="hp-pf-body">
                        <?php echo get_field('mt3_noi_dung'); ?>
                    </div>
                    <?php echo get_field('mt3_hanh_dong'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <?php
	if (get_field('mt4_tieu_de')) {
	?>
    <div class="hp-product-features hp-card-animation image-right">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 order-md-2 order-1">
                <div class="hp-pf-image">
                    <div class="hp-pf-image-inner">
                        <img src="<?php echo get_field('mt4_hinh_anh'); ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1 order-2">
                <div class="hp-pf-content">
                    <div class="hp-pf-subtitle"><?php echo get_field('mt4_tieu_de_phu'); ?></div>
                    <h2 class="hp-pf-title"><?php echo get_field('mt4_tieu_de'); ?></h2>
                    <div class="hp-pf-body">
                        <?php echo get_field('mt4_noi_dung'); ?>
                    </div>
                    <?php echo get_field('mt4_hanh_dong'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>

    <?php
	if (get_field('mt5_tieu_de')) {
	?>
    <div class="hp-product-features hp-card-animation">
        <div class="row g-0 align-items-center">
            <div class="col-md-6">
                <div class="hp-pf-image">
                    <div class="hp-pf-image-inner">
                        <img src="<?php echo get_field('mt5_hinh_anh'); ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hp-pf-content">
                    <div class="hp-pf-subtitle"><?php echo get_field('mt5_tieu_de_phu'); ?></div>
                    <h2 class="hp-pf-title"><?php echo get_field('mt5_tieu_de'); ?></h2>
                    <div class="hp-pf-body">
                        <?php echo get_field('mt5_noi_dung'); ?>
                    </div>
                    <?php echo get_field('mt5_hanh_dong'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
	?>





    <div class="hp-sect-try">
        <div class="container">
            <?php echo get_field('form_shortcode'); ?>
        </div>
    </div>



    <div class="hp-sect-services">
        <div class="row g-0">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
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
	get_template_part('template/components/hp-product', 'cta');
	?>
</div>