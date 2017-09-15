<?php 
	
	add_theme_support('post-thumbnails');

	function b2w_theme_styles () {
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style('animate_css', get_template_directory_uri() . '/css/animate.min.css' );
		wp_enqueue_style('jquery.easy-pie-chart_css', get_template_directory_uri() . '/css/jquery.easy-pie-chart.css' );
		wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style('font-amo-space_css', get_template_directory_uri() . '/css/font-amo-space.css' );
		wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );
	}

	add_action ('wp_enqueue_scripts','b2w_theme_styles');
	
	function b2w_theme_js () {
		wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery.min.js');
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_script('isotope.pkgd_js', get_template_directory_uri() . '/js/isotope.pkgd.min.js' );
		wp_enqueue_script('jquery.easypiechart_js', get_template_directory_uri() . '/js/jquery.easypiechart.min.js' );
		wp_enqueue_script('waypoints_js', get_template_directory_uri() . '/js/waypoints.min.js' );
		wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js' );
	}
	
	add_action ('wp_enqueue_scripts','b2w_theme_js');

?>