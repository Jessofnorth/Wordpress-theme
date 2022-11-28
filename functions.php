<?php
// register menus

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu-right' => __('Huvudmeny Höger'),
        'main-menu-left' => __('Huvudmeny Vänster'),
        'footer' => __('Sidfot'),
        'footer-mobile' => __('Sidfot mobil'),
        'event' => __('Event sidebar')
    ));
}

// add post thumbnail 300x300px
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300, true);

// add JS
wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

// add dynamic header - 2000x573px for front-page
$args = array(
    'width' => 2000,
    'height' => 573,
    'default-image' => get_template_directory_uri() . '/img/header.jpg',
    'uploads' => true
);
add_theme_support('custom-header', $args);

// add widget areas

add_action('widgets_init', 'front_page_init');
add_action('widgets_init', 'news_archive_init');
add_action('widgets_init', 'news_categorys_init');

// front-page widget
function front_page_init() {
    register_sidebar(array(
        'name'                   => 'Startsida puff',
        'id'                     => 'front_page', 
        'before_widget'          => '<div>',
        'after_widget'           => '</div>'
    ));
}
// news archive sidebar
function news_archive_init() {
    register_sidebar(array(
        'name'                   => 'Nyheter arkiv',
        'id'                     => 'news-archive', 
        'before_widget'          => '<nav>',
        'after_widget'           => '</nav>'
    ));
}
// news categorys sidebar
function news_categorys_init() {
    register_sidebar(array(
        'name'                   => 'Nyheter kategorier',
        'id'                     => 'news-categorys', 
        'before_widget'          => '<nav>',
        'after_widget'           => '</nav>'
    ));
}


// Disable colors to add own color palette to editor
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-gradients' );

// Editor Color Palette with theme colors
add_theme_support( 'editor-color-palette', array(
    array(
        'name'  => __( 'White', 'bdgk' ),
        'slug'  => 'white',
        'color'	=> '#FFFFFF',
    ),
  array(
        'name'	=> __( 'Black', 'bdgk' ),
        'slug'	=> 'black',
        'color'	=> '#000000',
    ),
    array(
        'name'  => __( 'lightgreen', 'bdgk' ),
        'slug'  => 'lightgreen',
        'color'	=> '#485B4A',
    ),
    array(
        'name'  => __( 'darkgreen', 'bdgk' ),
        'slug'  => 'darkgreen',
        'color' => '#2B5033',
    ),
    array(
        'name'  => __( 'blue', 'bdgk' ),
        'slug'  => 'blue',
        'color' => '#265D7D',
    ),
   
) );