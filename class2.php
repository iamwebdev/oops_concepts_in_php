<?php
//include 'dbconnect.php';
class myClass2
{
	public function display()
	{
		// $stmt=$db->prepare("Select * from tbl_user");
		// $stmt->execute();
		// $data=$stmt->fetch();
		$var="My Name is Amrit";
		$var1="and I am from Punjab";
		echo $var.' '.$var1;
	}
}
$obj=new myClass2();
$obj->display();
//echo $var;
?>