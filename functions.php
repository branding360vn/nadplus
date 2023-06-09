<?php

define('TEMP_DIR_URI', get_stylesheet_directory_uri());

function wpb_adding_scripts()
{
    wp_enqueue_script('custome', get_stylesheet_directory_uri() . '/assets/js/custome.js', array('jquery'));
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wpb_adding_scripts');


add_action('wp_enqueue_scripts', 'child_scripts_styles', 15);
function child_scripts_styles()
{
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
}

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('dev_main', TEMP_DIR_URI . '/assets/css/main.css');
});

/*
* Code bài viết liên quan theo chuyên mục
*/
function related_cat() {
    $output = '';
    if (is_single()) {
      global $post;
      $categories = get_the_category($post->ID);
      if ($categories) {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
        $args=array(
          'category__in' => $category_ids,
          'post__not_in' => array($post->ID),
          'posts_per_page'=>4,
          'ignore_sticky_posts'=>1
        );
        
        $my_query = new wp_query( $args );
        if( $my_query->have_posts() ):
            $output .= '<div class="related-box">';
                $output .= '<span class="related-head">Bài viết liên quan:</span><div class="row related-post">';
                    while ($my_query->have_posts()):$my_query->the_post();
                    $output .= 
                        '<div class="col">
                            <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                <div class="feature">
                                    <div class="image" style="background-image:url('. get_the_post_thumbnail_url() .');"></div>
                                </div>                            
                            </a>
                            <div class="related-title" style="text-align: center"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></div>
                        </div>';
                    endwhile;
                $output .= '</div>';
            $output .= '</div>';
        endif;   //End if.
      wp_reset_query();
    }
    return $output;
  }
}
add_shortcode('related_cat','related_cat');

?>