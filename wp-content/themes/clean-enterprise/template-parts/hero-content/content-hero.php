<?php
/**
 * The template used for displaying hero content
 *
 * @package Clean_Enterprise
 */
?>

<?php
$enable_section = get_theme_mod( 'clean_enterprise_hero_content_visibility', 'disabled' );

if ( ! clean_enterprise_check_section( $enable_section ) ) {
	// Bail if hero content is not enabled
	return;
}

get_template_part( 'template-parts/hero-content/post-type', 'hero' );
