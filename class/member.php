<?php

include 'model_interface.php';

class Member implements IModel
{
	final $tablename = "members";

	//Member public data
	public $name;
	public $lname;
	public $email;
	public $sex;

	//Member private data
	protected $_phone;
	protected $_regdate;
	protected $_active;
	protected $_mem_id; //Unique memeber ID
	
	//Constructing Member parameters
	function __construct($data = array()){

				
		if (count($data) > 0) {
			foreach $data as $column => $value) {

				if (in_array($column, array(
					'phone',
					'regdate',
					'active',
					'mem_id',
					))) {
					$column = '_' .$column;
				}
			}
		}
	}

	//Easy data display
	function _toString(){

		return $this->display();

	}


	//Displaying member data
	function display() {

		$output= '';

		//Outputting the name of the member
		$output .= $this->name '<br>';

		//Outputting the last name of the member
		$output .= $this->lname '<br>';

		//Outputting the email of the member
		$output .= $this->email '<br>';

		//Outputting the phone of the member
		$output .= $this->phone '<br>';

		//Outputting the sex of the member
		$output .= $this->sex '<br>';
 
		//Outputting the regdate of the member
		$output .= $this->regdate '<br>';

		//Outputting the active of the member
		$output .= $this->active '<br>';
	}

	
	final public static function load($member_id){

		$db = Connection::getInstance();
		$mysqli = $db->getConnection();

		$sql = 'SELECT * FROM' . $tablename'';
		$sql .= 'WHERE id="' . (int) $member_id . '"';

		$result = $mysqli->query($sql);
		if($row = $result->fetch_assoc()){
			var_dump($row);
		}

	}

	final public static function setData(array()){

		$regdate = date("d.m.Y");
		$active = (int) 1;
		$mem_id = "m_" . mt_rand(1,100) . "lib_" . mt_rand(1,100);

		$sql = 'INSERT INTO ' . $this->tablename . '';
		$sql .= '(name, lname, email, phone, sex, regdate, active, mem_id) ';
		$sql .= 'VALUES ("' . $data['name'] . '", "' . $data['lname'] . '", "' . $data['email'] . '", "' . $data['phone'] . '", "' . $data['sex'] . '", "' . $regdate . '", "' . $active . '", "' . $mem_id . '")';

		$db = Connection::getInstance();
		$mysqli = $db->getConnection();

		$result = $mysqli->query($sql);
		if($result){
			echo 'Sucess';
		} else {
			echo 'Fail';
		}
	}


	final public static function getAll(){


		$sql = 'SELECT * FROM' . $tablename . '';

		$resut = $mysqli->query($sql);
		if($result){
			echo 'Success';
		} else {
			echo 'Fail';
		}


	}

}