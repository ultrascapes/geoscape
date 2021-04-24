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
    wp_enqueue_style( 'google-font-css', "https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Condensed:wght@400;700&display=swap", [], '', 'all' );
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
      'before_widget' => '<div class="lyt-cont-1-3 sans-widget lyt-pad-vert-sm"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-one"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  
    register_sidebar([
      'name'          => esc_html__( 'Home Two', 'Geoscape' ),
      'id'            => 'home-two',
      'description'   => esc_html__( 'Add widgets for home page position two', 'Geoscape' ),
      'before_widget' => '<div class="lyt-cont-2-3 sans-widget lyt-pad-vert-sm"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-two"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  
    register_sidebar([
      'name'          => esc_html__( 'Home Three', 'Geoscape' ),
      'id'            => 'home-three',
      'description'   => esc_html__( 'Add widgets for home page position two', 'Geoscape' ),
      'before_widget' => '<div class="lyt-cont-3-3 sans-widget lyt-pad-vert-sm"><div class="sans-txt-ctr lyt-col">',
      'after_widget'  => '<a class="sans-widget-link" href="#home-section-three"><span class="dashicons dashicons-arrow-down-alt2"></span></a></div></div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  

    register_sidebar([
      'name'          => esc_html__( 'Home 4', 'Geoscape' ),
      'id'            => 'home-4',
      'description'   => esc_html__( 'Full width image banner', 'Geoscape' ),
      'before_widget' => '<div class="sans-home-4">',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => '',
    ]);

    register_sidebar([
      'name'          => esc_html__( 'Home 5', 'Geoscape' ),
      'id'            => 'home-5',
      'description'   => esc_html__( 'Full width image banner', 'Geoscape' ),
      'before_widget' => '<div class="sans-home-5">',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => '',
    ]);

    register_sidebar([
      'name'          => esc_html__( 'Home 6', 'Geoscape' ),
      'id'            => 'home-6',
      'description'   => esc_html__( 'Full width image banner', 'Geoscape' ),
      'before_widget' => '<div class="sans-home-6">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);

    register_sidebar([
      'name'          => esc_html__( 'Home 7', 'Geoscape' ),
      'id'            => 'home-7',
      'description'   => esc_html__( 'Full width image banner', 'Geoscape' ),
      'before_widget' => '<div class="sans-home-7">',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => '',
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
      'name'          => esc_html__( 'Footer 1', 'Geoscape' ),
      'id'            => 'footer-1',
      'description'   => esc_html__( 'Add widgets for the top of the home page', 'Geoscape' ),
      'before_widget' => '<div class="lyt-col-1">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => esc_html__( 'Footer 2', 'Geoscape' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets for Footer position one', 'Geoscape' ),
        'before_widget' => '<div class="lyt-col-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
      ]);  

      register_sidebar([
        'name'          => esc_html__( 'Footer 3', 'Geoscape' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets for Footer position one', 'Geoscape' ),
        'before_widget' => '<div class="lyt-col-3">',
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
    if ( $post_query->have_posts()) {
      $content .= '<div class="lyt-pad-vert-med">';
        $content .= '<h2 class="sans-txt-ctr">Announcements</h2>';
        $content .= '<div class="lyt-cont-grid-tablet">';
        $content .= '<div class="lyt-cont-cols-2">';
        while ($post_query->have_posts() && $col <= 2) {
          $content .= '<div class="sans-post-card lyt-col-'.$col.'">';
          $col ++;
          $post_query->the_post();
          if (has_post_thumbnail() ) {
            $content .= '<a class="sans-post-thumbnail" href="'.get_the_permalink().'" rel="bookmark">'.get_the_post_thumbnail().'</a>';
            $content .= '<h3 class="sans-post-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title() .'</a></h3>';
          } else {
            $content .= '<h3 class="sans-post-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title() .'</a></h3>';
          }
          $content .= '<div class="sans-post-excerpt"><p>'.get_the_excerpt().'</p></div>';
          $content .= '</div>';
        }
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';
    }

    return $content;

    wp_reset_postdata();

  }

  function geoscape_featured() {
    $post_query = new WP_Query( array(
      'category_name' => 'featured',
      'posts' => 3
    ));
    $content = '';
    $count = 1;
    if ( $post_query->have_posts() ) {
        $content .= '<h2>Featured Articles</h2>';
        while ($post_query->have_posts() && $count <= 3) {
          $content .= '<div class="lyt-pad-vert-sm">';
          $post_query->the_post();
          $content .= '<h3 class="sans-post-title"><a href="'.get_the_permalink().'">'.get_the_title() .'</a></h3>';
          $excerpt = get_the_excerpt();
          $excerpt = substr($excerpt, 0, 260);
          $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
          $excerpt = $excerpt . '...';
          $content .= '<div class="sans-post-excerpt"><p>'.$excerpt.'</p></div>';
          $content .= '<a href="'.get_the_permalink().'">Read More</a>';
          $content .= '</div>';
          $count ++;
        }
    }

    return $content;

    wp_reset_postdata();

  }




  function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons');