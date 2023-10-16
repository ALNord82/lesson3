<?php
namespace src\test;

class Bar2 extends Foo
{
    protected $b1 = 12;

    public function setB1(int $b1): void
    {
        $this->b1 = $b1;
    }

    public function getB1(): int
    {
        return $this->b1;
    }
    public function math2($b2)
    {
        echo "математическое действие".$b2=$this->b+$this->b1;
    }
    public function eat()
    {
        echo "TODO: Implement eat() method. eat()";
    }
}