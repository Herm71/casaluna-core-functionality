<?php
function casaluna_plugin_test(){
	$github_response = get_transient('gh-response');
	if( false === $github_response )  {
		//Github API endpoint for Latest Release
		$github_api_url = 'https://api.github.com/repos/Herm71/casaluna-core-functionality/releases/latest';

		// Get Release data from Github Repo
		$github_response = wp_remote_get(
			esc_url_raw( $github_api_url),
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

		// Set transient on Github link
		set_transient( 'gh-response', $github_response, DAY_IN_SECONDS );

	}
	$github_results     = json_decode( wp_remote_retrieve_body( $github_response ) );
	$release = $github_results->tag_name;
	$download_url = $github_results->assets[0]->browser_download_url;
	$author_id = $github_results->author->id;
	$created_at = $github_results->created_at;
	$latest_release = $github_results->name;
	$release_num = explode('v', $latest_release );
	$version = $release_num[1];
	$added_raw = $github_results->assets[0]->created_at;
	$added_split_one = explode('T', $added_raw );
	$added_split_two = explode('Z', $added_split_one[1] );
	$added_date = $added_split_one[0];
	$added_time = $added_split_two[0];
	$added = $added_date.' '.$added_time;
	$last_updated_raw = $github_results->assets[0]->updated_at;
	$last_updated_split_one = explode('T', $last_updated_raw );
	$last_updated_split_two = explode('Z', $last_updated_split_one[1] );
	$last_updated_date = $last_updated_split_one[0];
	$last_updated_time = $last_updated_split_two[0];
	$last_updated = $added_date.' '.$added_time;
	$latest_release = $github_results->name;

	//info.json array
	$plugin_info = array(
	'name' => 'Casa Luna Core Functionality',
	'slug' => 'casaluna-core-functionality',
	'author' => 'Jason Chafin',
	'author_profile' => 'https://github.com/Herm71',
	'donate_link' => 'casaluna-core-functionality',
	'version' => $version,
	'download_url' => $download_url,
	'requires' => '5.6',
	'tested' => '6.0',
	'requires_php' => '7.4',
	'added' => $added,
	'last_updated' => $last_updated,
	'sections' => [
		'description' => 'Efficiently run many WordPress sites from a single WordPress installation.',
		'installation' => 'Click the activate button and that\'s it.',
		'changelog' => '',
	],
	'banners' => [
		'low' => 'https://wpfreighter.com/images/wp-freighter-banner-772x250.webp',
		'high' => 'https://wpfreighter.com/images/wp-freighter-banner-1544x500.webp'
	],
	);
	// header( 'Content-Type: application/json' );
	$test = json_encode( $plugin_info, JSON_PRETTY_PRINT );
	// Print data if need to debug
	echo '<p>Extracted Data</p>';
	echo '<pre>';
	print_r($test);
	echo '</pre>';
	echo '<p>Field Data from Github()</p>';
	echo '<pre>';
	// print_r($x);
	echo '</pre>';
	echo '<p>All Data from Github()</p>';
	echo '<pre>';
	print_r($github_results);
	echo '</pre>';


}

// add_action ('wp_head', 'casaluna_plugin_test' );


public function casaluna_plugin_test(){

	$github_response = get_transient( $this->cache_key );

	if( false === $github_response || ! $this->cache_allowed )  {
		//Github API endpoint for Latest Release
		$github_api_url = 'https://api.github.com/repos/Herm71/casaluna-core-functionality/releases/latest';

		// Get Release data from Github Repo
		$github_response = wp_remote_get(
			esc_url_raw( $github_api_url),
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

		if ( is_wp_error( $github_response ) || 200 !== wp_remote_retrieve_response_code( $remote ) || empty( wp_remote_retrieve_body( $remote ) ) ) {
                return false;
            }
		// Set transient on Github link
		set_transient( $this->cache_key, $github_response, DAY_IN_SECONDS );

	}

	$github_results     = json_decode( wp_remote_retrieve_body( $github_response ) );
	$release = $github_results->tag_name;
	$download_url = $github_results->assets[0]->browser_download_url;
	$author_id = $github_results->author->id;
	$created_at = $github_results->created_at;
	$latest_release = $github_results->name;
	$release_num = explode('v', $latest_release );
	$version = $release_num[1];
	$added_raw = $github_results->assets[0]->created_at;
	$added_split_one = explode('T', $added_raw );
	$added_split_two = explode('Z', $added_split_one[1] );
	$added_date = $added_split_one[0];
	$added_time = $added_split_two[0];
	$added = $added_date.' '.$added_time;
	$last_updated_raw = $github_results->assets[0]->updated_at;
	$last_updated_split_one = explode('T', $last_updated_raw );
	$last_updated_split_two = explode('Z', $last_updated_split_one[1] );
	$last_updated_date = $last_updated_split_one[0];
	$last_updated_time = $last_updated_split_two[0];
	$last_updated = $added_date.' '.$added_time;
	$latest_release = $github_results->name;

	//info.json array
	$plugin_info = array(
	'name' => 'Casa Luna Core Functionality',
	'slug' => 'casaluna-core-functionality',
	'author' => 'Jason Chafin',
	'author_profile' => 'https://github.com/Herm71',
	'donate_link' => 'casaluna-core-functionality',
	'version' => $version,
	'download_url' => $download_url,
	'requires' => '5.6',
	'tested' => '6.0',
	'requires_php' => '7.4',
	'added' => $added,
	'last_updated' => $last_updated,
	'sections' => [
		'description' => 'Efficiently run many WordPress sites from a single WordPress installation.',
		'installation' => 'Click the activate button and that\'s it.',
		'changelog' => '',
	],
	'banners' => [
		'low' => 'https://wpfreighter.com/images/wp-freighter-banner-772x250.webp',
		'high' => 'https://wpfreighter.com/images/wp-freighter-banner-1544x500.webp'
	],
	);

}
