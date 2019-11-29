<?php
interface abc
{
	public function add($a,$b);
}
interface def extends abc
{
	public function mul($a,$b);
}
class qwerty implements def
{
	public $a;
	public $b;
	public $c;
	public function add($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$c=$a+$b;
		echo "Addition of Two Numbers is ".$c;
	}
	public function mul($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$c=$a*$b;
		echo"Multiplication of Two Numbers is ".$c;
	}
}
$obj=new qwerty();
$obj->add(1,2);
$obj->mul(1,2);
?>