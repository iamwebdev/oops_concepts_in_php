<?php
interface A
{
	//Define Functions Without their body
	public function setName($param);
	public function getName();
}
class B implements A
{
	public $name;
	public function setName($param)
	{
		$this->name=$param;
	}
	public function getName()
	{
		echo "Interface Program is coded by ".$this->name;
	}
}
$obj=new B();
$obj->setName('Singh');
$obj->getName();
?>