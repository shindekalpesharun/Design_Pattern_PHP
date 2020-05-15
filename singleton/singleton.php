<?php
class Database{
	public static $instance;

	public static function getInstance(){
		if (!isset(Database::$instance)) {
			Database::$instance = new Database();
		}
		return Database::$instance;
	}

	private function __construct ()
	{
		# this is constructor 
	}

	private function getQuery(){
		return "SELECT * FROM TbName;";
	}
}
	$db0 = Database::getInstance();
	$db1 = Database::getInstance();
	$db2 = Database::getInstance();

	var_dump($db0);
	var_dump($db1);
	var_dump($db2);
?>