<?php

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
});


//prise en charge des images sur les posts
add_theme_support('post-thumbnails');
add_theme_support('menus');

//change le séparateur du title
add_filter('document_title_separator', function(){
    return '|';
} );