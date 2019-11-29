<?php
include 'Org.php';
// namespace Lib;
// use Database;
interface college 
{
	public function addDepartment($tablename,$data);
	public function addCourse($tablename,$data);
	public function registerStudent($tablename,$data);
	public function Apporove($tablename,$fieldname,$value,$columnname,$id);
	public function payMoney($tablename,$data);
	public function getPaymentList($tablename,$field="*");
	public function getPaymentbyStudent($tablename,$id,$value,$fields="*");
}
class A extends Database implements college
{
	public $columns="";
	public $values="";
	public function addDepartment($tablename,$data)
	{
		if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{
				$this->columns .= $key.",";
				$this->values .= "'".$value."',";
			}
			$i = strlen($this->columns);
			$j = strlen($this->values);
			$stmt = $this->db->prepare("INSERT INTO ".$tablename." (".substr($this->columns, 0,$i-1).") VALUES (".substr($this->values, 0,$j-1).")");
			$stmt->execute();
			echo"Department Added Successfully";
		}		
	}
	public function addCourse($tablename,$data)
	{
		if(is_array($data))
		{
			foreach($data as $key => $value)
			{
				$this->columns.=$key.",";
				$this->values.="'".$value."',";
			}
			$i=strlen($this->columns);
			$j=strlen($this->values);
			$stmt=$this->db->prepare("INSERT INTO ".$tablename." (".substr($this->columns,0,$i-1).") values (".substr($this->values,0,$j-1).")");
			$stmt->execute();
			echo"Course Added Successfully";
		}	
	}
	public function registerStudent($tablename,$data)
	{
		if(is_array($data))
		{
			foreach($data as $key => $value)
			{
				$this->columns.=$key.",";
				$this->values.="'".$value."',";
			}
			$i=strlen($this->columns);
			$j=strlen($this->values);
			$stmt=$this->db->prepare("INSERT INTO ".$tablename." (".substr($this->columns,0,$i-1).") values (".substr($this->values,0,$j-1).")");
			$stmt->execute();
			echo"Registered Successfully";
		}	
	}
	public function Apporove($tablename,$fieldname,$value,$columnname,$id)
	{
		$stmt=$this->db->prepare("Update ".$tablename." Set ".$fieldname." = ".$value." where ".$columnname." = ".$id);
		//print_r($stmt);
		if($stmt->execute()==TRUE)
		{
			if($value==0)
			{
				echo'Student Rejected';
			}
			else
			{
				echo 'Student Apporoved';
			}	
		}	
	}
	public function payMoney($tablename,$data)
	{
		if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{
				$this->columns.=$key.",";
				$this->values.="'".$value."',";
			}
			$i=strlen($this->columns);
			$j=strlen($this->values);
			$stmt=$this->db->prepare("INSERT INTO ".$tablename." (".substr($this->columns,0,$i-1).") values (".substr($this->values,0,$j-1).")");
			$stmt->execute();
			echo"Payment Done Successfully";
		}		
	}
	public function getPaymentList($tablename,$field="*")
	{
		if(is_array($field))
		{
			//echo"Arrsasaay";
			$field = implode(",", $field);
		}
		$stmt=$this->db->prepare("Select ".$field." from ".$tablename."");
		$stmt->execute();
		$row=$stmt->fetchAll();
		echo"<pre>",print_r($row,true),"</pre>";
	}
	public function getPaymentbyStudent($tablename,$id,$value,$fields="*")
	{
		if(is_array($fields))
		{
			// echo"YES";
			$fields=implode(",",$fields);
		}
		$stmt=$this->db->prepare("Select ".$fields." from ".$tablename." where ".$id." = ".$value."");
		$stmt->execute();
		//print_r($stmt);
		$row=$stmt->fetch();
		echo"<pre>",print_r($row,true),"</pre>";
	}
	public function setExamTime($tablename,$data)
	{
		if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{
				$this->columns.=$key.",";
				$this->values.="'".$value."',";
			}
			$i=strlen($this->columns);
			$j=strlen($this->values);
			$stmt=$this->db->prepare("INSERT INTO ".$tablename." (".substr($this->columns,0,$i-1).") Values (".substr($this->values, 0,$j-1).")");
			if($stmt->execute()==TRUE)
			{
				echo "Exam Schedule Set";	
			}
		}
	}
	public function getCityDetails($table1,$table1Column,$table2,$table2Column,$fields="*")
	{
		if(is_array($fields))
		{
			echo"yes";
			$fields=implode(',', $fields);
		}
		$stmt=$this->db->prepare("Select ".$fields." From ".$table1." INNER JOIN ".$table2." on ".$table1.'.'.$table1Column .'='. $table2.'.'.$table2Column."");
		print_r($stmt);
		$stmt->execute();
		$row=$stmt->fetchAll();
		echo"<pre>",print_r($row,true),"</pre>";
	}
}
$obj=new A();
$obj->setConfig('localhost','organisation','root','');
$obj->connect();
// $obj->addDepartment('tbl_depatment', ['ndep_name' => 'ECE']);
// $obj->addCourse('tbl_course', ['scou_name' => 'PHP']);
// $obj->registerStudent('tbl_register',['sreg_name' => 'Rakesh']);
// $obj->Apporove('tbl_register','sreg_approval',1,'nreg_id',1);
// $obj->payMoney('tbl_payment',['npay_amount' => '210']);
// $obj->getPaymentList('tbl_payment',['npay_stu_id','npay_amount']);
// $obj->getPaymentbyStudent('tbl_payment','npay_stu_id',1,['npay_id', 'npay_amount']);
// $obj->setExamTime('tbl_exam',['sexam_time' => '9:00 am', 'sexam_date' => '2018-01-01','sexam_sub' => 'TOC']);
// $obj->getCityDetails('tbl_emp','nemp_id','tbl_city','ncity_emp_id',['nemp_id,ncity_emp_id,semp_name,scity_name']);
?>