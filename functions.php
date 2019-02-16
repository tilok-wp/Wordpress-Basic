<?php

function test_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','test_theme_init');