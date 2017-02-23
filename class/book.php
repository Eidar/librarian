<?php

include 'model_interface.php';

class Book implements IModel
{
	final $tablename = "books";

	//Book public data
	public $title;
	public $author;
	public $publication_detail;
	public $identifier; //Unique book identifier (ISBN)
	public $cover;
	public $genre;
	public $date_added;

	//Book private data
	protected $_checked;
	protected $_check_date;
	protected $_mem_id; //Unique memeber ID
	
	//Constructing Member parameters
	function __construct($data = array()){

				
		if (count($data) > 0) {
			foreach $data as $column => $value) {

				if (in_array($column, array(
					'checked',
					'check_date',
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


	//Displaying book data
	function display() {

		$output= '';

		//Outputting the title of the book
		$output .= $this->title '<br>';

		//Outputting the author of the book
		$output .= $this->author '<br>';

		//Outputting the publication details of the book
		$output .= $this->publication_details '<br>';

		//Outputting the identifier of the book
		$output .= $this->identifier '<br>';

		//Outputting the cover of the book
		$output .= $this->cover '<br>';
 
		//Outputting the genre of the book
		$output .= $this->genre '<br>';

		//Outputting the date added of the book
		$output .= $this->date_added '<br>';

		//Outputting is the book checked out
		$output .= $this->_checked '<br>';

		//Outputting the checkout date of the book
		$output .= $this->_check_date '<br>';

		//Outputting the member id of the checked out book
		$output .= $this->_mem_id '<br>';
	}

	
	final public static function load($member_id){

		$db = Connection::getInstance();
		$mysqli = $db->getConnection();

		$sql = 'SELECT * FROM' . $tablename'';
		$sql .= 'WHERE mem_id="' . (int) $member_id . '";';

		$result = $mysqli->query($sql);
		if($row = $result->fetch_assoc()){
			var_dump($row);
		}

	}

	final public static function setData(Array $data){

		$this->title = $data['title'];
		$this->author = $data['author'];
		$this->publication_details = $data['publicaton_details'];
		$this->identifier = $data['identifier'];
		$this->cover = $data['cover'];
		$this->date_added = date("d.m.Y");
		$this->_checked = (int) 0;
		

		$sql = 'INSERT INTO ' . $tablename . ' ';
		$sql .= '(title, author, publication_details, identifier, cover, date_added, check) ';
		$sql .= 'VALUES ("' . $this->title . '", "' . $this->author . '", "' . $this->publication_details . '", "' . $this->identifier . '", "' . $this->cover . '", "' . $this->date_added . '", "' . $this->checked . '");';

		$result = $mysqli->query($sql);
		if($result){
			echo 'Success';
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