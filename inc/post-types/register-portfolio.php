<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'coderbug'),
    'plural' => __('Portfolio', 'coderbug'),
    'slug' => 'portfolio'
),
    array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-portfolio'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio Tag', 'coderbug'),
    'plural' => __('Portfolio Tags', 'coderbug'),
    'slug' => 'portfolio-tag'
));