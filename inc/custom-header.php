<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package ivo
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses ivo_header_style()
 */
function ivo_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'ivo_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'ivo_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'ivo_custom_header_setup' );

if ( ! function_exists( 'ivo_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see ivo_custom_header_setup().
	 */
	function ivo_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = get_header_image();

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
			if (get_theme_support( 'custom-header', 'default-image' ) !== $header_image): 
			?>
			.site-header .header-wrapper {
				background-image: url(<?php  echo esc_url($header_image) ?>);
			}
		<?php endif ?>
		<?php
		// Has the text been hidden?
		if (get_theme_support( 'custom-header', 'default-text-color' ) !== $header_text_color):
			if ( ! display_header_text() ) :
				?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					}
				<?php
				// If the user has set a custom color for the text use that.
			else :
				?>
				.site-title a,
				.site-description {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		<?php endif; ?>
		</style>
		<?php
	}
endif;