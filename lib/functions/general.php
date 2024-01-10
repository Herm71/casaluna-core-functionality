<?php
/**
 * General
 *
 * This file contains any general functions
 *
 * @package   Casaluna_Custom_Functionality
 * @since     1.0.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2015, Blackbird Consulting
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Don't Update Plugin
 *
 * @since 1.0.0
 *
 * This prevents you being prompted to update if there's a public plugin
 * with the same name.
 *
 * @author Mark Jaquith
 * @link   http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param  array  $r,   request arguments
 * @param  string $url, request url
 * @return array request arguments
 */
function casaluna_custom_functionality_hidden( $r, $url )
{
    if (0 !== strpos($url, 'http://api.wordpress.org/plugins/update-check') ) {
        return $r; // Not a plugin update request. Bail immediately.
    }
    $plugins = unserialize($r['body']['plugins']);
    unset($plugins->plugins[ plugin_basename(__FILE__) ]);
    unset($plugins->active[ array_search(plugin_basename(__FILE__), $plugins->active) ]);
    $r['body']['plugins'] = serialize($plugins);
    return $r;
}
add_filter('http_request_args', 'casaluna_custom_functionality_hidden', 5, 2);



function casaluna_plugin_test(){
	echo "<p>Github REST API</p>";
	//Github API endpoint for Latest Release
	$github_api_url = 'https://api.github.com/repos/Herm71/casaluna-core-functionality/releases/latest';

	// Get Release data from Github Repo
	$github_response = wp_remote_get(
		$github_api_url,
		array(
			'timeout' => 10,
			'headers' =>
				array(
					'Accept' => 'application/json',
					'X-GitHub-Api-Version' => '2022-11-28',
					'User-Agent' => 'request',
					'Authorization' => 'Bearer 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',
				),
		)

	);
	$github_response_body = wp_remote_retrieve_body($github_response);
	$result = json_decode( $github_response_body );
	$release = $result->tag_name;
	$download_url = $result->assets[0]->browser_download_url;
	$author_id = $result->author->id;
	$created_at = $result->created_at;
	$latest_release = $result->name;
	$release_num = explode('v', $latest_release );
	$version = $release_num[1];
	$added = $result->assets[0]->created_at;
	$last_updated = $result->assets[0]->updated_at;
	$latest_release = $result->name;
	$result_pretty = json_encode($result, JSON_PRETTY_PRINT);

		//info.json array
	$plugin_info = array(
	'name' => 'Casa Luna Core Functionality',
	'slug' => 'casaluna-core-functionality',

	);
	// header( 'Content-Type: application/json' );
	$test = json_encode( $update );
	// Print data if need to debug
	echo '<p>Extracted Data</p>';
	echo '<pre>';
	print_r($test);
	echo '</pre>';
	echo '<p>All Data wp_remote_get()</p>';
	echo '<pre>';
	print_r($added);
	print_r($last_updated);
	echo '</pre>';
}

// add_action ('wp_head', 'casaluna_plugin_test' );


