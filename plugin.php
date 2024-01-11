<?php
/**
 * Plugin Name: Casa Luna Core Functionality
 * Plugin URI: https://github.com/Herm71/casaluna-core-functionality.git
 * GitHub Plugin URI: https://github.com/Herm71/casaluna-core-functionality
 * Description: Contains custom functionality. Theme independent.
 * Version: 1.2.3
 * Author: Jason Chafin
 * Author URI: https://github.com/Herm71
 * License: GPL2
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

// Plugin Directory
define('CL_DIR', dirname(__FILE__));

// Include Customization files:
// General.
if ( file_exists( CL_DIR . '/lib/functions/general.php' ) ) {
	include_once CL_DIR . '/lib/functions/general.php';
}

// Shortcodes.
// if ( file_exists( CL_DIR . '/lib/functions/shortcodes.php' ) ) {
// 	include_once CL_DIR . '/lib/functions/shortcodes.php';
// }

// Disable XMLRPC
if ( file_exists( CL_DIR . '/lib/functions/disable-xmlrpc.php' ) ) {
	include_once CL_DIR . '/lib/functions/disable-xmlrpc.php';
}

// Security Headers
if ( file_exists( CL_DIR . '/lib/functions/security-headers.php' ) ) {
	include_once CL_DIR . '/lib/functions/security-headers.php';
}

// Google Tag Manager
if ( file_exists( CL_DIR . '/lib/functions/gtm.php' ) ) {
	include_once CL_DIR . '/lib/functions/gtm.php';
}
