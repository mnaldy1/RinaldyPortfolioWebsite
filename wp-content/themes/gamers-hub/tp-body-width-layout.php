<?php

$gamers_hub_tp_theme_css="";

	$gamers_hub_theme_lay = get_theme_mod( 'gamers_hub_tp_body_layout_settings','Full');
    if($gamers_hub_theme_lay == 'Container'){
		$gamers_hub_tp_theme_css .='body{';
			$gamers_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$gamers_hub_tp_theme_css .='}';
		$gamers_hub_tp_theme_css .='.scrolled{';
			$gamers_hub_tp_theme_css .='width: auto; left:0; right:0;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_theme_lay == 'Container Fluid'){
		$gamers_hub_tp_theme_css .='body{';
			$gamers_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$gamers_hub_tp_theme_css .='}';
		$gamers_hub_tp_theme_css .='.scrolled{';
			$gamers_hub_tp_theme_css .='width: auto; left:0; right:0;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_theme_lay == 'Full'){
		$gamers_hub_tp_theme_css .='body{';
			$gamers_hub_tp_theme_css .='max-width: 100%;';
		$gamers_hub_tp_theme_css .='}';
	}

	$gamers_hub_scroll_position = get_theme_mod( 'gamers_hub_scroll_top_position','Right');
	if($gamers_hub_scroll_position == 'Right'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Left'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='left: 20px;';
		$gamers_hub_tp_theme_css .='}';
	}else if($gamers_hub_scroll_position == 'Center'){
		$gamers_hub_tp_theme_css .='#return-to-top{';
			$gamers_hub_tp_theme_css .='right: 50%;left: 50%;';
		$gamers_hub_tp_theme_css .='}';
	}

// site title and tagline font size option
$gamers_hub_site_title_font_size = get_theme_mod('gamers_hub_site_title_font_size', 30);{
$gamers_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_title_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}

$gamers_hub_site_tagline_font_size = get_theme_mod('gamers_hub_site_tagline_font_size', 15);{
$gamers_hub_tp_theme_css .='.logo p{';
$gamers_hub_tp_theme_css .='font-size: '.esc_attr($gamers_hub_site_tagline_font_size).'px;';
	$gamers_hub_tp_theme_css .='}';
}
