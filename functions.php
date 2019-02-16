<?php

function test_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-image', 600, 400, true);
    add_image_size('single-page-img', 600, 600, true);

    register_nav_menus(array(
        'Header_menu' => 'Header Menu',
        'Footer_menu' => 'Footer Menu',
        'Front_page_menu' => 'Front Page Menu'
    ));

}
add_action('after_setup_theme','test_theme_init');