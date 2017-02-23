<?php

//Only one connection is allowed
class Connection
{
	private $_connection;
	private static $_instance;


	
	//Connect to the database
	public function __construct(){

		$this->_connection = new mysqli("localhost", "root", "root", "libraray");
		
		if(mysqli_connect_errno()) {
			echo mysqli_connect_error():
			exit();
		}

	}


	//Security measure
	private function __clone(){}



	//Get an instance of the database
	public static function getInstance () {

		if (!self::$_instance) {
			self::$_instance = new self();
		}

	}



	public function getConnection(){

		return $this->_connection;
	}
	
}