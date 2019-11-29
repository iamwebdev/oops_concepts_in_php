<?php
class myClass
{
	public $name;
	public function setName($parameter)
	{
		$this->name=$parameter;
	}
	public function getName()
	{
		echo "My Name is ".$this->name;
	}
}
$obj=new myClass();
$obj->setName('Amrit');
$obj->getName();
?>