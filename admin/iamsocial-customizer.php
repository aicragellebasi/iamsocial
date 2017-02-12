<?php
/**
 * Set up the IAMSocial customizer
 *
 * @since 1.0.0
 */

function iamsocial_customize_register( $wp_customize ) {

		/*****************************
		IAMSocial general settings
		******************************/

		//general settings panel
		$wp_customize->add_panel( 'iamsocial_general', array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => __( 'IAMSocial General Settings', 'iamsocial' ),
				'description'    => __( 'Change your colors and fonts', 'iamsocial' ),
		) );
	 	//IAMSocial colors scheme
		$wp_customize->add_section( 'iamsocial_colors_section' , array(
				'title'       => __( 'IAMSocial Colors', 'iamsocial' ),
				'priority'    => '30',
				'panel'       => 'iamsocial_general',
				'description' => __( 'Choose one color theme to change the look and feel of your site', 'iamsocial' ),
		) );
		$wp_customize->add_setting( 'css_sheet' , array(
				'default' 				=> 'blue',
				'sanitize_callback'  	=> 'iamsocial_sanitize_select',
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, 'css_sheet', array(
						'label'          => __( 'Change the colors of your theme', 'iamsocial' ),
						'section'        => 'iamsocial_colors_section',
						'settings'       => 'css_sheet',
						'type'           => 'radio',
						'choices'        => array(
							'blue' 		=> __( 'Social Entrepreneur', 'iamsocial' ),
							'orange' 	=> __( 'Young Entrepreneur', 'iamsocial' ),
							'green' 	=> __( 'Risky Entrepreneur', 'iamsocial' ),
							'ocean' 	=> __( 'Expert Entrepreneur', 'iamsocial' ),
							'sunrise' 	=> __( 'Zen Entrepreneur', 'iamsocial' ),
							'forest' 	=> __( 'Eco Entrepreneur', 'iamsocial' ),
						),
				)
			)
		);

		//IAMSocial fonts

		//Prepare the array of fonts to select from
		$google_fonts = array(
			'Abel' 					=> __( 'Abel','iamsocial' ),
			'News_Cycle' 			=> __( 'News Cycle','iamsocial' ),
			'Open_Sans_Condensed' 	=> __( 'Open Sans Condensed','iamsocial' ),
			'Oswald' 				=> __( 'Oswald','iamsocial' ),
			'Quicksand' 			=> __( 'Quicksand','iamsocial' ),
			'Shadow' 				=> __( 'Shadow','iamsocial' ),
		);

		$wp_customize->add_section( 'iamsocial_fonts_section' , array(
			'title'      => __( 'IAMSocial Fonts', 'iamsocial' ),
			'priority'   => '31',
			'panel'      => 'iamsocial_general',
		) );
		$wp_customize->add_setting( 'titles_fonts' , array(
			'default' 				=> 'Oswald',
			'sanitize_callback'  	=> 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'paragraphs_fonts' , array(
			'default' 				=> 'Abel',
			'sanitize_callback'  	=> 'sanitize_text_field',
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, 'titles_fonts', array(
						'label'          => __( 'Change the font of your titles', 'iamsocial' ),
						'section'        => 'iamsocial_fonts_section',
						'settings'       => 'titles_fonts',
						'type'           => 'select',
						'description'    => __( 'change the font of your main titles', 'iamsocial' ),
						'choices'        => $google_fonts,
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, 'paragraphs_fonts', array(
						'label'          => __( 'Change the font of your paragraphs', 'iamsocial' ),
						'section'        => 'iamsocial_fonts_section',
						'settings'       => 'paragraphs_fonts',
						'type'           => 'select',
						'description'    => __( 'change the font of your paragraphs and buttons', 'iamsocial' ),
						'choices'        => $google_fonts,
				)
			)
		);

		/*****************************
		IAMSocial slider
		******************************/

		// Slider panel
		$wp_customize->add_panel( 'iamsocial_slider_panel', array(
				'priority'       => 11,
				'capability'     => 'edit_theme_options',
				'title'          => __( 'IAMSocial Slider','iamsocial' ),
				'description'    => __( 'Update and edit up to three slides', 'iamsocial' ),
		) );

		// Slider sections
		$wp_customize->add_section( 'iamsocial_slide1_section' , array(
				'title'      => __( '1st Slide Settings', 'iamsocial' ),
				'priority'   => '1',
				'panel'      => 'iamsocial_slider_panel',
		) );
		$wp_customize->add_section( 'iamsocial_slide2_section' , array(
				'title'      => __( '2nd Slide Settings', 'iamsocial' ),
				'priority'   => '2',
				'panel'      => 'iamsocial_slider_panel',
		) );
		$wp_customize->add_section( 'iamsocial_slide3_section' , array(
				'title'      => __( '3rd Slide Settings', 'iamsocial' ),
				'priority'   => '3',
				'panel'      => 'iamsocial_slider_panel',
		) );

		// Slide 1
		$wp_customize->add_setting( 'slide1_img' , array(
				'default' 			=> get_template_directory_uri().'/img/slider/slide-1.png',
				'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide1_img', array(
					'label'      	=> __( '1st slide image', 'iamsocial' ),
					'section'    	=> 'iamsocial_slide1_section',
					'settings'   	=> 'slide1_img',
					'description'   => __( 'recommended size: 960x345px', 'iamsocial' ),
				)
			)
	 	);
		$wp_customize->add_setting( 'slide1_caption' , array(
				'default' 			=> 'Customize your caption in the admin',
				'sanitize_callback' => 'iamsocial_sanitize_html'
		) );
		$wp_customize->add_control( 'slide1_caption', array(
				'label'      	=> __( '1st slide caption', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide1_section',
				'settings'   	=> 'slide1_caption',
				'description'   => __( 'Leave blank if no caption wanted', 'iamsocial' ),
			)
	 	);
		$wp_customize->add_setting( 'slide1_link' , array(
				'default' => 'http://www.isabellegarcia.com/iamsocial',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'slide1_link', array(
				'label'      	=> __( '1st slide link', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide1_section',
				'settings'   	=> 'slide1_link',
				'description'   => __( 'i.e: http://www.yourdomain.com/linktopost/', 'iamsocial' ),
			 )
	 	);
		$wp_customize->add_setting( 'slide1_caption_color' , array(
				'default' 			=> '#FFF',
				'sanitize_callback' => 'iamsocial_sanitize_hex_color',
		) );
		$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'slide1_caption_color', array(
				'label'      => __( '1st slide caption color', 'iamsocial' ),
				'section'    => 'iamsocial_slide1_section',
				'settings'   => 'slide1_caption_color',
				'description'    => __( 'Change the color of the caption text', 'iamsocial' ),
			) )
		);

		// Slide 2
		$wp_customize->add_setting( 'slide2_img' , array(
				'default' => get_template_directory_uri().'/img/slider/slide-2.png',
				'sanitize_callback' => 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide2_img', array(
					'label'      	=> __( '2nd slide image', 'iamsocial' ),
					'section'    	=> 'iamsocial_slide2_section',
					'settings'   	=> 'slide2_img',
					'description'   => __( 'recommended size: 960x345px', 'iamsocial' ),
				)
		 	)
	 	);
		$wp_customize->add_setting( 'slide2_caption' , array(
				'default' 			=> 'Customize your caption in the admin',
				'sanitize_callback' => 'iamsocial_sanitize_html',
		) );
		$wp_customize->add_control( 'slide2_caption', array(
				'label'      	=> __( '2nd slide caption', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide2_section',
				'settings'   	=> 'slide2_caption',
				'description'   => __( 'Leave blank if no caption wanted', 'iamsocial' ),
			)
	 	);
		$wp_customize->add_setting( 'slide2_link' , array(
				'default' 			=> 'www.isabellegarcia.com/iamsocial',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'slide2_link', array(
				'label'      	=> __( '2nd slide link', 'iamsocial' ),
				'section'   	=> 'iamsocial_slide2_section',
				'settings'   	=> 'slide2_link',
				'description'   => __( 'i.e: http://www.yourdomain.com/linktopost/', 'iamsocial' ),
			)
	 	);
		$wp_customize->add_setting( 'slide2_caption_color' , array(
			'default' 			=> '#FFF',
			'sanitize_callback' => 'iamsocial_sanitize_hex_color',
		) );
		$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'slide2_caption_color', array(
				'label'      	=> __( '2nd slide caption color', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide2_section',
				'settings'   	=> 'slide2_caption_color',
				'description'   => __( 'Change the color of the caption text', 'iamsocial' ),
			) )
		);

		// Slide 3
		$wp_customize->add_setting( 'slide3_img' , array(
				'default' 			=> get_template_directory_uri().'/img/slider/slide-3.png',
				'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide3_img', array(
					'label'      	=> __( '3rd slide image', 'iamsocial' ),
					'section'    	=> 'iamsocial_slide3_section',
					'settings'   	=> 'slide3_img',
					'description'   => __( 'recommended size: 960x345px', 'iamsocial' ),
				)
		 	)
	 	);
		$wp_customize->add_setting( 'slide3_caption' , array(
				'default' 			=> 'Customize your caption in the admin',
				'sanitize_callback' => 'iamsocial_sanitize_html',
		) );
		$wp_customize->add_control( 'slide3_caption', array(
				'label'      	=> __( '3rd slide caption', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide3_section',
				'settings'   	=> 'slide3_caption',
				'description'   => __( 'Leave blank if no caption wanted', 'iamsocial' ),
			 )
	 	);
		$wp_customize->add_setting( 'slide3_link' , array(
				'default' 			=> 'www.isabellegarcia.com/iamsocial',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'slide3_link', array(
				'label'      	=> __( '3rd slide link', 'iamsocial' ),
				'section'    	=> 'iamsocial_slide3_section',
				'settings'   	=> 'slide3_link',
				'description'   => __( 'i.e: http://www.yourdomain.com/linktopost/', 'iamsocial' ),
			)
			);
		$wp_customize->add_setting( 'slide3_caption_color' , array(
			'default' 			=> '#FFF',
			'sanitize_callback' => 'iamsocial_sanitize_hex_color',
		) );
		$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'slide3_caption_color', array(
					'label'      	=> __( '3rd slide caption color', 'iamsocial' ),
					'section'    	=> 'iamsocial_slide3_section',
					'settings'   	=> 'slide3_caption_color',
					'description'   => __( 'Change the color of the caption text', 'iamsocial' ),
			) )
		);

		/*****************************
		IAMSocial Social Media Icons
		******************************/

		// Icons settings panel
		$wp_customize->add_panel( 'iamsocial_icons_panel', array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'title'          => __( 'IAMSocial Social Media Icons','iamsocial' ),
				'description'    => __( 'Link your website to your social media','iamsocial' ),
		) );

		// Facebook section
		$wp_customize->add_section( 'iamsocial_icon1_section' , array(
				'title'      => __( 'Facebook', 'iamsocial' ),
				'priority'   => '1',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 1
		$wp_customize->add_setting( 'icon1_link' , array(
				'default' 			=> '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon1_link', array(
				'label'      => esc_html('Link to your Facebook Page', 'iamsocial'),
				'section'    => 'iamsocial_icon1_section',
				'settings'   => 'icon1_link',
			)
		);

		// Twitter section
		$wp_customize->add_section( 'iamsocial_icon2_section' , array(
				'title'      => __( 'Twitter', 'iamsocial' ),
				'priority'   => '2',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 2
		$wp_customize->add_setting( 'icon2_link' , array(
				'default' 			=> '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon2_link', array(
					'label'      => esc_html('Link to your Twitter Page', 'iamsocial'),
					'section'    => 'iamsocial_icon2_section',
					'settings'   => 'icon2_link',
			)
	 	);

		// Google+ section
		$wp_customize->add_section( 'iamsocial_icon3_section' , array(
				'title'      => __( 'Googleplus', 'iamsocial' ),
				'priority'   => '3',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 3
		$wp_customize->add_setting( 'icon3_link' , array(
				'default' 			=> '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon3_link', array(
				'label'     => esc_html('Link to your Google+ Page', 'iamsocial'),
				'section'    => 'iamsocial_icon3_section',
				'settings'   => 'icon3_link',
		 	)
	 	);

		// Instagram section
		$wp_customize->add_section( 'iamsocial_icon4_section' , array(
				'title'      => __( 'Instagram', 'iamsocial' ),
				'priority'   => '4',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 4
		$wp_customize->add_setting( 'icon4_link' , array(
				'default' => '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon4_link', array(
				'label'      => esc_html('Link to your Instagram Page', 'iamsocial'),
				'section'    => 'iamsocial_icon4_section',
				'settings'   => 'icon4_link',
			)
	 	);

		// Linkedin section
		$wp_customize->add_section( 'iamsocial_icon5_section' , array(
				'title'      => __( 'Linkedin', 'iamsocial' ),
				'priority'   => '5',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 5
		$wp_customize->add_setting( 'icon5_link' , array(
				'default' => '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon5_link', array(
				'label'      => esc_html('Link to your LinkedIn Profile', 'iamsocial'),
				'section'    => 'iamsocial_icon5_section',
				'settings'   => 'icon5_link',
			)
	 	);

		// Youtube section
		$wp_customize->add_section( 'iamsocial_icon6_section' , array(
				'title'      => __( 'Youtube', 'iamsocial' ),
				'priority'   => '6',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 6
		$wp_customize->add_setting( 'icon6_link' , array(
				'default' => '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon6_link', array(
				'label'      => esc_html('Link to your Youtube Page', 'iamsocial'),
				'section'    => 'iamsocial_icon6_section',
				'settings'   => 'icon6_link',
			)
	 	);
		// pinterest section
		$wp_customize->add_section( 'iamsocial_icon7_section' , array(
				'title'      => __( 'Pinterest', 'iamsocial' ),
				'priority'   => '7',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 7
		$wp_customize->add_setting( 'icon7_link' , array(
				'default' => '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon7_link', array(
				'label'      => esc_html('Link to your Pinterest Page', 'iamsocial'),
				'section'    => 'iamsocial_icon7_section',
				'settings'   => 'icon7_link',
			)
	 	);

		// Tumblr section
		$wp_customize->add_section( 'iamsocial_icon8_section' , array(
				'title'      => __( 'Tumblr', 'iamsocial' ),
				'priority'   => '8',
				'panel'      => 'iamsocial_icons_panel',
		) );
		// icon 7
		$wp_customize->add_setting( 'icon8_link' , array(
				'default' => '',
				'sanitize_callback' => 'iamsocial_sanitize_url',
		) );
		$wp_customize->add_control( 'icon8_link', array(
				'label'      => esc_html('Link to your Tumblr Site', 'iamsocial'),
				'section'    => 'iamsocial_icon8_section',
				'settings'   => 'icon8_link',
			)
	 	);
}
add_action( 'customize_register', 'iamsocial_customize_register' );

/*****************************
IAMSocial Social General Settings
Load css selected
******************************/
function iamsocial_load_css_colors() {
		$css = array(
				'blue' => array(
						'name' => 'blue',
						'title' => __( 'blue complementary', 'iamsocial' ),
						'file' => 'blue.css',
						'primary' => '#275e7f',
						'secondary' => '#019ffd',
						'complementary' => '#ff9600',
						'complementary_2' => '#b25700',
				),
				'orange' => array(
						'name' => 'orange',
						'title' => __( 'orange complementary', 'iamsocial' ),
						'file' => 'orange.css',
						'primary' => '#b23702',
						'secondary' => '#ff4d00',
						'complementary' => '#1fc908',
						'complementary_2' => '#7eff0d',
				),
				'green' => array(
						'name' => 'green',
						'title' => __( 'green complementary', 'iamsocial' ),
						'file' => 'green.css',
						'primary' => '#157800',
						'secondary' => '#4AD40C',
						'complementary' => '#7F005E',
						'complementary_2' => '#C40091',
				),
				'ocean' => array(
						'name' => 'ocean',
						'title' => __( 'ocean', 'iamsocial' ),
						'file' => 'ocean.css',
						'primary' => '#096484',
						'secondary' => '#4796b3',
						'complementary' => '#52accc',
						'complementary_2' => '#74b6ce',
				),
				'sunrise' => array(
						'name' => 'sunrise',
						'title' => __( 'sunrise', 'iamsocial' ),
						'file' => 'sunrise.css',
						'primary' => '#b43c38',
						'secondary' => '#ed332c',
						'complementary' => '#dd823b',
						'complementary_2' => '#ccaf0b',
				),
				'forest' => array(
						'name' => 'forest',
						'title' => __( 'forest', 'iamsocial' ),
						'file' => 'forest.css',
						'primary' => '#01400F',
						'secondary' => '#037F1E',
						'complementary' => '#04BF2D',
						'complementary_2' => '#05E536',
				)
		);
		$css_id = get_theme_mod( 'css_sheet', 'blue' );
		wp_register_style( 'custom-color', get_template_directory_uri().'/css/colors/'.$css[ $css_id ]['file'] );
		wp_enqueue_style( 'custom-color' );
}
add_action( 'wp_enqueue_scripts', 'iamsocial_load_css_colors', 999);

/*****************************
IAMSocial General Settings.
Load the fonts selected
******************************/

function iamsocial_change_google_fonts() {
		$fonts = array(
				'Abel' => array(
						'name' => 'Abel',
						'css' => 'Abel',
						'query' => 'Abel',
				),
				'News_Cycle' => array(
						'name' => 'News Cycle',
						'css' => 'News Cycle',
						'query' => 'News+Cycle',
				),
				'Open_Sans_Condensed' => array(
						'name' => 'Open Sans Condensed',
						'css' => 'Open Sans Condensed',
						'query' => 'Open+Sans+Condensed:300,700',
				),
				'Oswald' => array(
						'name' => 'Oswald',
						'css' => 'Oswald',
						'query' => 'Oswald:400,300,700',
				),
				'Quicksand' => array(
						'name' => 'Quicksand',
						'css' => 'Quicksand',
						'query' => 'Quicksand:400,300,700',
				),
				'Shadow' => array(
						'name' => 'Shadow',
						'css' => 'Shadows Into Light',
						'query' => 'Shadows+Into+Light',
				),
		);
		$titles_font = get_theme_mod( 'titles_fonts', 'Oswald' );
		$paragraphs_font = get_theme_mod( 'paragraphs_fonts', 'Abel' );

		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family='.$fonts[ $titles_font ]['query'].'|'.$fonts[ $paragraphs_font ]['query'] );

		?>
		<style type='text/css'>
				body, *, button {font-family:<?php echo $fonts[ $paragraphs_font ]['css']; ?>}
				h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {font-family:<?php echo $fonts[ $titles_font ]['css']; ?>}
		</style>
		<?php
}
add_action( 'wp_head', 'iamsocial_change_google_fonts' );

/*****************************
IAMSocial Slider
Colors for Slider Captions
******************************/
function iamsocial_slider_caption_color() {
		?>
		<style type='text/css'>
				.carousel .carousel-caption h2#caption-1 a{ color:  <?php echo iamsocial_sanitize_hex_color( get_theme_mod( 'slide1_caption_color', '#fff' ) ); ?>; }
				.carousel .carousel-caption h2#caption-2 a{ color:  <?php echo iamsocial_sanitize_hex_color( get_theme_mod( 'slide2_caption_color', '#fff' ) ); ?>; }
				.carousel .carousel-caption h2#caption-3 a{ color:  <?php echo iamsocial_sanitize_hex_color( get_theme_mod( 'slide3_caption_color', '#fff' ) ); ?>; }
		</style>
		<?php
}
add_action( 'wp_head', 'iamsocial_slider_caption_color' );

?>
