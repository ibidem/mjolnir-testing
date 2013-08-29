<?php namespace mjolnir\testing;

/**
 * @package    mjolnir
 * @category   PHPUnit
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
abstract class PHPUnit_Extensions_Database_TestCase extends \PHPUnit_Extensions_Database_TestCase
{
	/**
	 * @var \PDO
	 */
	static private $pdo = null;

	/**
	 *
	 * @var \PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection
	 */
	private $conn = null;

	/**
	 * @return \PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection
	 */
	function getConnection()
    {
        if ($this->conn === null)
		{
            self::$pdo != null or self::$pdo = new \PDO('sqlite::memory:');
            $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
        }

        return $this->conn;
    }

} # class
