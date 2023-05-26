			</main><!-- /#main -->
			<footer class="hp-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="<?php echo get_theme_mod('hp_link_bg'); ?>" class="hp-icon-link">
								<svg xmlns="http://www.w3.org/2000/svg" width="31" height="26" viewBox="0 0 31 26" fill="none">
									<path d="M1 15.0122H8.59604L10.2703 9.50781H15.1203" stroke="currentColor" stroke-width="3" />
									<path d="M15.1214 20.1386H7.39551V24H1.82031V11.6649L7.39551 2H15.1214" stroke="currentColor" stroke-width="3" />
									<path d="M14.6518 20.1386H23.6033V24H29.1783V11.6649L23.6033 2H14.6518" stroke="currentColor" stroke-width="3" />
									<path d="M29.9178 15.0112H22.3218L20.6475 9.50684H14.2417" stroke="currentColor" stroke-width="3" />
								</svg>
								<span>Bảng giá</span>
							</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo get_theme_mod('hp_link_dklt'); ?>" class="hp-icon-link">
								<svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 26.6036C21.9588 26.6036 27.6 21.1847 27.6 14.5002C27.6 7.81563 21.9588 2.39673 15 2.39673C8.04124 2.39673 2.40002 7.81563 2.40002 14.5002C2.40002 21.1847 8.04124 26.6036 15 26.6036Z" stroke="currentColor" stroke-width="3" />
									<path d="M4.09021 9.03296H25.5029" stroke="currentColor" stroke-width="3" />
									<path d="M3.03381 14.8269L11.3618 17.0809V25.1204" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
									<path d="M26.6545 14.8269L18.3256 17.0809V25.1204" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
								</svg>
								<span>Đăng ký lái thử</span>
							</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo get_theme_mod('hp_link_npp'); ?>" class="hp-icon-link">
								<svg width="23" height="30" viewBox="0 0 23 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.0032 3C6.5902 3 3 6.61526 3 11.059C3 11.7673 3.35513 13.9482 6.6446 18.8894C8.12334 21.1106 9.77503 23.2532 11.0553 24.8533C12.0216 23.6463 13.1892 22.1275 14.3275 20.5014C18.6689 14.2993 19.0063 11.7061 19.0063 11.059C19.0063 6.61526 15.4161 3 11.0032 3ZM11.0032 0C17.08 0 22.0063 4.95129 22.0063 11.059C22.0063 17.1667 10.9179 29.7268 11.0032 29.5783C11.0883 29.43 0 17.1667 0 11.059C0 4.95129 4.92628 0 11.0032 0Z" fill="currentColor" />
									<path d="M11.003 16.3091C13.322 16.3091 15.202 14.4292 15.202 12.1101C15.202 9.79109 13.322 7.91113 11.003 7.91113C8.68391 7.91113 6.80396 9.79109 6.80396 12.1101C6.80396 14.4292 8.68391 16.3091 11.003 16.3091Z" stroke="currentColor" stroke-width="3" />
								</svg>
								<span>Nhà phân phối</span>
							</a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo get_theme_mod('hp_link_tb'); ?>" class="hp-icon-link">
								<svg xmlns="http://www.w3.org/2000/svg" width="31" height="26" viewBox="0 0 31 26" fill="none">
									<path d="M1 15.0122H8.59604L10.2703 9.50781H15.1203" stroke="currentColor" stroke-width="3" />
									<path d="M15.1214 20.1386H7.39551V24H1.82031V11.6649L7.39551 2H15.1214" stroke="currentColor" stroke-width="3" />
									<path d="M14.6518 20.1386H23.6033V24H29.1783V11.6649L23.6033 2H14.6518" stroke="currentColor" stroke-width="3" />
									<path d="M29.9178 15.0112H22.3218L20.6475 9.50684H14.2417" stroke="currentColor" stroke-width="3" />
								</svg>
								<span>Tải Brochure</span>
							</a>
						</div>
					</div>
					<div class="hp-footer-widgets">
						<div class="row">
							<div class="col-lg-8">
								<div class="row">
									<?php if (is_active_sidebar('footer_menu_1_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_1_widget_area'); ?>
										</div>
									<?php
									} ?>
									<?php if (is_active_sidebar('footer_menu_2_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_2_widget_area'); ?>
										</div>
									<?php
									} ?>
									<?php if (is_active_sidebar('footer_menu_3_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_3_widget_area'); ?>
										</div>
									<?php
									} ?>
									<?php if (is_active_sidebar('footer_menu_4_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_4_widget_area'); ?>
										</div>
									<?php
									} ?>
									<?php if (is_active_sidebar('footer_menu_5_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_5_widget_area'); ?>
										</div>
									<?php
									} ?>
									<?php if (is_active_sidebar('footer_menu_6_widget_area')) {
									?>
										<div class="col-lg-4">
											<?php dynamic_sidebar('footer_menu_6_widget_area'); ?>
										</div>
									<?php
									} ?>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="hp-fw-full">
									<div class="hp-fw-contact">
										<a href="tel:<?php echo get_theme_mod('hp_hotline'); ?>">
											<img src="https://www.mitsubishi-motors.com.vn/public/img/icons/phone-white.svg" alt="" />
											<span><?php echo get_theme_mod('hp_hotline'); ?> (Đường dây nóng)</span>
										</a>
										<a href="tel:<?php echo get_theme_mod('hp_support'); ?>">
											<img src="https://www.mitsubishi-motors.com.vn/public/img/icons/smartphone.png" alt="" />
											<span><?php echo get_theme_mod('hp_support'); ?> (Hỗ trợ kỹ thuật)</span>
										</a>
										<a href="mailto:<?php echo get_theme_mod('hp_email'); ?>">
											<img src="https://www.mitsubishi-motors.com.vn/public/img/icons/email-white.svg" alt="" />
											<span><?php echo get_theme_mod('hp_email'); ?></span>
										</a>
									</div>
									<div class="hp-fw-social">
										<a href="<?php echo get_theme_mod('hp_facebook'); ?>">
											<img src="<?php echo get_theme_file_uri('assets/images/facebook-icon.svg'); ?>" alt="facebook" />
										</a>
										<a href="<?php echo get_theme_mod('hp_youtube'); ?>">
											<img src="<?php echo get_theme_file_uri('assets/images/youtube-icon.svg'); ?>" alt="youtube" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hp-footer-bottom">
					<div class="container">
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="languages">
									<a href="#" class="active">Tiếng Việt</a>
									<a href="#">English</a>
								</div>
								<?php
								if (get_theme_mod('hp_link_csbm')) {
								?>
									<a class="hp-fb-link" href="<?php echo get_theme_mod('hp_link_csbm'); ?>">Chính sách bảo mật</a>
								<?php
								}
								?>
							</div>
							<div class="col-md-6 text-md-end">
								<div class="copyright">© <?php echo get_theme_mod('hp_bqtv'); ?> <?php echo date('Y'); ?>. Mọi quyền được bảo lưu.</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			</div><!-- /#wrapper -->
			<?php
			wp_footer();
			?>
			</body>

			</html>