<?php

require_once 'dbconn.php';

class Crud
{
	private $sql;


	private function singleQuery($sql){

		$db = connDB();

		$result = $db->query($sql);

		if($result){
			$db->closeConn($db);
			return $row;
		} else {
			$db->error;
		}

	}


	private function multiQuery($sql){

		$db = connDB();

		$result = $db->multi_query($sql)

		if($result){
			closeConn($db);
			return $result;
		} else {
			return $db->error;
		}

	}


}