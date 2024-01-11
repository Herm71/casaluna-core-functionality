<?php
/**
 * Disable XMLRPC
 *
 * This file contains any general functions
 * see: https://pantheon.io/docs/wordpress-best-practices#avoid-xml-rpc-attacks
 *
 * @package   Casaluna_Custom_Functionality
 * @since     1.0.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2023, Blackbird Consulting
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

add_filter(
    'xmlrpc_methods',
    function () {
        return array();
    },
    PHP_INT_MAX
);

// Remove link from <head>.
remove_action('wp_head', 'rsd_link');
