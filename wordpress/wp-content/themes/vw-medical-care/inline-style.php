<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_medical_care_first_color = get_theme_mod('vw_medical_care_first_color');

	$vw_medical_care_custom_css = '';

	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='#topbar, .view-more, .info, .location, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .scrollup i, input[type="submit"], .footer .tagcloud a:hover, .footer-2, .pagination span, .pagination a, .sidebar .tagcloud a:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments a.comment-reply-link, .toggle-nav i, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .sidebar .woocommerce-product-search button, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .footer a.custom_read_more, .sidebar a.custom_read_more{';
			$vw_medical_care_custom_css .='background-color: '.esc_html($vw_medical_care_first_color).';';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='#comments input[type="submit"].submit{';
			$vw_medical_care_custom_css .='background-color: '.esc_html($vw_medical_care_first_color).'!important;';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='a, .footer li a:hover, .post-main-box:hover h2, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$vw_medical_care_custom_css .='color: '.esc_html($vw_medical_care_first_color).';';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
			$vw_medical_care_custom_css .='border-color: '.esc_html($vw_medical_care_first_color).';';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='.post-info hr, .main-navigation ul ul{';
			$vw_medical_care_custom_css .='border-top-color: '.esc_html($vw_medical_care_first_color).';';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='.main-header, .main-navigation ul ul, .page-template-custom-home-page .header-fixed{';
			$vw_medical_care_custom_css .='border-bottom-color: '.esc_html($vw_medical_care_first_color).';';
		$vw_medical_care_custom_css .='}';
	}
	if($vw_medical_care_first_color != false){
		$vw_medical_care_custom_css .='.post-main-box, .sidebar .widget{
		box-shadow: 0px 15px 10px -15px '.esc_html($vw_medical_care_first_color).';
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_medical_care_theme_lay = get_theme_mod( 'vw_medical_care_width_option','Full Width');
    if($vw_medical_care_theme_lay == 'Boxed'){
		$vw_medical_care_custom_css .='body{';
			$vw_medical_care_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Wide Width'){
		$vw_medical_care_custom_css .='body{';
			$vw_medical_care_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Full Width'){
		$vw_medical_care_custom_css .='body{';
			$vw_medical_care_custom_css .='max-width: 100%;';
		$vw_medical_care_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_medical_care_theme_lay = get_theme_mod( 'vw_medical_care_slider_opacity_color','0.5');
	if($vw_medical_care_theme_lay == '0'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.1'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.1';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.2'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.2';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.3'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.3';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.4'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.4';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.5'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.5';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.6'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.6';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.7'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.7';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.8'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.8';
		$vw_medical_care_custom_css .='}';
		}else if($vw_medical_care_theme_lay == '0.9'){
		$vw_medical_care_custom_css .='#slider img{';
			$vw_medical_care_custom_css .='opacity:0.9';
		$vw_medical_care_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_medical_care_theme_lay = get_theme_mod( 'vw_medical_care_slider_content_option','Left');
    if($vw_medical_care_theme_lay == 'Left'){
		$vw_medical_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_medical_care_custom_css .='text-align:left; left:10%; right:40%;';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Center'){
		$vw_medical_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_medical_care_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Right'){
		$vw_medical_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_medical_care_custom_css .='text-align:right; left:40%; right:10%;';
		$vw_medical_care_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_medical_care_theme_lay = get_theme_mod( 'vw_medical_care_blog_layout_option','Default');
    if($vw_medical_care_theme_lay == 'Default'){
		$vw_medical_care_custom_css .='.post-main-box{';
			$vw_medical_care_custom_css .='';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Center'){
		$vw_medical_care_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_medical_care_custom_css .='text-align:center;';
		$vw_medical_care_custom_css .='}';
		$vw_medical_care_custom_css .='.post-info{';
			$vw_medical_care_custom_css .='margin-top:10px;';
		$vw_medical_care_custom_css .='}';
		$vw_medical_care_custom_css .='.post-info hr{';
			$vw_medical_care_custom_css .='margin:15px auto;';
		$vw_medical_care_custom_css .='}';
	}else if($vw_medical_care_theme_lay == 'Left'){
		$vw_medical_care_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_medical_care_custom_css .='text-align:Left;';
		$vw_medical_care_custom_css .='}';
		$vw_medical_care_custom_css .='.post-main-box h2{';
			$vw_medical_care_custom_css .='margin-top:10px;';
		$vw_medical_care_custom_css .='}';
		$vw_medical_care_custom_css .='.post-info hr{';
			$vw_medical_care_custom_css .='margin-bottom:10px;';
		$vw_medical_care_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_medical_care_resp_topbar = get_theme_mod( 'vw_medical_care_resp_topbar_hide_show',false);
    if($vw_medical_care_resp_topbar == true){
    	$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='#topbar{';
			$vw_medical_care_custom_css .='display:block;';
		$vw_medical_care_custom_css .='} }';
	}else if($vw_medical_care_resp_topbar == false){
		$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='#topbar{';
			$vw_medical_care_custom_css .='display:none;';
		$vw_medical_care_custom_css .='} }';
	}

	$vw_medical_care_resp_stickyheader = get_theme_mod( 'vw_medical_care_stickyheader_hide_show',false);
    if($vw_medical_care_resp_stickyheader == true){
    	$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.header-fixed{';
			$vw_medical_care_custom_css .='display:block;';
		$vw_medical_care_custom_css .='} }';
	}else if($vw_medical_care_resp_stickyheader == false){
		$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.header-fixed{';
			$vw_medical_care_custom_css .='display:none;';
		$vw_medical_care_custom_css .='} }';
	}

	$vw_medical_care_resp_slider = get_theme_mod( 'vw_medical_care_resp_slider_hide_show',false);
    if($vw_medical_care_resp_slider == true){
    	$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='#slider{';
			$vw_medical_care_custom_css .='display:block;';
		$vw_medical_care_custom_css .='} }';
	}else if($vw_medical_care_resp_slider == false){
		$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='#slider{';
			$vw_medical_care_custom_css .='display:none;';
		$vw_medical_care_custom_css .='} }';
	}

	$vw_medical_care_metabox = get_theme_mod( 'vw_medical_care_metabox_hide_show',true);
    if($vw_medical_care_metabox == true){
    	$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.post-info{';
			$vw_medical_care_custom_css .='display:block;';
		$vw_medical_care_custom_css .='} }';
	}else if($vw_medical_care_metabox == false){
		$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.post-info{';
			$vw_medical_care_custom_css .='display:none;';
		$vw_medical_care_custom_css .='} }';
	}

	$vw_medical_care_sidebar = get_theme_mod( 'vw_medical_care_sidebar_hide_show',true);
    if($vw_medical_care_sidebar == true){
    	$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.sidebar{';
			$vw_medical_care_custom_css .='display:block;';
		$vw_medical_care_custom_css .='} }';
	}else if($vw_medical_care_sidebar == false){
		$vw_medical_care_custom_css .='@media screen and (max-width:575px) {';
		$vw_medical_care_custom_css .='.sidebar{';
			$vw_medical_care_custom_css .='display:none;';
		$vw_medical_care_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_medical_care_topbar_padding_top_bottom = get_theme_mod('vw_medical_care_topbar_padding_top_bottom');
	if($vw_medical_care_topbar_padding_top_bottom != false){
		$vw_medical_care_custom_css .='#topbar{';
			$vw_medical_care_custom_css .='padding-top: '.esc_html($vw_medical_care_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_medical_care_topbar_padding_top_bottom).';';
		$vw_medical_care_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_medical_care_search_padding_top_bottom = get_theme_mod('vw_medical_care_search_padding_top_bottom');
	$vw_medical_care_search_padding_left_right = get_theme_mod('vw_medical_care_search_padding_left_right');
	$vw_medical_care_search_font_size = get_theme_mod('vw_medical_care_search_font_size');
	$vw_medical_care_search_border_radius = get_theme_mod('vw_medical_care_search_border_radius');
	if($vw_medical_care_search_padding_top_bottom != false || $vw_medical_care_search_padding_left_right != false || $vw_medical_care_search_font_size != false || $vw_medical_care_search_border_radius != false){
		$vw_medical_care_custom_css .='.search-box i{';
			$vw_medical_care_custom_css .='padding-top: '.esc_html($vw_medical_care_search_padding_top_bottom).'; padding-bottom: '.esc_html($vw_medical_care_search_padding_top_bottom).';padding-left: '.esc_html($vw_medical_care_search_padding_left_right).';padding-right: '.esc_html($vw_medical_care_search_padding_left_right).';font-size: '.esc_html($vw_medical_care_search_font_size).';border-radius: '.esc_html($vw_medical_care_search_border_radius).'px;';
		$vw_medical_care_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_medical_care_button_padding_top_bottom = get_theme_mod('vw_medical_care_button_padding_top_bottom');
	$vw_medical_care_button_padding_left_right = get_theme_mod('vw_medical_care_button_padding_left_right');
	if($vw_medical_care_button_padding_top_bottom != false || $vw_medical_care_button_padding_left_right != false){
		$vw_medical_care_custom_css .='.post-main-box .view-more{';
			$vw_medical_care_custom_css .='padding-top: '.esc_html($vw_medical_care_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_medical_care_button_padding_top_bottom).';padding-left: '.esc_html($vw_medical_care_button_padding_left_right).';padding-right: '.esc_html($vw_medical_care_button_padding_left_right).';';
		$vw_medical_care_custom_css .='}';
	}

	$vw_medical_care_button_border_radius = get_theme_mod('vw_medical_care_button_border_radius');
	if($vw_medical_care_button_border_radius != false){
		$vw_medical_care_custom_css .='.post-main-box .view-more{';
			$vw_medical_care_custom_css .='border-radius: '.esc_html($vw_medical_care_button_border_radius).'px;';
		$vw_medical_care_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_medical_care_copyright_alingment = get_theme_mod('vw_medical_care_copyright_alingment');
	if($vw_medical_care_copyright_alingment != false){
		$vw_medical_care_custom_css .='.copyright p{';
			$vw_medical_care_custom_css .='text-align: '.esc_html($vw_medical_care_copyright_alingment).';';
		$vw_medical_care_custom_css .='}';
	}

	$vw_medical_care_copyright_padding_top_bottom = get_theme_mod('vw_medical_care_copyright_padding_top_bottom');
	if($vw_medical_care_copyright_padding_top_bottom != false){
		$vw_medical_care_custom_css .='.footer-2{';
			$vw_medical_care_custom_css .='padding-top: '.esc_html($vw_medical_care_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_medical_care_copyright_padding_top_bottom).';';
		$vw_medical_care_custom_css .='}';
	}