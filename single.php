<?php
class base
{
	public function first($string)
	{
		echo "Hi"."$string";
	}
}
class derived extends base
{
	public function second($string)
	{
		echo "Han"."$string";
	}
}
$obj=new base();
$obj2=new derived();
$obj->first("AMrit");
$obj2->second("AMee");   
?>