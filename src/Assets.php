<?php

namespace KianlandUsersSort;

class Assets {

	public function __construct() {
		$this->enqueue();
	}

	public function enqueue_admin() {
		if ( ! file_exists( plugin_dir_path( __FILE__ ) . '../assets/assets.php' ) ) {
			return;
		}
		$assets = include plugin_dir_path( __FILE__ ) . '../assets/assets.php';
		foreach ( $assets['js'] as $asset ) {
			if ( $asset['type'] === 'admin' ) {
				wp_enqueue_script(
					$asset['name'],
					plugin_dir_url( __FILE__ ) . '../assets/' . $asset['path'],
					$asset['dependency'],
					$asset['version'],
					$asset['footer']
				);
			}
		}
		foreach ( $assets['css'] as $asset ) {
			if ( $asset['type'] === 'admin' ) {
				wp_enqueue_style(
					$asset['name'],
					plugin_dir_url( __FILE__ ) . '../assets/' . $asset['path'],
					$asset['dependency'],
					$asset['version'],
					$asset['media']
				);
			}
		}
	}

	public function enqueue_front() {
		//
	}

	public function enqueue() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin' ] );
	}
}