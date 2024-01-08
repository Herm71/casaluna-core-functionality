<?php
/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package   Core_Functionality
 * @since     1.0.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2011, Jason Chafin
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Testimonials post type
 *
 * @since 1.0.0
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */
function casaluna_register_testimonials_post_type()
{
    $labels = array(
    'name' => 'Testimonials',
    'singular_name' => 'Testimonial',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Testimonial',
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'view_item' => 'View Testimonial',
    'search_items' => 'Search Testimonials',
    'not_found' =>  'No Testimonials found',
    'not_found_in_trash' => 'No Testimonials found in trash',
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest'       => true, // To use Gutenberg editor.
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats')
    );

    register_post_type('testimonials', $args);
}
// add_action('init', 'casaluna_register_testimonials_post_type');

