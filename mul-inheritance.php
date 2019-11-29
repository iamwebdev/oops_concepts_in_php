<?php
class A
{
	public function myName()
	{
		echo "My Name is Amrit";
	}
}
class B extends A
{
	public function myState()
	{
		echo"I am living in my State Punjab";
	}
}
class c extends B
{
	public function myCountry()
	{
		echo"India is my Country";
	}
	public function all()
	{
		echo $this->myName();
		echo $this->myState();
		echo $this->myCountry();
	}
}
$obj=new C();
$obj->all();

?>