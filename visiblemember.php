<?php

class A
{
    public $public="I am Public Variable";
    private $private="I am Private Variable";
    protected $protected="I am Protected Variable";
    public function access()
    {
        echo $this->public;
        echo $this->private;
        echo $this->protected;
    }
}
$a=new A();
// echo $a->public;
// echo $a->private;
// echo $a->protected;
// $a->access();
class B extends A
{
    public function access2()
    {
        echo $this->public;
        // echo $this->private;
        echo $this->protected;
    }
}
$b=new A();
// echo $b->public;
// $b->private;
// echo $b->protected;
$b->access();
?>