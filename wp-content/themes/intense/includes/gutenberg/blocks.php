<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // Welcome Banner Block
        acf_register_block_type(array(
            'name' => 'Page Banner Block',
            'title' => __('Page Banner Block'),
            'description' => __('Page Banner Block'),
            'render_template' => 'blocks/page-banner.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Page Banner Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Feature Block
        acf_register_block_type(array(
            'name' => 'Feature Block',
            'title' => __('Feature Block'),
            'description' => __('Feature Block'),
            'render_template' => 'blocks/feature-block.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Feature Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Supercharge Block
        acf_register_block_type(array(
            'name' => 'Supercharge Block',
            'title' => __('Supercharge Block'),
            'description' => __('Supercharge Block'),
            'render_template' => 'blocks/supercharge-block.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Supercharge Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Technology Block
        acf_register_block_type(array(
            'name' => 'Technology Block',
            'title' => __('Technology Block'),
            'description' => __('Technology Block'),
            'render_template' => 'blocks/technology-block.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Technology Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
         // FAQ Block
         acf_register_block_type(array(
            'name' => 'FAQ Block',
            'title' => __('FAQ Block'),
            'description' => __('FAQ Block'),
            'render_template' => 'blocks/faq.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('FAQ Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
         // Request Demo Block
         acf_register_block_type(array(
            'name' => 'Request Demo Block',
            'title' => __('Request Demo Block'),
            'description' => __('Request Demo Block'),
            'render_template' => 'blocks/request-demo.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Request Demo Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
    }
}
