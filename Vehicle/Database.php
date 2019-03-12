<?php

/**
*createdby : hiran
*date : 9/3/2019
*time: 3:40pm
*/
class Database{

	public $conn;
	public $debug;

	function __construct(){
		$this->connect();
	}

	/**
	*
	*@return: void
	*/
	private function connect(): void {
		$this->conn = new mysqli(
			"localhost",
			"test_usr",
			"root@V1nam",
			"Vehicle",
			"3306"
		);
		if(!$this->conn)
			die($this->conn->connect_error);
	}

	/**
	*@param : $debug
	*/
	public function setdebug($debug) : void {
		$this->debug = $debug;
	}

	/**
	*@param:$data
	*@return:int
	*/
	public function insert($data) : int {
		$sql="insert into ".get_called_class() ." SET ";
		foreach ($data as $key => $value) {
			if(array_key_exists($key, get_class_vars(get_called_class())))
				$sql .= $key ." = '" .$value."',";
		}
		$sql=rtrim($sql,",");
		// if($this->debug==1)
		// 	echo "<br> query : " .$sql ; 
		return $this->conn->query($sql);
	}

	/**
	*@return:array
	*/
	public function select() : array {
		$unused_class_fields = array(0=>"conn",1=>"debug"); 
		$used_class_fields = array_keys(get_class_vars(get_called_class()));
		$fields =  array_diff($used_class_fields, $unused_class_fields);
		$table_fields = implode(",", $fields);
		$sql = "select ".$table_fields." from ". get_called_class();
		// if($this->debug==1)
		// 	echo "<br> query : " .$sql;
		$result_set = $this->conn->query($sql);
		return $result_set->fetch_all(1);
	}


	/**
	*@param:$number
	*@return:int
	*/
	public function delete($number) : int {
		$sql="delete from ". get_called_class(). " where";
		$sql .= " number = '". $number."'";
		// if($this->debug==1)
		// 	echo "<br> query : " .$sql;
		$result= $this->conn->query($sql);
		return $result;
	}
}