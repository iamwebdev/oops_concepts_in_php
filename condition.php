<?php
class display
{
	public function greater()
	{
		if(1>2)
		{
			echo "First Statement";
		}
		else
		{
			echo"Second Statement";
		}		
	}
	
}
$obj=new display();
	$obj->greater();
?>