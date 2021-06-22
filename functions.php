<?php 

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

// CUSTOM ADMIN LOGO
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(screenshot.png);
            width: 248px !important;
            height: 150px !important;
            background-size: contain;
        }

	body.login {
	    background-color: rgb(243, 243, 243) !important;
	}

	.login .button-primary {
	    background: #557995 !important;
        border-color: #557995 !important;
        box-shadow: 0 1px 0 #949494 !important;
        text-shadow: none !important;
	}

       .login .button-primary:hover {
	    background: #B0C9DE !important;
        border-color: #B0C9DE !important;
        box-shadow: 0 1px 0 #4a4a4a !important;
        text-shadow: none;
    }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Tu Sitio';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// ADD SVG
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
	}
add_filter('upload_mimes', 'cc_mime_types');

