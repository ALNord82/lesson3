<?php
namespace src\test;

class Bar11 extends Bar1
{
    public $a11=43;

    public function setA11(int $a11): void
    {
        $this->a11 = $a11;
    }

    public function getA11(): int
    {
        return $this->a11;
    }
    public function math11 ()
    {
        echo "математическое действие".$a111=$this->a1+$this->a11;
    }
    public function math11_2()
    {
        echo  "математическое действие". $a11_2=$this->a+$this->a11;
    }
}