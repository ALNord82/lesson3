<?php
namespace src\test;

class Bar111 extends Bar1
{
    public $a111=33;

    public function setA111(int $a111): void
    {
        $this->a111 = $a111;
    }

    public function getA111(): int
    {
        return $this->a111;
    }
}