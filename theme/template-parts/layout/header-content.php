<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ultrasonics
 */

?>

<header id="masthead">

	<div class="flex justify-end pr-40 bg-black	text-white hidden lg:block">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'subheader',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex p-2 gap-8" aria-label="submenu">%3$s</ul>',
				)
			);
		?>
	</div>

	<nav id="site-navigation" class="flex justify-around items-center shadow-lg hidden lg:block" aria-label="<?php esc_attr_e( 'Main Navigation', 'ultrasonics' ); ?>">
		<img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2023/09/logo.png'); ?>" class="w-80" alt="Logo">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex gap-20 uppercase" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
			<?php get_template_part( 'template-parts/layout/custom-searchform' ); ?>
	</nav><!-- #site-navigation -->

	<div class="md:hidden">
		<button id="mobile-menu-button" class="text-white">
			<svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
				<rect x="38" width="38" height="38" rx="19" transform="rotate(90 38 0)" fill="#F6F6F6"/>
				<rect x="9" y="9" width="20" height="3" rx="1.5" fill="#363895"/>
				<rect x="9" y="17" width="20" height="3" rx="1.5" fill="#363895"/>
				<rect x="15.666" y="25" width="13.3333" height="3" rx="1.5" fill="#363895"/>
			</svg>
		</button>

		<ul id="mobile-menu" class="hidden" style="display: none">
			<?php
			wp_nav_menu(
					array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'mobile-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col gap-4" aria-label="submenu">%3$s</ul>',
					)
			);
			?>
		</ul>
	</div>
</header><!-- #masthead -->
<!-- 
<script>
	document.getElementById('mobile-menu-button').addEventListener('click', function () {
		const mobileMenu = document.getElementById('mobile-menu');
});
</script> -->