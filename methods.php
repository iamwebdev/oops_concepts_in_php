<?php
class A
{
    public function publicFunction()
    {
        echo "I am Public Function";
    }
    private function privateFunction()
    {
        echo "I am Private Function";
    }
    protected function protectedFunction()
    {
        echo "I am Protected Function";
    }
    function access()
    {
        $this->publicFunction();
        $this->privateFunction();
        $this->protectedFunction();
    }
}
$a= new A();
// $a->publicFunction();
// $a->privateFunction();
// $a->protectedFunction();
// $a->access();
class B extends A
{
    function access2()
    {
        $this->publicFunction();
        // $this->privateFunction();
        $this->protectedFunction();
    }
}
$b=new B();
// $b->publicFunction();
// $b->protectedFunction();
// $b->privateFunction();
// $b->access2();
class C extends B
{
    function access3()
    {
        $this->publicFunction();
        // $this->privateFunction();
        $this->protectedFunction();
    }
}
$c=new C();
// $c->publicFunction();
// $c->privateFunction();
// $c->protectedFunction();
$c->access3();
?>