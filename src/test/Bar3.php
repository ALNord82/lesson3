<?php
namespace src\test;

final class Bar3 extends Foo
{
    protected $c1 = 3;

    public function setC1(int $c1): void
    {
        $this->c1;
    }

    public function getC1(): int
    {
        return $this->c1;

    }
    public function math3($c2)
    {
        echo "математическое действие".$c2=$this->b*$this->c1;
    }
    public function eat()
    {
        echo "TODO: Implement eat() method. eat()";
    }
}