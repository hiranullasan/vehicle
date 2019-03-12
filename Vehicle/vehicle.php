<?php
include "Database.php";
class vehicle extends Database{
	var $name;
	var $wheel;
	var $type;
	var $color;
	var $number;
	var $date;
	var $image;

	function __construct(){
        parent::__construct();
	}
}
?>