<?php
class abc
{
	public static $var="Hello";
	public function def()
	{
		echo self::$var;
	}
}
print abc::$var;
$obj=new abc();
$obj->def();
?>
