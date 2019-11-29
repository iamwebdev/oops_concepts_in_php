<?php
// include'abc.php';
// class A
// {
// 	public $var="abc";
// }
// class B extends A
// {

// }
// $obj= new B();
// echo $obj->var;
// class c
// {
// 	public $var="Hello";

// }
// class d extends c
// {

// }
// $obj= new d();
// echo $obj->var;
// class e
// {
// 	public static $var="Qwerty";
// }
// class f extends e
// {

// }
// $obj= new f();
// echo f::$var;
Class DataBase
{
	public $config = [];
	public $db;
	public function __construct()
	{
		$this->config=[
			'dbname' =>'test',
			'host' =>'localhost',
			'user' =>'root',
			'pass' =>''
		];
	}
	public function setConfig($host,$dbname,$user,$pass)
	{
		$this->config=[
			'dbname' => $dbname,
			'host' => $host,
			'user' => $user,
			'pass' => $pass
		];
	}
	public function connect()
	{
		$this->db = new  PDO('mysql:host='.$this->config['host'].';dbname='.$this->config['dbname'],$this->config['user'], $this->config['pass']);
	}	
}

Class Organistion extends DataBase
{

	// public $config = [];
	// public $db;
	// public function __construct(){
	// 	$this->config=[
	// 		'dbname' =>'test',
	// 		'host' =>'localhost',
	// 		'user' =>'root',
	// 		'pass' =>''
	// 	];
	// }

	// public function self(){
	// 	echo "<pre>", print_r($this,true),"</pre>";
	// }

	// public function setConfig($host,$dbname,$user,$pass)
	// {

	// 	$this->config=[
	// 		'dbname' => $dbname,
	// 		'host' => $host,
	// 		'user' => $user,
	// 		'pass' => $pass
	// 	];
	// }

	// public function connect()
	// {
	// 	$this->db = new  PDO('mysql:host='.$this->config['host'].';dbname='.$this->config['dbname'],$this->config['user'], $this->config['pass']);
	// }

	public function setSalary($tablename,$fieldName,$data,$columnName,$value,$name)
	{
		//print_r($db);
		$qry = <<<qry
UPDATE $tablename Set $fieldName = $data Where $columnName = $value
qry;
		$stmt = $this->db->prepare("$qry");
		$stmt->execute();
		$stmt2 = $this->db->prepare("SELECT * FROM ".$tablename." Where ".$columnName." = ".$value);
		$stmt2->execute();
		$row=$stmt2->fetch();
		$name=$row[$name];
		echo "Assisgned Salary to ".$name;
	}

	public function totalInvestment($tablename,$columname)
	{
		$stmt=$this->db->prepare("SELECT SUM(".$columname.") as Sum from ".$tablename);
		$stmt->execute();
		$row = $stmt->fetch();
		$sum = $row['Sum'];
		//print_r($stmt);
		echo "Total Investment on Organistion is ".$sum;
	}

	public function setRole($tablename,$fieldName,$data,$columnName,$value,$name)
	{
		//$data1=array();
		// foreach ($data as $key => $val) 
		// {
		// 	$data1=implode(',', $val);
		// }
		$stmt=$this->db->prepare("Update ".$tablename." Set ".$fieldName." = '".$data."' Where ".$columnName." = ".$value);
		//print_r($stmt);
		$stmt->execute();
		$stmt2 = $this->db->prepare("SELECT * FROM ".$tablename." Where ".$columnName." = ".$value);
		$stmt2->execute();
		$row=$stmt2->fetch();
		$name=$row[$name];
		echo 'Role Assigned to '.$name;
	}		
	public function totalProfit($field,$field2,$tablename)
	{
		$stmt=$this->db->prepare("SELECT SUM(".$field.") as Sum  From ".$tablename);
		$stmt->execute();
		$row = $stmt->fetch();
		$sum = $row['Sum'];
		$stmt1=$this->db->prepare("SELECT SUM(".$field2.") as Sum From ".$tablename);
		$stmt1->execute();
		$row = $stmt1->fetch();
		$sum2 = $row['Sum'];
		$nprofit=$sum2-$sum;
		if($nprofit<0)
		{
			$nprofit=0;
		}
		echo "Total Profit is ".$nprofit;
	}

	public function attendenece($tablename,$colname,$field2,$value,$name)
	{
		$stmt=$this->db->prepare("SELECT ".$colname." from ".$tablename." Where ".$field2." = ".$value);
		$stmt->execute();
		$row=$stmt->fetch();
		$status=$row[$colname];
		$stmt2 = $this->db->prepare("SELECT * FROM ".$tablename." Where ".$field2." = ".$value);
		$stmt2->execute();
		$row=$stmt2->fetch();
		$name=$row[$name];
		//print_r($stmt2);
		if($status=='P')
		{
			echo $name." is Present";
		}
		else
		{
			echo $name." is Absent";
		}
	}
	
	public function getCityDetails($table1,$table1Value,$table2,$table2Value)
	{
		$stmt=$this->db->prepare("SELECT * FROM ".$table1." INNER JOIN ".$table2." on ".$table1.'.'.$table1Value." = ".$table2.'.'.$table2Value."");
		//print_r($stmt);
		echo'<table border="2" cellspacing="2">
			<tr>
			<th>Name</th>
			<th>Salary</th>
			<th>City</th></tr>';
		$stmt->execute();	
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{	
			echo '<tr>
			<td> '.$row['semp_name'].'</td>
			<td> '.$row['nemp_salary'].'</td>
			<td> '.$row['scity_name'].'</td>
			</tr>';
		}	
		'</table>';
	}

	public function getMaxSalary($tableName,$field)
	{
		$stmt=$this->db->prepare("SELECT MAX(".$field.") as Max FROM ".$tableName."");
		$stmt->execute();
		$row=$stmt->fetch();
		echo "Max Salary is ".$row['Max'];
	}

	public function getMinSalary($tableName,$field)
	{
		$stmt=$this->db->prepare("SELECT MIN(".$field.") as Min FROM ".$tableName."");
		$stmt->execute();
		$row=$stmt->fetch();
		echo "Min Salary is ".$row['Min'];
	}
}
// $obj2=new DataBase();
// $obj2->setConfig('localhost','organisation','root','');
// $obj2->connect();
// $obj = new Organistion();

$obj = new Organistion();
$obj->setConfig('localhost','organisation','root','');
$obj->connect();
$obj->setSalary('tbl_emp','nemp_salary','3030','nemp_id','1','semp_name');
// $obj->totalInvestment('tbl_emp','nemp_salary');
// $obj->setRole('tbl_emp','semp_role','Tester,Developer', 'nemp_id','1','semp_name');
// $obj->totalProfit('nemp_salary','nemp_profit','tbl_emp');
// $obj->attendenece('tbl_emp','semp_attnend','nemp_id',2,'semp_name');
// $obj->getCityDetails('tbl_emp','nemp_id','tbl_city','ncity_emp_id');
// $obj->getMaxSalary('tbl_emp','nemp_salary');
// $obj->getMinSalary('tbl_emp','nemp_salary');
?>