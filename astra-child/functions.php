<?php

function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');
