<?php

/**
 * The template for displaying content feature in the index.php template.
 */
?>
<div class="hp-product-feature">
    <div class="breadcrumb breadcrumb--top">
        <div class="container-fluid">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__item"><a
                        href="<?php echo get_field('link_san_pham') ;?>"><?php echo get_field('ten_san_pham') ;?></a>
                </li>
                <li class="breadcrumb__item"><?php echo get_the_title() ;?></li>
            </ol>
        </div>
    </div>
    <div class="hero detail-page">
        <div class="container">
        <div class="container-fluid">
            <div class="hero__body">
                <h2 class="title title--1 title--upcase"><?php echo get_field('nd_1_tieu_de') ;?></h2>
                <div class="intro-body">
                    <p><?php echo get_field('nd_1_mo_ta') ;?></p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="image-block ">
        <div class="image-block__body">
            <img src="<?php echo get_field('nd_1_anh_thumbnail') ;?>" alt="" class="img-100">
        </div>
    </div>
    <?php if (get_field('nd_2_tieu_de')) {?>
    <div class="editor-car editor-car--odds">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (get_field('nd_2_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_2_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_2_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_2_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php if (get_field('nd_3_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_3_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_3_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_3_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_4_tieu_de')) { ?>
    <div class="discovery ">
        <div class="discovery__main">
            <div class="discovery__body">
                <div class="discovery__content">
                    <div class="discovery__title">
                        <h2 class="title title--3"><?php echo get_field('nd_4_tieu_de') ;?>​</h2>
                    </div>
                    <div class="discovery__desc">
                        <p><?php echo get_field('nd_4_mo_ta') ;?></p>
                    </div>
                </div>
            </div>

            <div class="discovery__thumb">
                <img fetchpriority="high" src="<?php echo get_field('nd_4_anh_thumbnail') ;?>" class="img-100">
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_5_tieu_de')) {?>
    <div class="editor-car editor-car--odds">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (get_field('nd_5_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_5_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_5_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_5_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php if (get_field('nd_6_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_6_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_6_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_6_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_7_tieu_de')) {?>
    <div class="editor-car editor-car--odds">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (get_field('nd_7_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_7_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_7_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_5_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php if (get_field('nd_8_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_8_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_8_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_8_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_9_tieu_de')) {?>
    <div class="editor-car editor-car--odds">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (get_field('nd_9_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_9_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_9_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_9_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php if (get_field('nd_10_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_10_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_10_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_10_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_11_tieu_de')) {?>
    <div class="discovery discovery--reverse">
        <div class="discovery__main">
            <div class="discovery__body">
                <div class="discovery__content">
                    <div class="discovery__title">
                        <h2 class="title title--3"><?php echo get_field('nd_11_tieu_de') ;?></h2>
                    </div>
                    <div class="discovery__desc">
                        <p><?php echo get_field('nd_11_mo_ta') ;?></p>
                    </div>
                </div>
            </div>

            <div class="discovery__thumb">
                <img class="w-100" src="<?php echo get_field('nd_11_anh_thumbnail') ;?>" alt="">
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_12_tieu_de')) {?>
    <div class="editor-car editor-car--odds">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (get_field('nd_12_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_12_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_12_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_12_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-md-4 offset-md-1">
                    <?php if (get_field('nd_13_tieu_de')) {?>
                    <div class="editor-car__item">
                        <div class="editor-car__thumb">
                            <img fetchpriority="high" src="<?php echo get_field('nd_13_anh_thumbnail') ;?>"
                                class="w-100 img img--full ls-is-cached lazyloaded">
                        </div>
                        <div class="editor-car__body">
                            <h2 class="title title--3"><?php echo get_field('nd_13_tieu_de') ;?></h2>
                            <div class="editor-car__content">
                                <p><?php echo get_field('nd_13_mo_ta') ;?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_field('nd_14_tieu_de')) {?>
    <div class="hp-service-item hp-card-animation ">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 ">
                <div class="hp-si-image">
                    <div class="hp-si-image-inner">
                        <img class="w-100" src="<?php echo get_field('nd_14_anh_thumbnail') ;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hp-si-content">
                    <h2 class="hp-si-title"><?php echo get_field('nd_14_tieu_de') ;?></h2>
                    <div class="hp-si-body">
                        <p><?php echo get_field('nd_14_mo_ta') ;?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (get_field('nd_15_tieu_de')) {?>
    <div class="hp-service-item hp-card-animation image-right">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 order-md-2 order-1">
                <div class="hp-si-image">
                    <div class="hp-si-image-inner">
                        <img class="w-100" src="<?php echo get_field('nd_15_anh_thumbnail') ;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hp-si-content">
                    <h2 class="hp-si-title"><?php echo get_field('nd_15_tieu_de') ;?></h2>
                    <div class="hp-si-body">
                        <p><?php echo get_field('nd_15_mo_ta') ;?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (get_field('nd_16_tieu_de')) {?>
    <div class="hp-service-item hp-card-animation ">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 ">
                <div class="hp-si-image">
                    <div class="hp-si-image-inner">
                        <img class="w-100" src="<?php echo get_field('nd_16_anh_thumbnail') ;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hp-si-content">
                    <h2 class="hp-si-title"><?php echo get_field('nd_16_tieu_de') ;?></h2>
                    <div class="hp-si-body">
                        <p><?php echo get_field('nd_16_mo_ta') ;?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (get_field('nd_17_tieu_de')) {?>
    <div class="hp-service-item hp-card-animation image-right">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 order-md-2 order-1">
                <div class="hp-si-image">
                    <div class="hp-si-image-inner">
                        <img class="w-100" src="<?php echo get_field('nd_17_anh_thumbnail') ;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hp-si-content">
                    <h2 class="hp-si-title"><?php echo get_field('nd_17_tieu_de') ;?></h2>
                    <div class="hp-si-body">
                        <p><?php echo get_field('nd_17_mo_ta') ;?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (get_field('nd_18_tieu_de')) {?>
    <div class="hp-service-item hp-card-animation ">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 ">
                <div class="hp-si-image">
                    <div class="hp-si-image-inner">
                        <img class="w-100" src="<?php echo get_field('nd_18_anh_thumbnail') ;?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="hp-si-content">
                    <h2 class="hp-si-title"><?php echo get_field('nd_18_tieu_de') ;?></h2>
                    <div class="hp-si-body">
                        <p><?php echo get_field('nd_18_mo_ta') ;?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>