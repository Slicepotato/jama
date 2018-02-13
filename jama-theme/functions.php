<?php
function my_theme_enqueue_styles() {

    $parent_style = 'html5blank-stable';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function jama_widgets() {
  register_sidebar(
    array(
      'name' => 'Footer Sidebar 1',
      'id' => 'footer-sidebar-1',
      'description' => 'Appears in the footer area',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name' => 'Footer Sidebar 2',
      'id' => 'footer-sidebar-2',
      'description' => 'Appears in the footer area',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name' => 'Footer Sidebar 3',
      'id' => 'footer-sidebar-3',
      'description' => 'Appears in the footer area',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
  register_sidebar(
    array(
      'name' => 'Footer Sidebar 4',
      'id' => 'footer-sidebar-4',
      'description' => 'Appears in the footer area',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action( 'widgets_init', 'jama_widgets' );

function site_logo() {
  register_sidebar(
    array(
      'name' => 'Logo Container',
      'id' => 'logo',
      'description' => 'Site logo container',
      'before_widget' => '<a href="/" id="logo" class="%2$s">',
      'after_widget' => '</a>',
    )
  );
}
add_action( 'widgets_init', 'site_logo' );

function banner_img() {
  register_sidebar(
    array(
      'name' => 'Banner Image',
      'id' => 'banner_img',
      'description' => 'banner container',
      'before_widget' => '<p>',
      'after_widget' => '</p>',
    )
  );
}
add_action( 'widgets_init', 'banner_img' );

function theme_js() {
    wp_enqueue_script( 'jama_theme_js', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action('wp_enqueue_scripts', 'theme_js');
?>
