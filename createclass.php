<?php
class myClass
{
	//Defining Functions inside Class
	public function name()
	{
		echo"My Name is Amritpal Singh";
	}
	public function job()
	{
		echo"I am Working in OELS as a PHP Web Developer";
	}
}
//Creating a Object Outside Class
$obj= new myClass(); //Always Use new operator for defining Object
$obj->name();
echo'<br>';
$obj->job();
?>