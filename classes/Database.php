<?php
 
class Database{
	
	private $connection;
	
	private $_host = 'sql303.epizy.com';
    private $_username = 'epiz_25184301';
    private $_password = '2feekElIKf';
    private $_database = 'epiz_25184301_oop';
 
	function __construct()
	{
		$this->connect_db();
	}
 
	public function connect_db(){
		$this->connection = mysqli_connect($this->_host, $this->_username, $this->_password, $this->_database);
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	/**
	 * Get the value of connection
	 */ 
	public function getConnection()
	{
		return $this->connection;
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
}


?>