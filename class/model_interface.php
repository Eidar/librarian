<?php

//Interface for books and members

interface IModel 
{
	//Displaying data
	function display();
	//Loading data
	static function load();
	//Setting data
	static function setData();
	//Get all data from database
	static function getAll();

}

