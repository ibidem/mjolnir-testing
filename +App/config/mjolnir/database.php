<?php return array
	(
		'databases' => array
			(
				// the following is used in testing. Ideally mocks of the database should be used,
				// however in the interest of time it's sometimes both simpler and more robust to
				// just run the tests against a real life database
				'mjolnir_testing' => array
					(
						'connection' => array
							(
								/**
								 * The following options are available for PDO:
								 *
								 * string   dsn         Data Source Name
								 * string   username    database username
								 * string   password    database password
								 * boolean  persistent  use persistent connections?
								 */
								'dsn'        => 'mysql:host=localhost;dbname=mjolnir_testing',
								'username'   => 'root',
								'password'   => '',
								'persistent' => false,
							),
						/**
						 * Extra options
						 */
						'charset'      => 'utf8',
						'caching'      => false,
						'profiling'    => true,
					),
			),
	);
