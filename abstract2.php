<?php
abstract class myAbstractClass
{
	public abstract function setName($param);
	public abstract function getName();
}
class A extends myAbstractClass
{
	public $name;
	public function setName($param)
	{
		$this->name=$param;
	}
	public function getName()
	{
		echo $this->name;
	}
}
class B extends A
{
	public function setname($param)
	{
		$this->name=$param;
	}
	public function getName()
	{
		echo $this->name;
	}
}
$obj=new A();
$obj->setName('Amrit');
$obj->getName();
$obj2=new B();
$obj2->setName('Singh');
$obj2->getName();
?>