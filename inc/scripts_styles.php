<?php

function theme_enqueue_scripts_and_styles() {

	$style_time = file_exists( get_stylesheet_directory() . '/dist/scss/main.css' ) ? filemtime( get_stylesheet_directory() . '/dist/scss/main.css' ) : false;
	$script_time = file_exists( get_stylesheet_directory() . '/dist/js/main.js' ) ? filemtime( get_stylesheet_directory() . '/dist/js/main.js' ) : false;

	// Enqueue style
	wp_enqueue_style( 'css_swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.1/swiper-bundle.min.css', [], '', 'all' );
	wp_enqueue_style( 'css_select2', '//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', [], '', 'all' );
	wp_enqueue_style( 'dp-styles', get_stylesheet_directory_uri() .'/dist/scss/main.css?'.$style_time, [], '', 'all' );

	// Enqueue scripts
	wp_enqueue_script( 'js_swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.1/swiper-bundle.min.js', ['jquery'], '', 'all' );
	wp_enqueue_script( 'js_select2', '//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', ['jquery'], '', 'all' );
	wp_enqueue_script( 'dp-theme-js', get_stylesheet_directory_uri() .'/dist/js/app.js?'.$script_time, ['jquery'], '', 'all' );

	//enqueue Google Charts JS
	//wp_enqueue_script('google-charts-js', 'https://www.gstatic.com/charts/loader.js', array(), '1.0.0', true);
	//enqueue dataTables JS
	// wp_enqueue_script('data-tables-moment-js', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js', array(), '2.30.1', true);
	// wp_enqueue_script('data-tables-moment-loc-js', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment-with-locales.min.js', array(), '2.30.1', true);
	// wp_enqueue_script('data-tables-js', '//cdnjs.cloudflare.com/ajax/libs/datatables.net/2.1.8/dataTables.min.js', array(), '2.1.8', true);
	// wp_enqueue_script('data-tables-ui-js', '//cdn.datatables.net/2.1.8/js/dataTables.jqueryui.js', array(), '2.1.8', true);
	// wp_enqueue_script('data-tables-bootstrap-js', '//cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/2.1.8/dataTables.bootstrap5.min.js', array(), '1.10.21', true);
	// wp_enqueue_script('data-tables-buttons-js', '//cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js', array(), '1.10.21', true);
	// wp_enqueue_script('data-tables-buttons-html5-js', '//cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js', array(), '3.1.2', true);
	// wp_enqueue_script('data-tables-buttons-print-js', '//cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js', array(), '1.10.21', true);
	// wp_enqueue_script('data-tables-jszip-js', '//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js', array(), '3.10.1', true);
	// wp_enqueue_script('data-tables-pdfmake-js', '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js', array(), '0.2.7', true);
	// wp_enqueue_script('data-tables-pdfmake-vfs_fonts-js', '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js', array(), '0.2.7', true);		
	//enqueue dataTables CSS
	// wp_enqueue_style('data-tables-css', '//cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css', array(), '1.10.18');
	// wp_enqueue_style('data-tables-ui-css', '//cdn.datatables.net/2.1.8/css/dataTables.jqueryui.css', array(), '1.10.18');
	// wp_enqueue_style('data-tables-bootstrap-css', '//cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css', array(), '2.1.8');
	// wp_enqueue_style('data-tables-bootstrap-btns-css', '//cdn.datatables.net/buttons/3.1.2/css/buttons.bootstrap5.css', array(), '3.1.2');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts_and_styles' );

// Admin Style
function theme_enqueue_custom_admin_script_style() {
	wp_enqueue_style( 'admin-css', get_stylesheet_directory_uri() . '/dist/scss/admin.css', array(), '1.0', 'all' );
	//wp_enqueue_script( 'admin-js', get_stylesheet_directory_uri() . '/dist/js/admin.js', ['jquery'], '1.0', 'all' );
}
add_action( 'admin_enqueue_scripts', 'theme_enqueue_custom_admin_script_style' );

/**
 * Add Tag type="module"
 */
function add_module_to_my_script($tag, $handle, $src) {
    if ("dp-theme-js" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);

add_action( 'init', function() {

	if (  ! is_admin()) {
		if( is_ssl() ) {
			$protocol = 'https';
		} else {
			$protocol = 'http';
		}

		/** @var WP_Scripts $wp_scripts */
		global  $wp_scripts;
		/** @var _WP_Dependency $core */
		$core = $wp_scripts->registered[ 'jquery-core' ];
		$core_version = $core->ver;
		$core->src = "$protocol://ajax.googleapis.com/ajax/libs/jquery/$core_version/jquery.min.js";

		if ( WP_DEBUG ) {
			/** @var _WP_Dependency $migrate */
			$migrate         = $wp_scripts->registered[ 'jquery-migrate' ];
			$migrate_version = $migrate->ver;
			$migrate->src    = "$protocol://cdn.jsdelivr.net/jquery.migrate/$migrate_version/jquery-migrate.min.js";
		} else {
			/** @var _WP_Dependency $jquery */
			$jquery = $wp_scripts->registered[ 'jquery' ];
			$jquery->deps = [ 'jquery-core' ];
		}
    }
	
},11);