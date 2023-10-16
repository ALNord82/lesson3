<?php
namespace src\test;
class Bar1 extends Foo
{

    protected $a1 = 13;

    public function setA1(int $a1): void
    {
        $this->a1 = $a1;
    }

    public function getA1(): int
    {
        return $this->a1;
    }
    public function math($a2)
    {
        echo "математическое действие".$a2=$this->a+$this->a1;
    }
    public function eat()
    {
     echo "TODO: Implement eat() method. eat()";
    }
}