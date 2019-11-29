<?php
// class abc
// {
// 	public $a,$b,$c;
// 	function __construct($a,$b)
// 	{
// 		$this->a=$a;
// 		$this->b=$b;
// 	}	
// 	public function add()
// 	{
// 		$this->a=$a;
// 		$this->b=$b;
// 		$c=$a+$b;
// 	}
// }
// $obj=new abc(1,2);
// $obj->add();	
class Books
{
function __construct( $par1, $par2 ) {
   $this->title = $par1;
   $this->price = $par2;
}
$physics = new Books( "Physics for High School", 10 );
$maths = new Books ( "Advanced Chemistry", 15 );
$chemistry = new Books ("Algebra", 7 );
}
/* Get those set values */
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();
?>