<?php

function university_css(){

wp_enqueue_script('main_js_file',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
wp_enqueue_style('font_awosem','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

wp_enqueue_style('goorle_font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

wp_enqueue_style('university_main_style',get_stylesheet_uri(),microtime(),NULL);

}

function page_title(){
	add_theme_support('title-tag');
}
add_action('wp_enqueue_scripts','university_css');
add_action('after_setup_theme','page_title');

