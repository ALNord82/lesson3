<?php
namespace src\test;
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
//должен содержать абстрактную функцию возведения в степень

abstract class Foo
{
    protected $a = 5;
    protected $b = 2;

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

    public function getB(): int
    {
        return $this->b;
    }

    abstract public function eat();
}
