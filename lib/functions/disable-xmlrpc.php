<?php
/**
 * Disable XMLRPC
 *
 * xmlrpc.php can be used to brute force admin usernames and passwords.
 *
 * see: https://pantheon.io/docs/wordpress-best-practices#avoid-xml-rpc-attacks
 *
 * @package   Casaluna_Core_Functionality
 * @since     1.0.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2024, Jason Chafin
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
add_filter(
    'xmlrpc_methods',
    function () {
        return array();
    },
    PHP_INT_MAX
);

// Removes the link from the <head>.
// Avoids a11y issue with broken link
remove_action('wp_head', 'rsd_link');
