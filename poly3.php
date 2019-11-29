<?php
interface abc
{
	public function display();
}
class A implements abc
{
	public function display()
	{
		echo"I am Class A";
	}
}
class B implements abc
{
	public function display()
	{
		echo"I am CLass B";
	}
}
function show(abc $var)
{
	$var->display();
}
show(new A());
show(new B());
?>