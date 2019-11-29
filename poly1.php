<?php
interface Shape
{
	public function name();
}

class Circle implements Shape 
{
	public function name()
 	{
		echo "I am a circle";
	}
}

class Triangle implements Shape 
{
	public function name() 
	{
		echo "I am a triangle";
	}
}

function test(Shape $shape) 
{
	$shape->name();
}

test(new Circle()); // I am a circle
test(new Triangle()); // I am a triangl
?>