<?php

namespace KianlandUsersSort;

use KianlandUsersSort\Admin\Menu;

class Plugin {

	public function __construct() {
		new Assets();
		new Menu();
	}

	public function activate() {
		if ( ! current_user_can( 'activate_plugin' ) ) {
			return;
		}
		add_option( 'kian-users-sort', [] );
	}

	public function deactivate() {
		if ( ! current_user_can( 'deactivate_plugin' ) ) {
			return;
		}
		delete_option( 'kian-users-sort' );
		flush_rewrite_rules();
	}
}