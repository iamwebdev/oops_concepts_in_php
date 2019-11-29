<?php 
//namespace Lib;
Class DataBase{
	public $config = [];
	public $db;
	public $columns;
	public $values;
	public function __construct(){
		$this->config=[
			'dbname' =>'test',
			'host' =>'localhost',
			'user' =>'root',
			'pass' =>''
		];
		// return $config;
		// print_r($this->config);
	}

	public function self(){
		echo "<pre>", print_r($this,true),"</pre>";
	}

	public function setConfig($host,$dbname,$user,$pass){

		$this->config=[
			'dbname' => $dbname,
			'host' => $host,
			'user' => $user,
			'pass' => $pass
		];
		// echo $this->config;
		 return $this->config;
		// print_r($config);

	}


	public function connect(){
		$this->db = new  PDO('mysql:host='.$this->config['host'].';dbname='.$this->config['dbname'],$this->config['user'], $this->config['pass']);
	// echo "Hello";
		
	}

	public function getAll($table,$fields = "*"){
		if(is_array($fields))
		{
			// echo "GetAll";
			$fields = implode(",", $fields);
		}
		$stmt = $this->db->prepare("SELECT ".$fields." FROM ".$table."");
		$stmt->execute();
		$rows = $stmt->fetchAll();
		print_r($rows);
	}

		public function getById($table,$col,$val,$fields = "*"){
		if(is_array($fields))
		{
			$fields = implode(",", $fields);
		}
		$stmt = $this->db->prepare("SELECT ".$fields." FROM ".$table." WHERE ".$col." = ".$val."");
		$stmt->execute();
		$rows = $stmt->fetchAll();
		print_r($rows);
	}

		public function insert($table,$data){
		if(is_array($data))
		{
			$columns = "";
			$values = "";
			// echo "Hello";
			foreach ($data as $key => $value) {
				// echo "Hello";
				$columns .= $key.",";
				$values .= "'".$value."',";
				# code...
			}

			$i = strlen($columns);
			$j = strlen($values);
		}
		$stmt = $this->db->prepare("INSERT INTO ".$table." (".substr($columns, 0,$i-1).") VALUES (".substr($values, 0,$j-1).")");
		$stmt->execute();
	}

		public function update($table,$data,$id,$val){
		if(is_array($data))
		{
			$columns = "";
			$values = "";
			$stmt1 = "";

			$stmt = "UPDATE ".$table." SET ";
			// echo "Hello";
			foreach ($data as $key => $value) {
				// echo "Hello";
				$stmt1 .= " ".$key." = '".$value."',"; 
				# code...
			}
			$i = strlen($stmt1);
			echo $stmt2 = $stmt.substr($stmt1, 0,$i-1). " WHERE ".$id." = ".$val.""; 
			// $i = strlen($columns);
			// $j = strlen($values);
		}
		$query  = $this->db->prepare($stmt2);
		$query->execute();
		// print_r($stmt);
	}

		public function deleteById($table,$col,$val){

		$stmt = $this->db->prepare("DELETE FROM ".$table." WHERE ".$col." = ".$val."");
		print_r($stmt);
		$stmt->execute();

	}

	public function deleteALL($table){

		$stmt = $this->db->prepare("DELETE FROM ".$table."");
		print_r($stmt);
		$stmt->execute();

	}

}

// $obj = new DataBase();
// $obj->self();

// $obj->setConfig('localhost','organisation','root','');
// $obj->getConfig();
// $obj->self();
// $obj->connect();
// $obj->getAll('users','id,name');
// $obj->getById('users','id','2');
 $obj->insert('tbl_emp', ['nemp_id' =>'7','semp_name' => 'Rahul'] );
// $obj->update('users', ['name' => 'Rakesh', 'email' => 'rakesh@gmail.com'],'id','4');

//$obj->deleteALL('users');


?>