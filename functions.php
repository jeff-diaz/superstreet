<?php 

require get_theme_file_path('./includes/search-route.php');


function load_scripts() {
    // wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), \\\, '1.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.2.2', true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/src/index.js', array(), 1.2, true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css', array(), '5.2.2', 'all');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), '6.3.0', 'all');
    wp_enqueue_style('typekit', 'https://use.typekit.net/zjh8nux.css', array(), '0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap', false );

    

    wp_localize_script('script', 'superstreetData', array(
        'root_url' => get_site_url()
    ));

}



//calls the function load scripts so it can execute and load in all scripts
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support( 'post-thumbnails' );

function university_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('rectangle', 1000, 667, true);
    add_image_size('square', 300, 300, true);
    add_image_size('gallery', 1200, 650, true);
    add_image_size('extra-large', 1500, 700, true);
}


add_action('after_setup_theme', 'university_features');




// function ti_custom_javascript() {
//     wp_enqueue_script( 'search-script', get_template_directory_uri() . '/js/search.js', array('jquery'), '1.0', true);
//     }
//     add_action('wp_enqueue_scripts', 'ti_custom_javascript');

    function theme_scripts_method(){
        wp_enqueue_script( 'jquery');
        }
        add_action( 'wp_enqueue_scripts', 'theme_scripts_method' );



add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
    $exclude_filters[] = 'themes/fictional-university-theme/node_modules';
    return $exclude_filters;
}

?>