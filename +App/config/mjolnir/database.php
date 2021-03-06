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
						/**
						 * Dialect options. The default dialect is what will be assumed
						 * for your statements when no language is specified. The target
						 * dialect is the language your database engine understands. If
						 * both are the same then your statements will be prepared as-is.
						 * If the default dialect doesn't match the target dialect then
						 * the statement will be
						 * translated.
						 *
						 * If you wish to have your statements in configuration files, you may
						 * set the default dialect to something like 'src', and then you would
						 * just pass keys as statements.
						 */
						'dialect_default' => 'mysql',
						'dialect_target' => 'mysql',
					),
			),
	);
