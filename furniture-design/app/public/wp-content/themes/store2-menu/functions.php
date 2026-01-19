<?php
function create_product_post_type()
{
    register_post_type('product', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
    ));
}
add_action('init', 'create_product_post_type');
