<?php

class Database {
	private $host;
	private $user;
	private $pass;
	private $base;
	private $charset;
	private $dsn;
	private $opt = array(
		PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => FALSE
	);
	private $pdo;

	public function __construct($host, $user, $pass, $base, $charset) {
		$this->connect($host, $user, $pass, $base, $charset);
	}

	private function connect($host, $user, $pass, $base, $charset) {
		$dsn = "mysql:host=".$host.";dbname=".$base.";charset=".$charset;

		$this->pdo = new PDO($dsn, $user, $pass, $this->opt);

	}

	public function query($query, $params = null) {
		$query = trim($query);
		if($params == null) {
			$stmt = $this->pdo->query($query);
			return $stmt;
		}
		elseif(is_array($params)) {
			$stmt = $this->pdo->prepare($query);
			$stmt->execute($params);
			return $stmt;
		}
	}

}

?>