<?php

function test_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5');
    add_image_size('post-image', 600, 400, true);
    add_image_size('single-page-img', 600, 600, true);

    register_nav_menus(array(
        'Header_menu' => 'Header Menu',
        'Footer_menu' => 'Footer Menu',
        'Front_page_menu' => 'Front Page Menu'
    ));

}
add_action('after_setup_theme','test_theme_init');

function test_theme_widgets(){
    register_sidebar(array(
        'id'          => 'top-calander',
        'name'        => __( 'Clander Widgets', $text_domain ),
        'description' => __( 'This sidebar is located above the age calander.', $text_domain ),
        
    ));
    register_sidebar(array(
        'name'  => 'TestTheme Image',
        'id'    => 'tt-image'
    ));
}
add_action('widgets_init', 'test_theme_widgets');

function test_theme_product(){
	register_post_type('test--product', array(
		'labels' => array(
				'name'=> 'Custom Product',
				'menu_name' => 'Product Menu',
				'all_items' =>'All Product Item',
				'add_new' => 'Add New Product',
				'add_new_item' => 'Add New Product Item'
				
		),
		'public' => true,
		'supports'=>array(
			'title','editor', 'thumbnail','revisions','custom-fields','page-attributes'
		)
	));
	register_post_type('test--service', array(
		'labels' => array(
				'name'=> 'Custom service',
				'menu_name' => 'service Menu',
				'all_items' =>'All service Item',
				'add_new' => 'Add New service',
				'add_new_item' => 'Add New service Item'
				
		),
		'public' => true,
		'supports'=>array(
			'title','editor', 'thumbnail','revisions','custom-fields','page-attributes'
		)
	));
}
add_action('init','test_theme_product');
