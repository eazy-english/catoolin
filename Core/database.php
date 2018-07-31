<?php
/*
   ___    ___  ______   ___    ___    ___    ____   ____
  / _ \  / _ |/_  __/  / _ |  / _ )  / _ |  / __/  / __/
 / // / / __ | / /    / __ | / _  | / __ | _\ \   / _/  
/____/ /_/ |_|/_/    /_/ |_|/____/ /_/ |_|/___/  /___/  
                                                        

*/
/* Database class created
By Mr CaT 2017 (c) Copyright
*/
class Database {

      	# Our DB HOST
	private $host;
	# Our DB User -> username for db
	private $user;
	# Actually password for our db
	private $pass;
	# @oaram = int
	# Limit data from db
	private $limit;
	# Actually columns, why within' them?
	private $column;
	# Our fave database
	private $base;
	# Charset for our database
	private $charset;
	# Our db data via this var
	private $dsn;
	# Our table
	private $table;
	private $opt = array(
		PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => FALSE
	);
	# Init PDO connect to DB via following var
	private $pdo;

	public function __construct() {
		$this->connect("YOUR_HOST", "YOUR_USER", "YOUR_PASSWORD", "YOUR_DB", "YOUR_DB_CHARSET");
		if(isset($table)) $this->table = $table;
	}

	/* Connecting to DB
	$host = @param str -> DB HOST
	$user = @param str-> DB USER
	$pass = @param str-> DB PASSWORD
	$base = @param str-> Database
	$charset = @param str->DB CHARSET
	*/

	private function connect($host, $user, $pass, $base, $charset) {
		$dsn = "mysql:host=".$host.";dbname=".$base.";charset=".$charset;
        
        	try {
			$this->pdo = new PDO($dsn, $user, $pass, $this->opt);

            		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			   
			$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		}
        
        	catch(PDOException $e) {
            		echo $this->ExceptionLog($e->getMessage());
            		die();
        	}

	}

	# Disconnect with DB class method

	public function disconnect() {
		return $this->pdo = null;
	}

	# SQL Request -> QUERY

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

	# Setting AI to table

	public function set_auto_increment($table, $number) {
		return $this->query("ALTER TABLE $table AUTO_INCREMENT=$number");
	}

	# Take a look to Last Inserted Data's Id

    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }

	# Ordering by some column
	
	public function order_by($column, $table, $limit = null) {
		return $this->query("SELECT * FROM $table ORDER BY $column DESC LIMIT $limit");
	}

	# Get column from the table

	public function get($column, $table) {
		return $this->query("SELECT $column FROM $table");
	}

	# Get all columns from the table

	public function getAll($table) {
		return $this->get("*", $table);
	}

    # Get $column from $table with condition

    public function get_where($column, $table, $where, $columns) {
        return $this->query("SELECT $column FROM $table WHERE $where = $columns");
    }

	# Get all columns which are ordered by Id

	public function getbyId($table) {
		return $this->order_by("id", $table);
	}

	# Delete data from table

	public function delete($column, $table, $number) {
		return $this->query("DELETE FROM $table WHERE $column = $number");
	}

	# Delete all data from table

    public function deleteAll($table) {
       	 return $this->query("TRUNCATE $table");
    }

	# Disable cloning...

	private function __clone() {}

	# Disconnect from DB

	public function __destruct() {
		return $this->disconnect();
	}
}

