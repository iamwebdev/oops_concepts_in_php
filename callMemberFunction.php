<?php
class MemberFunction
{
	//Defining Member Vairales Using Var Keyward
	var $wrestler;
	var $title;
	function setWrestler($parameter,$parameter2)
	{
		//To Access Member Variable Always use This Operator
		$this->wrestler=$parameter;
		$this->title=$parameter2;
	}
	function getWrestler()
	{
		echo $this->wrestler."<br/>";
		echo $this->title."</br>";
	}
	// function setTitle($parameter)
	// {
	// 	$this->title=$parameter;
	// }
	// function getTitle()
	// {
	// 	echo $this->title."<br/>";
	// }
}
//Single Class Can have Multiple Objects
$brock=new MemberFunction();
$cena=new MemberFunction();
$kane=new MemberFunction();
$brock->setWrestler('Brock Lesnar','WWE Champion');
$cena->setWrestler('John Cena','World Heavy Weight Champion');
$kane->setWrestler('Kane','Universal Champion');
// $brock->setTitle('WWE Champion');
// $cena->setTitle('');
// $kane->setTitle('Universal Champion');
$brock->getWrestler();
$cena->getWrestler();
 $kane->getWrestler();
// $brock->getTitle();
// $cena->getTitle();
// $kane->getTitle();
?>