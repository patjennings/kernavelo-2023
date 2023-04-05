<?php
function taxonomy_event() {
    $args = array();
    register_taxonomy( 'event_category', 'event', $args );
}

add_action( 'init', 'taxonomy_event', 0 );

// remove 'read more' button
function modify_read_more_link() {
    return '';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// create body classes for CSS
function my_body_class( $classes )
{   
    $include = array
             (
                 // browsers/devices (https://codex.wordpress.org/Global_Variables)
                 'is-iphone'            => $GLOBALS['is_iphone'],
                 'is-chrome'            => $GLOBALS['is_chrome'],
                 'is-safari'            => $GLOBALS['is_safari'],
                 'is-ns4'               => $GLOBALS['is_NS4'],
                 'is-opera'             => $GLOBALS['is_opera'],
                 'is-mac-ie'            => $GLOBALS['is_macIE'],
                 'is-win-ie'            => $GLOBALS['is_winIE'],
                 'is-gecko'             => $GLOBALS['is_gecko'],
                 'is-lynx'              => $GLOBALS['is_lynx'],
                 'is-ie'                => $GLOBALS['is_IE'],
                 'is-edge'              => $GLOBALS['is_edge'],
                 // WP Query (already included by default, but nice to have same format)
                 'is-archive'           => is_archive(),
                 'is-post_type_archive' => is_post_type_archive(),
                 'is-attachment'        => is_attachment(),
                 'is-author'            => is_author(),
                 'is-category'          => is_category(),
                 'is-tag'               => is_tag(),
                 'is-tax'               => is_tax(),
                 'is-date'              => is_date(),
                 'is-day'               => is_day(),
                 'is-feed'              => is_feed(),
                 'is-comment-feed'      => is_comment_feed(),
                 'is-front-page'        => is_front_page(),
                 'is-home'              => is_home(),
                 'is-privacy-policy'    => is_privacy_policy(),
                 'is-month'             => is_month(),
                 'is-page'              => is_page(),
                 'is-paged'             => is_paged(),
                 'is-preview'           => is_preview(),
                 'is-robots'            => is_robots(),
                 'is-search'            => is_search(),
                 'is-single'            => is_single(),
                 'is-singular'          => is_singular(),
                 'is-time'              => is_time(),
                 'is-trackback'         => is_trackback(),
                 'is-year'              => is_year(),
                 'is-404'               => is_404(),
                 'is-embed'             => is_embed(),
                 // Mobile
                 'is-mobile'            => wp_is_mobile(),
                 'is-desktop'           => ! wp_is_mobile(),
                 // Common
                 'has-blocks'           => function_exists( 'has_blocks' ) && has_blocks(),
             );
 
    // Sidebars
    foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) 
    {
        $include[ "is-sidebar-{$sidebar['id']}" ] = is_active_sidebar( $sidebar['id'] );
    }
 
    // Add classes
    foreach ( $include as $class => $do_include ) 
    {
        if ( $do_include ) $classes[ $class ] = $class;
    }
 
    // Return
 
    return $classes;
}
 
add_filter( 'body_class', 'my_body_class' );

function kernavelo_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'kernavelo' ),
			'id'            => 'sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'kernavelo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Content Bottom 1', 'kernavelo' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'kernavelo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Content Bottom 2', 'kernavelo' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'kernavelo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kernavelo_widgets_init' );


function posts_by_year() {
    // array to use for results
    $years = array();

    // get posts from WP
    $posts = get_posts(array(
        'numberposts' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
    ));

    // loop through posts, populating $years arrays
    foreach($posts as $post) {
        $years[date('Y', strtotime($post->post_date))][] = $post;
    }

    // reverse sort by year
    krsort($years);

    return $years;
}

function results_pages($post_id) {
    global $post;
    $current = $post_id;
    // array to use for results
    $results_page = array();

    // get posts from WP
    $rp = wp_list_pages(array(
        'title_li' => '<h2></h2>',
        'post_status' => 'publish',
        'sort_column' => 'post_date',
        'sort_order' => 'DESC',
        'child_of' => $current
    ));

    // loop through posts, populating $years arrays
    if (is_array($rp) || is_object($rp))
    {
        foreach($rp as $p) {
            array_push($results_page, $p);
        }
    }

    // reverse sort by year
    // krsort($years);
    return $results_page;
    // return $current;
}

function register_kernavelo_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'top-menu' => __( 'Top Menu' ),
            'menu-footer' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_kernavelo_menus' );

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});
add_theme_support( 'post-thumbnails' );
// Custom menu
// function wpb_custom_new_menu() {
// register_nav_menu('kernavelo-menu',__( 'Menu Kernavélo' ));
// }
// add_action( 'init', 'wpb_custom_new_menu' );
// Creating the widget
?>

