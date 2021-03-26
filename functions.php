<?php

// Add Theme Support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', ['post', 'page'] );


add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );

//add_theme_support( 'custom-background' );
$args = array(
  'default-color' => 'c4c4c4',
  'default-image' => get_template_directory_uri() . '/img/home.jpg',
  'default-repeat' => 'no-repeat',
);
add_theme_support( 'custom-background', $args );


add_theme_support( 'custom-header');


add_theme_support( 'custom-logo' );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'customize-selective-refresh-widget' );
add_theme_support( 'starter-content' );

// Load in CSS
function geoscape_enqueue_styles() {
    //Change time() to version number when in production
    wp_enqueue_style( 'google-font-css', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,400&display=swap", [], '', 'all' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' ); 
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/template.css', ['google-font-css'], time(), 'all' ); 
}
add_action( 'wp_enqueue_scripts', 'geoscape_enqueue_styles' );

// Load in JS
function geoscape_enqueue_scripts() {
  //Change time() to version number when in production
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/template.js', [], '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'geoscape_enqueue_scripts');


// Register Menu Locations
register_nav_menus( [
    'top-menu' => esc_html__( 'Top Menu', 'geoscape' ),
    'main-menu' => esc_html__( 'Main Menu', 'geoscape' ),
    'footer-top-menu' => esc_html__( 'Footer Top Menu', 'geoscape' ),
    'footer-main-menu' => esc_html__( 'Footer Main Menu', 'geoscape' )
]);

// Setup Widget Areas
function geoscape_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Home One', 'Geoscape' ),
      'id'            => 'home-one',
      'description'   => esc_html__( 'Add widgets for home page position one', 'Geoscape' ),
      'before_widget' => '<div class="lyt-cont-1-3 sans-widget"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-one"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);  
    register_sidebar([
      'name'          => esc_html__( 'Home Two', 'Geoscape' ),
      'id'            => 'home-two',
      'description'   => esc_html__( 'Add widgets for home page position two', 'Geoscape' ),
      'before_widget' => '<div class="lyt-cont-2-3 sans-widget"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-two"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);  
    register_sidebar([
      'name'          => esc_html__( 'Home Three', 'Geoscape' ),
      'id'            => 'home-three',
      'description'   => esc_html__( 'Add widgets for home page position two', 'Geoscape' ),
      'before_widget' => '<div class="lyt-cont-3-3 sans-widget"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-three"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);  

    register_sidebar([
      'name'          => esc_html__( 'Footer Top', 'Geoscape' ),
      'id'            => 'footer-top',
      'description'   => esc_html__( 'Add widgets for the top of the home page', 'Geoscape' ),
      'before_widget' => '<div class="sans-txt-ctr">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);  

    register_sidebar([
      'name'          => esc_html__( 'Posts Sidebar', 'Geoscape' ),
      'id'            => 'posts-sidebar',
      'description'   => esc_html__( 'Add widgets for sidebar on post feed and pages', 'Geoscape' ),
      'before_widget' => '<div class="sans-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);  
    register_sidebar([
        'name'          => esc_html__( 'Footer Main', 'Geoscape' ),
        'id'            => 'footer-main',
        'description'   => esc_html__( 'Add widgets for Footer position one', 'Geoscape' ),
        'before_widget' => '<div class="sans-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
      ]);  
  }
  add_action( 'widgets_init', 'Geoscape_widgets_init' );


  add_filter( 'excerpt_length', function($length) {
    return 200;
} );


  function geoscape_announcements() {
    $post_query = new WP_Query( array(
      'category_name' => 'announcements',
      'posts' => 2
    ));
    $content = '';
    $col = 1;

    if ( $post_query->have_posts() ) {
        $content .= '<h2 class="sans-txt-ctr">Announcements</h2>';
        $content .= '<div class="Offsans-grd-cont lyt-cont-grid-tablet">';
        $content .= '<div class="lyt-cont-cols-2">';
        while ($post_query->have_posts()) {
          $content .= '<div class="sans-post-card lyt-col-'.$col.'">';
          $col ++;
          $post_query->the_post();
          if (has_post_thumbnail() ) {
            $content .= '<a class="sans-post-thumbnail" href="'.get_the_permalink().'" rel="bookmark">'.get_the_post_thumbnail().'</a>';
            $content .= '<h3 class="sans-post-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title() .'</a></h3>';
          } else {
            $content .= '<h3 class="sans-post-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title() .'</a></h3>';
          }
          $content .= '<div class="sans-post-excerpt">'.get_the_excerpt().'</div>';
          $content .= '</div>';
        }
        $content .= '</div>';
        $content .= '</div>';
    }

    return $content;

    wp_reset_postdata();

  }


  function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons');