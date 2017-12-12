<?php
function true_register_wp_sidebars() {

    register_sidebar(
        array(
            'id' => 'lang',
            'name' => 'For lang switch',
            'description' => 'Перетащите сюда виджеты',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-text',
            'name' => 'footer-text',
            'description' => 'Перетащите сюда виджеты',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<div class="hidden">',
            'after_title' => '</div>'
        )
    );
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );

add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}

//show_admin_bar( false );

function theme_register_nav_menu() {

    register_nav_menu( 'main', 'main' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function register_theme_styles() {

    wp_register_style( 'main', get_template_directory_uri() . '/css/style.min.css' );
    wp_enqueue_style( 'main' );

}
add_action( 'wp_enqueue_scripts', 'register_theme_styles' );

function register_theme_scripts() {

    wp_enqueue_script("jquery");
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.min.js');

}

add_action( 'wp_enqueue_scripts', 'register_theme_scripts' );
/*откл форматирование*/
remove_filter( 'the_content', 'wptexturize' );
remove_filter( 'the_excerpt', 'wptexturize' );
remove_filter( 'comment_text', 'wptexturize' );
remove_filter( 'the_title', 'wptexturize' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );
remove_filter( 'the_title', 'wpautop' );

add_theme_support( 'post-thumbnails' );

function wp_remove_version() {
    return '';
}
add_filter('the_generator', 'wp_remove_version');

//function create_post_type() {
//    register_post_type( 'acme_product',
//        array(
//            'labels' => array(
//                'name' => __( 'Products' ),
//                'singular_name' => __( 'Product' )
//            ),
//            'public' => true,
//            'has_archive' => true,
//        )
//    );
//}
//add_action( 'init', 'create_post_type' );


/*Меняет количество выводимых материалов в категориях*/
// function custom_posts_per_page($query){

//     if (is_category(23) || is_category(25) || is_category(27)) {

//         $quant = 6;
//         if ($query->query_vars['paged'] < 2) {
//             $quant = 7;
//         }
//         $query->set('posts_per_page', $quant);
//     }

// }
// add_action('pre_get_posts','custom_posts_per_page');