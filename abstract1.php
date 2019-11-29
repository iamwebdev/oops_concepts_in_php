<?php
abstract class abc
{
	public abstract function add($a,$b); 
}
class def extends abc
{
	public $a,$b,$c;
	public function add($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$c=$a+$b;
		echo"Addition ".$c;
	}
}
$obj=new def();
$obj->add(4,5);
?>