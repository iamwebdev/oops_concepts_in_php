<?php
// echo phpinfo();
class A
{
    const PUBLIC_CONSTANT = "I am Public Constant";
    private const PRIVATE_CONSTANT="I am Private Constant";
    protected const PROTECTED_CONSTANT="I am Protected Constant";
}
// $a=new A();
 echo A::PUBLIC_CONSTANT;