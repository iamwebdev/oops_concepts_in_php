<?php
class A 
{
	public function grandfatherage()
	{
		return " is 80";
	}
}
class B extends A
{
	public function fatherage()
	{
		return "is 40";
	}
}
class C extends B
{
	public function sonage()
	{
		return " is 20";
	}
	public function myHistory()
	{
		echo "Grandfather".$this->grandfatherage();
		echo "Father".$this->fatherage();
		echo "Son".$this->sonage();
	}
}
$obj=new c();
$obj->myHistory();
?>