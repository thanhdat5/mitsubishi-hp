<?php

/**
 * Template Name: Chính sách bảo mật
 * Description: Mẫu giao diện Trang Chính sách bảo mật
 *
 */

get_header();
?>
<div class="hp-policy-page">
    <div class="hp-policy-header">
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="hp-policy-content"><?php echo get_the_content(); ?></div>
    </div>
</div>
<?php
get_footer();