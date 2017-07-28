<?php

class Database {
	private $host;
	private $user;
	private $pass;
	private $base;
	private $charset;
	private $dsn;
	private $table;
	private $opt = array(
		PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => FALSE
	);
	private $pdo;

	public function __construct($host, $user, $pass, $base, $charset) {
		$this->connect($host, $user, $pass, $base, $charset);
		if(isset($table)) $this->table = $table;
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

	public function set_auto_increment($table) {
		return $this->query("ALTER TABLE $table AUTO_INCREMENT=1");
	}

	public function order_by($column, $table) {
		return $this->query("SELECT * FROM $table ORDER BY $column");
	}

	public function get($column, $table) {
		return $this->query("SELECT $column FROM $table");
	}

	public function getAll($table) {
		return $this->get("*", $table);
	}

	public function getbyId($table) {
		return $this->order_by("id", $table);
	}

	public function delete($column, $table) {
		return $this->query("DELETE FROM $table");
	}

}
