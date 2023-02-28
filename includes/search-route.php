<?php 

add_action('rest_api_init', 'registerRoute');

function registerRoute() {
    register_rest_route('superstreet', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'searchResults'
    ));
}


function searchResults($data) {
   $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'reviews', 'test'),
    's' => sanitize_text_field($data['term'])
   ));

    $results = array(
        'general' => array(),
        'tests' => array(),
        'reviews' => array()
    );

    while($mainQuery->have_posts()) {
        $mainQuery->the_post(); 

        if(get_post_type() == 'post') {
            array_push($results['general'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'author' => get_the_author(),
                'authorLink' => get_the_author_link(),
                'image' => get_the_post_thumbnail_url(),
                'postType' => get_post_type()
            ));
        }

        if(get_post_type() == 'test') {
            array_push($results['tests'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'author' => get_the_author(),
                'authorLink' => get_the_author_link(),
                'image' => get_the_post_thumbnail_url(),
                'postType' => get_post_type()
            ));
        }

        if(get_post_type() == 'reviews') {
            array_push($results['reviews'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'author' => get_the_author(),
                'authorLink' => get_the_author_link(),
                'image' => get_the_post_thumbnail_url(),
                'postType' => get_post_type()
            ));
        }



        
    }

    return $results;

} 