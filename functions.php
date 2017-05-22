<?php if ( function_exists('register_nav_menus')) {
register_nav_menus(array('header-menu' =>'顶部菜单设置'));
} 
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
if ( function_exists('register_sidebar') )
register_sidebar(array(
    'name'=>'sidebar1',
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="widget-title">
                <h3>',
        'after_title' => '</h3></div>',
));
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
function catch_first_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
			  echo get_bloginfo ( 'stylesheet_directory' );
			  echo '/images/default.jpg';//默认图片
}
return $first_img;
}

?>
