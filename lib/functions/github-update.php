<?php
/**
 * GitHub Updater
 *
 * This file contains a class that will update the plugin from Github
 *
 * from: https://github.com/radishconcepts/WordPress-GitHub-Plugin-Updater
 *
 * @package   casaluna_Custom_Functionality
 * @since     1.3.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2024, Blackbird Consulting
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
if (is_admin()) {
	$config = array(
		'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
		'proper_folder_name' => 'plugin-name', // this is the name of the folder your plugin lives in
		'api_url' => 'https://api.github.com/repos/Herm71/casaluna-core-functionality', // the GitHub API url of your GitHub repo
		'raw_url' => 'https://raw.github.com/Herm71/casaluna-core-functionality/master', // the GitHub raw url of your GitHub repo
		'github_url' => 'https://github.com/Herm71/casaluna-core-functionality', // the GitHub url of your GitHub repo
		'zip_url' => 'https://github.com/Herm71/casaluna-core-functionality/zipball/master', // the zip url of the GitHub repo
		'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
		'requires' => '3.0', // which version of WordPress does your plugin require?
		'tested' => '6.4.1', // which version of WordPress is your plugin tested up to?
		'readme' => 'README.md', // which file to use as the readme for the version number
		'access_token' => '', // Access private repositories by authorizing under Plugins > GitHub Updates when this example plugin is installed
	);
	new WP_GitHub_Updater($config);
}
