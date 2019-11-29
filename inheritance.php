<?php
class A
{
	public $name;
	public function setName($param)
	{
		$this->name=$param;
	}
	public function getName()
	{
		echo "My Name is ".$this->name;
	}
}
class B extends A
{
	public function setName($param)
	{
		$this->name=$param;
	}
	public function getName()
	{
		echo "Mera Naam ".$this->name.' Hai';
	}
}
$obj=new A();
$obj->setName('Amrit');
$obj->getName();
$obj2=new B();
$obj2->setName('Singh');
$obj2->getName();
?>
