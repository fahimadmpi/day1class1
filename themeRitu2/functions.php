<?php

wp_enqueue_style('style-1',get_stylesheet_uri());
wp_enqueue_style('style-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

add_theme_support('custom-logo');

register_nav_menus([
    'Top menu'=>'primary',
    'BM'=>'fotter'
]);

register_sidebar([
 'name'=>'Banner',
 'id'=>'banner',
 'before_widget'=>'',
 'after_widget'=>''
]);

register_sidebar([
 'name'=>'Side Image',
 'id'=>'sideimg',
 'before_widget'=>'',
 'after_widget'=>''
]);

register_sidebar([
 'name'=>'Video',
 'id'=>'sidevideo',
 'before_widget'=>'',
 'after_widget'=>''
]);

register_sidebar([
 'name'=>'List',
 'id'=>'list',
 'before_widget'=>'',
 'after_widget'=>''
]);