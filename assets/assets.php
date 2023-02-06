<?php

return [
	'css' => [
		[
			'type' => 'admin',
			'name' => 'kian-users-sort-css',
			'path' => 'css/app.css',
			'version' => time().'css',
			'dependency' => [],
			'media' => 'all'
		],
		[
			'type' => 'admin',
			'name' => 'kian-users-sort-datatable-css',
			'path' => 'js/datatables.min.css',
			'version' => time().'datatable-css',
			'dependency' => [],
			'media' => 'all'
		],
		[
			'type' => 'admin',
			'name' => 'kian-users-sort-bulma-css',
			'path' => 'js/DataTables-1.13.2/css/dataTables.bulma.min.css',
			'version' => time().'bulma-css',
			'dependency' => [],
			'media' => 'all'
		]
	],
	'js' => [
		[
			'type' => 'admin',
			'name' => 'kian-users-datatable-js',
			'path' => 'js/datatables.min.js',
			'version' => time().'datatable-js',
			'dependency' => ['jquery'],
			'footer' => true
		],
		[
			'type' => 'admin',
			'name' => 'kian-users-sort-js',
			'path' => 'js/app.js',
			'version' => time().'js',
			'dependency' => ['jquery'],
			'footer' => true
		]
	]
];
