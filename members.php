<?php
// class A
// {
// 	public $var="Public";
// 	private $var2="Private";
// 	protected $var3="Protected";
// 	// function Abc()
// 	// {
// 	// 	echo $var2;
// 	// 	echo $var3;
// 	// 	echo $var;
// 	// }
// }
// class B Extends A
// {

// }
// $obj=new B();
// echo $obj->var;
// echo $obj->var2;
// echo $obj->var3;
// $obj->Abc();

class A
{
    public $var = 'Public';
    protected $var2 = 'Protected';
    private $var3 = 'Private';
    function Abc()
    {
        echo $this->var2;
        echo $this->var3;
    }
}
class B Extends A
{

}
// $obj =new A();
// echo $obj->Abc();
// $obj=new B(); 
// echo $obj->var; 
// $obj->Abc(); 

class C
{
	private function test()
	{
		// echo "Test Function";
	}
	public function access()
	{
		$this->test();
		// echo"I am Going to Access Private Function";
	}
}
class D Extends C
{
	protected function test2()
	{
		echo"Protected Function";
	}
	public function access2()
	{
		$this->test2();
		// echo"Protected Function Going to Access";
	}
}
$object=new C();
$object->access();
$object=new D();
$object->access2();
// $object->test2();
// class LockedGate
// {
//     private function open()
//     {
//         return 'Private Function';
//     }
// }

// $object = new LockedGate();
// $reflector = new ReflectionObject($object);
// $method = $reflector->getMethod('open');
// $method->setAccessible(true);
// echo $method->invoke($object);
?>