<?php namespace mjolnir\testing;

/**
 * @package    mjolnir
 * @category   PHPUnit
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class PHPUnit_Extensions_Database_TestCase extends \PHPUnit_Extensions_Database_TestCase
{
	static private $pdo = null;
	private $conn = null;

	function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO('sqlite::memory:');
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
        }

        return $this->conn;
    }

} # class
