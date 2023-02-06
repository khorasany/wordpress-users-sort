<?php

namespace KianlandUsersSort\Admin;

class Users {
	public static function customers() {
		return get_users( [
			'role__in' => [ 'customer' ]
		] );
	}
}