<?php
interface arthimetic
{
	//public $a=3,$b=1,$c;
	public function calculate($a,$b);
}
class add implements arthimetic
{
	//public $a=3,$b=1,$c;
	public function calculate($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$c=$a+$b;
		echo"Addition is ". $c;
	} 
}
class sub implements arthimetic
{
	//public $a=3,$b=1,$c;
	public function calculate($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$c=$a-$b;
		echo "Substraction is ".$c;
	}
}
function results(arthimetic $var)
{
	$var->calculate($a=4,$b=1);
}
results(new add());
results(new sub());
?>