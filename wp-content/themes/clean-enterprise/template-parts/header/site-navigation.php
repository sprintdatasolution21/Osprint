<?php
$class = 'layout-one';

if ( has_nav_menu(  'social-primary' ) ) {
	$class = 'layout-two';
}

?>
<div id="header-navigation-area" class="nav-search-wrap">
	<div class="wrapper">
		<div id="site-header-menu" class="site-primary-menu <?php echo $class; // WPCS: XSS OK. ?>">
			<nav id="site-navigation" class="main-navigation menu-wrapper">
				<div class="menu-toggle-wrapper">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="fa fa-bars" aria-hidden="true"></i>
						<i class="fa fa-times" aria-hidden="true"></i>
						<span class="menu-label"><?php esc_html_e( 'Menu', 'clean-enterprise' ); ?></span>
					</button>
				</div>

				<div class="menu-inside-wrapper">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu-container',
					) );
					?>
					<div id="social-search-wrapper" class="menu-wrapper">
						<?php get_template_part( 'template-parts/header/top', 'search' ); ?>

						<?php if ( has_nav_menu( 'social-primary' ) ) : ?>
						<div class="social-navigation-wrapper">
							<div class="site-social">
								<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'clean-enterprise' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'social-primary',
										'container'       => 'div',
										'container_class' => 'menu-social-container',
										'depth'           => 1,
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>'
									) );
								?>
								</nav><!-- .social-navigation -->
							</div> <!-- site-social -->
						</div> <!-- .social-navigation-wraper -->
						<?php endif; ?>
					</div> <!-- #social-search-wrapper -->
				</div> <!-- .menu-inside-wrapper -->
			</nav><!-- #site-navigation -->
		</div> <!-- .site-header-menu -->
	</div> <!-- .wrapper -->
</div><!-- .nav-search-wrap -->
