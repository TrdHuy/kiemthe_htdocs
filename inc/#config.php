<?php
if (!defined('IN_ECS')) {
	die('Hacking attempt');
}

// Thiet lap ket noi mysql
class connectMySQL
{

	private $dbhost = 'localhost';

	private $dbuser = 'root';	// USER MYSQL

	private $dbpass = '1234';	// PASSWORD MYSQL

	// Ham connect toi mysql va database
	public function connect($db)
	{

		// Ham ket noi toi mysql
		$conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $db);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";

		return $conn;
	}

	public function close()
	{
		global $conn;
		@mysqli_close($conn);
	}
}
?>