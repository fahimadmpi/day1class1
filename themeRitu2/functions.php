<?php

wp_enqueue_style('style-1',get_stylesheet_uri());
wp_enqueue_style('style-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

add_theme_support('custom-logo');