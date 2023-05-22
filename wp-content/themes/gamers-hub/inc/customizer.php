<?php
/**
 * Gamers Hub: Customizer
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gamers_hub_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'gamers_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Home page Settings', 'gamers-hub' ),
	    'description' => __( 'Description of what this panel does.', 'gamers-hub' ),
	) );

  	//TP Preloader Option
	$wp_customize->add_section('gamers_hub_prealoader_option',array(
		'title' => __('TP Preloader Option', 'gamers-hub'),
		'panel' => 'gamers_hub_panel_id',
		'priority' => 10,
 	) );

	$wp_customize->add_setting('gamers_hub_preloader_show_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
	));
 	$wp_customize->add_control('gamers_hub_preloader_show_hide',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Preloader Option','gamers-hub'),
		'section' => 'gamers_hub_prealoader_option',
	));

  	$wp_customize->add_setting( 'gamers_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_color1_option', array(
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prealoader_option',
	    'settings' => 'gamers_hub_tp_preloader_color1_option',
  	)));

  	$wp_customize->add_setting( 'gamers_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_color2_option', array(
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prealoader_option',
	    'settings' => 'gamers_hub_tp_preloader_color2_option',
  	)));

  	$wp_customize->add_setting( 'gamers_hub_tp_preloader_bg_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gamers_hub_tp_preloader_bg_option', array(
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'gamers-hub'),
	    'section' => 'gamers_hub_prealoader_option',
	    'settings' => 'gamers_hub_tp_preloader_bg_option',
  	)));

	//TP General Option
	$wp_customize->add_section('gamers_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'gamers-hub'),
        'panel' => 'gamers_hub_panel_id',
        'priority' => 10,
    ) );

    $wp_customize->add_setting('gamers_hub_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
    $wp_customize->add_control('gamers_hub_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'gamers-hub'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','gamers-hub'),
            'Container' => __('Container','gamers-hub'),
            'Container Fluid' => __('Container Fluid','gamers-hub')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('gamers_hub_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Position', 'gamers-hub'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','gamers-hub'),
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub'),
            'three-column' => __('Three Columns','gamers-hub'),
            'four-column' => __('Four Columns','gamers-hub'),
            'grid' => __('Grid Layout','gamers-hub')
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('gamers_hub_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'gamers-hub'),
        'description'   => __('This option work for pages.', 'gamers-hub'),
        'section' => 'gamers_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','gamers-hub'),
            'left' => __('Left','gamers-hub'),
            'right' => __('Right','gamers-hub')
        ),
	) );

	//TP Blog Option
	$wp_customize->add_section('gamers_hub_blog_option',array(
        'title' => __('TP Blog Option', 'gamers-hub'),
        'panel' => 'gamers_hub_panel_id',
        'priority' => 10,
    ) );

    $wp_customize->add_setting('gamers_hub_remove_date',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_remove_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date Option','gamers-hub'),
       'section' => 'gamers_hub_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_date', array(
		'selector' => '.entry-date',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_date',
	) );

    $wp_customize->add_setting('gamers_hub_remove_author',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_remove_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author Option','gamers-hub'),
       'section' => 'gamers_hub_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_author', array(
		'selector' => '.entry-author',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_author',
	) );

    $wp_customize->add_setting('gamers_hub_remove_comments',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_remove_comments',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comment Option','gamers-hub'),
       'section' => 'gamers_hub_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_comments', array(
		'selector' => '.entry-comments',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_comments',
	) );

    $wp_customize->add_setting('gamers_hub_remove_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_remove_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tags Option','gamers-hub'),
       'section' => 'gamers_hub_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_tags',
	 ));

    $wp_customize->add_setting('gamers_hub_remove_read_button',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_remove_read_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Read More Button','gamers-hub'),
       'section' => 'gamers_hub_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'gamers_hub_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_remove_read_button',
	 ));

    $wp_customize->add_setting('gamers_hub_read_more_text',array(
		'default'=> __('Read More','gamers-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','gamers-hub'),
		'section'=> 'gamers_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'gamers_hub_read_more_text', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_read_more_text',
	) );

	$wp_customize->add_setting( 'gamers_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'gamers_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'gamers_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','gamers-hub' ),
		'section'     => 'gamers_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Top bar Section
	$wp_customize->add_section( 'gamers_hub_topbar', array(
    	'title'      => __( 'Contact Details', 'gamers-hub' ),
    	'description' => __( 'Add your contact details', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 10,
	) );

	$wp_customize->add_setting('gamers_hub_search_icon',array(
		'default' => false,
		'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
	));
 	$wp_customize->add_control('gamers_hub_search_icon',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Search Option','gamers-hub'),
		'section' => 'gamers_hub_topbar',
	));

	$wp_customize->add_setting('gamers_hub_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('gamers_hub_mail',array(
		'label'	=> __('Add Mail Address','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('gamers_hub_login_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_login_button',array(
		'label'	=> __('Add Login Text','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('gamers_hub_register_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_register_button_link',array(
		'label'	=> __('Add Login URL','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('gamers_hub_sign_up_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_sign_up_button',array(
		'label'	=> __('Add Sign Up Text','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('gamers_hub_sign_up_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_sign_up_button_link',array(
		'label'	=> __('Add Sign Up URL','gamers-hub'),
		'section'=> 'gamers_hub_topbar',
		'type'=> 'url'
	));

	// Social Link
	$wp_customize->add_section( 'gamers_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'gamers-hub' ),
    	'description' => __( 'Add your Social Links', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 10,
	) );

	$wp_customize->add_setting('gamers_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_facebook_url',array(
		'label'	=> __('Facebook Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->selective_refresh->add_partial( 'gamers_hub_facebook_url', array(
		'selector' => '.social-media',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_facebook_url',
	) );

	$wp_customize->add_setting('gamers_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_twitter_url',array(
		'label'	=> __('Twitter Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('gamers_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_instagram_url',array(
		'label'	=> __('Instagram Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('gamers_hub_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_youtube_url',array(
		'label'	=> __('YouTube Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('gamers_hub_pint_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gamers_hub_pint_url',array(
		'label'	=> __('Pinterest Link','gamers-hub'),
		'section'=> 'gamers_hub_social_media',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'gamers_hub_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'gamers-hub' ),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 10,
	) );

	$wp_customize->add_setting('gamers_hub_slider_arrows',array(
       'default' => false,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','gamers-hub'),
       'section' => 'gamers_hub_slider_section',
    ));

    $wp_customize->selective_refresh->add_partial( 'gamers_hub_slider_arrows', array(
			'selector' => '#slider .carousel-caption',
			'render_callback' => 'gamers_hub_customize_partial_gamers_hub_slider_arrows',
		) );

	for ( $gamers_hub_count = 1; $gamers_hub_count <= 4; $gamers_hub_count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'gamers_hub_slider_page' . $gamers_hub_count, array(
			'default'           => '',
			'sanitize_callback' => 'gamers_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'gamers_hub_slider_page' . $gamers_hub_count, array(
			'label'    => __( 'Select Slide Image Page', 'gamers-hub' ),
			'section'  => 'gamers_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//From Our Blog
	$wp_customize->add_section('gamers_hub_static_blog_section',array(
		'title'	=> __('Blog Section','gamers-hub'),
		'panel' => 'gamers_hub_panel_id',
      'priority' => 10,
	));

	$wp_customize->add_setting('gamers_hub_blog_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_blog_tittle',array(
		'label'	=> __('Blog Title','gamers-hub'),
		'section'	=> 'gamers_hub_static_blog_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('gamers_hub_blog_sub_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_blog_sub_tittle',array(
		'label'	=> __('Blog Sub Title','gamers-hub'),
		'section'	=> 'gamers_hub_static_blog_section',
		'type'		=> 'text'
	));

	$gamers_hub_categories = get_categories();
	$cats = array();
	$i = 0;
	$gamers_hub_offer_cat[]= 'select';
	foreach($gamers_hub_categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$gamers_hub_offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('gamers_hub_our_fund_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'gamers_hub_sanitize_choices',
	));
	$wp_customize->add_control('gamers_hub_our_fund_section_category',array(
		'type'    => 'select',
		'choices' => $gamers_hub_offer_cat,
		'label' => __('Select Category','gamers-hub'),
		'section' => 'gamers_hub_static_blog_section',
	));


	//footer
	$wp_customize->add_section('gamers_hub_footer_section',array(
		'title'	=> __('Footer Text','gamers-hub'),
		'description'	=> __('Add copyright text.','gamers-hub'),
		'panel' => 'gamers_hub_panel_id'
	));

	$wp_customize->add_setting('gamers_hub_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('gamers_hub_footer_text',array(
		'label'	=> __('Copyright Text','gamers-hub'),
		'section'	=> 'gamers_hub_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->selective_refresh->add_partial( 'gamers_hub_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'gamers_hub_customize_partial_gamers_hub_footer_text',
	) );

    $wp_customize->add_setting('gamers_hub_return_to_header',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_return_to_header',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Return to header','gamers-hub'),
       'section' => 'gamers_hub_footer_section',
    ));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('gamers_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
	$wp_customize->add_control('gamers_hub_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'gamers-hub'),
        'description'   => __('This option work for scroll to top', 'gamers-hub'),
        'section' => 'gamers_hub_footer_section',
        'choices' => array(
            'Right' => __('Right','gamers-hub'),
            'Left' => __('Left','gamers-hub'),
            'Center' => __('Center','gamers-hub')
        ),
	) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'gamers_hub_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'gamers_hub_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting('gamers_hub_site_title_text',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_site_title_text',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','gamers-hub'),
       'section' => 'title_tagline',
    ));

		// logo site title size
		$wp_customize->add_setting('gamers_hub_site_title_font_size',array(
			'default'	=> 30,
			'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
		));
		$wp_customize->add_control('gamers_hub_site_title_font_size',array(
			'label'	=> __('Site Title Font Size in PX','gamers-hub'),
			'section'	=> 'title_tagline',
			'setting'	=> 'gamers_hub_site_title_font_size',
			'type'	=> 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 100,
			),
		));

    $wp_customize->add_setting('gamers_hub_site_tagline_text',array(
       'default' => false,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_site_tagline_text',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tagline','gamers-hub'),
       'section' => 'title_tagline',
    ));


		// logo site tagline size
	$wp_customize->add_setting('gamers_hub_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','gamers-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'gamers_hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

    $wp_customize->add_setting('gamers_hub_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	 $wp_customize->add_control('gamers_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','gamers-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('gamers_hub_logo_settings',array(
        'default' => 'Different Line',
        'sanitize_callback' => 'gamers_hub_sanitize_choices'
	));
   $wp_customize->add_control('gamers_hub_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'gamers-hub'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'gamers-hub'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','gamers-hub'),
            'Same Line' => __('Same Line','gamers-hub')
        ),
	) );

	$wp_customize->add_setting('gamers_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_per_columns',array(
		'label'	=> __('Product Per Row','gamers-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('gamers_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'gamers_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('gamers_hub_product_per_page',array(
		'label'	=> __('Product Per Page','gamers-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

    $wp_customize->add_setting('gamers_hub_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Shop page sidebar','gamers-hub'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting('gamers_hub_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'gamers_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('gamers_hub_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product page sidebar','gamers-hub'),
       'section' => 'woocommerce_product_catalog',
    ));
}
add_action( 'customize_register', 'gamers_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Gamers Hub 1.0
 * @see gamers_hub_customize_register()
 *
 * @return void
 */
function gamers_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Gamers Hub 1.0
 * @see gamers_hub_customize_register()
 *
 * @return void
 */
function gamers_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'GAMERS_HUB_PRO_THEME_NAME' ) ) {
	define( 'GAMERS_HUB_PRO_THEME_NAME', esc_html__( 'Gamers Hub Pro Theme', 'gamers-hub' ));
}
if ( ! defined( 'GAMERS_HUB_PRO_THEME_URL' ) ) {
	define( 'GAMERS_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/gamers-hub-wordpress-theme/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Gamers_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Gamers_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Gamers_Hub_Customize_Section_Pro(
				$manager,
				'gamers_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => GAMERS_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'gamers-hub' ),
					'pro_url'  => esc_url( GAMERS_HUB_PRO_THEME_URL, 'gamers-hub' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'gamers-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'gamers-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Gamers_Hub_Customize::get_instance();