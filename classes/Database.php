<?php
class Database
{
	private $username = "sql7769467";
	private $password = "i6iaVhzrR3";
	private $host = "sql7.freesqldatabase.com";
	private $db_name = "sql7769467";
	private $charset = "utf8mb4";
	public  $salt = "Yi89TTJ3bSxIcGxyVURhIzltXTdJcGtnJVdTdjNpU3BNSF9vU1BXe1N5JkoxP00pSC50MkY2TVdCdDZuNg==";
	public  $admin_email = "admin@localhost";

	public function Connect()
	{

		try {
			$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=" . $this->charset;
			$pdo = new PDO($dsn, $this->username, $this->password);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		} catch (PDOException $err) {
			die('Unable to connect: ' . $err->getMessage());
		}
		return $pdo;
	}

	public function dataExist()
	{
		$pdo = $this->Connect();
		$sql = $pdo->prepare("SHOW TABLES LIKE 'clients'");
		$sql->execute();
		if ($sql->rowCount()) {
		} else {
			die("<body style='background-color: #ededed;'>
					<h1 style='text-align:center; color:#00bfff; font-family:arial;'>Please Go To <a href='install.php' style='color:#0099cc;'>install.php</a></h1>
				</body>
				");
		}
		if (file_exists("install.php")) {
			die("<body style='background-color: #ededed;'>
		    		<h1 style='text-align:center; color:#00bfff; font-family:arial;'>Please Remove install.php if they exist</h1>
				</body>
				");
		}
	}
}
