<?php

namespace KianlandUsersSort\Admin;

use Morilog\Jalali\Jalalian;

class Menu {

	public function __construct() {
		add_action( 'admin_menu', [ $this, 'menu' ] );
	}

	public function menu() {
		add_menu_page( 'افزونه کاربران', 'افزونه کاربران', 'manage_options', 'kianland-users-sort', [
			$this,
			'main_form'
		], 'dashicons-admin-users', 25 );
//		add_submenu_page();
	}

	public function main_form() {
		$customers = Users::customers();
		?>
        <div class="wrap"><h2><?= __( 'لیست کاربران', 'kianland-users-sort' ) ?></h2></div>
        <br>
        <br>
        <br>
        <table id="users-table" class="table is-striped" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>شماره تماس</th>
                <th>نام و نام خانوادگی</th>
                <th>تاریخ عضویت</th>
                <th>نمایش</th>
            </tr>
            </thead>
            <tbody>
			<?php
			foreach ( $customers as $customer ) {
                $meta = get_user_meta($customer->ID);
				?>
                <tr>
                    <td><?= $customer->ID ?></td>
                    <td><?= $customer->user_login ?></td>
                    <td><?= $meta['first_name'][0].' '. $meta['last_name'][0]?></td>
                    <td><?= Jalalian::fromDateTime($customer->user_registered) ?></td>
                    <td><a href="<?= site_url() ?>/wp-admin/user-edit.php?user_id=<?= $customer->ID ?>&wp_http_referer=/wordpress/wp-admin/users.php?id=<?= $customer->ID ?>" target="_blank" class="fcc-btn"><i class="wp-menu-image dashicons-before dashicons-admin-users"></i>پروفایل کاربری</a></td>
                </tr>
				<?php
			}
			?>
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>شماره تماس</th>
                <th>نام و نام خانوادگی</th>
                <th>تاریخ عضویت</th>
                <th>نمایش</th>
            </tr>
            </tfoot>
        </table>
		<?php
	}
}