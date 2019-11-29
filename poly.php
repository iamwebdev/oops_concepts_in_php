<?php
interface Human 
{
	public function getName();
	public function setName($name);
}
abstract class Military 
{
 	private $rank;
	public function __construct($rank) 
	{
		$this->rank = $rank;
	}
	public function setRank($rank) 
	{
		$this->rank = $rank;
	}
	public function getRank() 
	{
		return $this->rank;
	}
}
class Soldier extends Military implements Human
{
 	private $name;
	public function __construct($name, $rank) 
	{
		$this->name = $name;
		parent::__construct($rank); # parent::setName($rank);
	}
 	public function setName($name) 
 	{
 		$this->name = $name;
 	}
 public function getName() 
 {
 	return "My name is: " . $this->name . "<br />n";
 }
 public function getRank() 
 {
 	return "My rank is: " . parent::getRank() . "<br />n";;
 }
 public function getFull() 
 {
 	return "I am " . parent::getRank() . " {$this->name}<br />n";
 }
}
$goodSoldier = New Soldier('Thomas', 'Officer');
echo $goodSoldier->getName();
echo $goodSoldier->getRank();
echo $goodSoldier->getFull();
echo "<br/>n";
$goodSoldier->setRank('Colonel');
$goodSoldier->setName('Mustard');
echo $goodSoldier->getName();
echo $goodSoldier->getRank();
echo $goodSoldier->getFull();