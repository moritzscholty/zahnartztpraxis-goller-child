<?php

// initalizing
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // child theme styles
  wp_enqueue_style('bootstrap', get_theme_file_uri() . '/style.css');
  wp_enqueue_style('parent-style', get_theme_file_uri() . '/style.css');

  // child theme js
  wp_enqueue_script('main', get_theme_file_uri() . '/dist/js/main.min.js', array('jquery'), '1.0', true );
}

// login form styles
function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/dist/css/login.min.css' );
}
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );

add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return 'http://else.media';
}

// backend admin color scheme
function elsemedia_admin_color_schemes() {

  $theme_dir = get_stylesheet_directory_uri();

  // default
  wp_admin_css_color( 'theme', ( 'Dynamic (Theme-based)' ),
    $theme_dir . '/dist/css/scheme-theme.min.css',
    array( '#23282d', '#fff')
  );

  // else.media
  wp_admin_css_color( 'elsemedia', ( 'elsemedia' ),
    $theme_dir . '/dist/css/scheme-elsemedia.min.css',
    array( '#23282d', '#fff', '#d54e21' , '#657a84')
  );

}

add_action('admin_init', 'elsemedia_admin_color_schemes');

// backend default avatar
add_filter( 'avatar_defaults', 'mytheme_default_avatar' );
function mytheme_default_avatar( $avatar_defaults )
{
    $avatar = get_option('avatar_default');

    $new_avatar_url = get_stylesheet_directory_uri() . '/assets/images/admin.png';

    if( $avatar != $new_avatar_url )
    {
        update_option( 'avatar_default', $new_avatar_url );
    }

    $avatar_defaults[ $new_avatar_url ] = 'else.media Avatar';
    return $avatar_defaults;
}

// backend default favicon
function add_site_favicon() {
    echo '<link rel="shortcut icon"
href="' . get_stylesheet_directory_uri() . '/assets/favicons/favicon.ico" />';
}

add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');

// extensions

// activate scrollspy on page by id
if (file_exists('testing.txt')) {
  // local dev (means to create file in root folder)
  function add_scrollspy() {
      if( is_page('164') ) { // page id
        echo "<script>
          jQuery(document).ready(function ($) {
              var scrollSpy = new bootstrap.ScrollSpy(document.body, {
                  target: '#nav-main',
                  offset: 200
              })
          });
        </script>\n";
     }
  }
  add_action( 'wp_footer', 'add_scrollspy', 0 );
  // live
} else {
    function add_scrollspy() {
        if( is_page('9') ) { // page id
          echo "<script>
            jQuery(document).ready(function ($) {
                var scrollSpy = new bootstrap.ScrollSpy(document.body, {
                    target: '#nav-main',
                    offset: 200
                })
            });
          </script>\n";
       }
    }
    add_action( 'wp_footer', 'add_scrollspy', 0 );
}

// bundle relevant plugins in theme_dir


// adjustments for footer when admin-bar is showing
add_action('wp_head', 'adjust_sticky_footer');
function adjust_sticky_footer() {
    if(is_admin_bar_showing()) { ?>
        <style type="text/css">
            main {
            	min-height: calc(100vh - 290px);
            }
        </style>
    <?php
    }
}

// acf optionspage

if( function_exists('acf_add_options_page') ) {

  // menutitle
  acf_add_options_page(array(
		'page_title' 	=> 'Theme',
		'menu_slug' 	=> 'theme',
		'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-admin-site',
    'position' => 59,
		'redirect'		=> true
	));

  // submenus
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Sidebar',
		'menu_title'	=> 'Sidebar',
		'parent_slug'	=> 'theme',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Template',
		'menu_title'	=> 'Template',
		'parent_slug'	=> 'theme',
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> '404',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme',
	));

}

?>
