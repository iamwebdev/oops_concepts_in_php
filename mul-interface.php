<?php
interface A
{
	public function setName($param);
}
interface B extends A
{
	public function getName();
}
class C implements B
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
$obj=new C();
$obj->setName('Amrit');
$obj->getName();
?>