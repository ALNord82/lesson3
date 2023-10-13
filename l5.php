<?php
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
//должен содержать абстрактную функцию возведения в степень

class Foo
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
    }


$obj=new Foo;
$obj->setB(8);
var_dump($obj->getB());
$obj->setA(4);
var_dump($obj->getA());

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет
// одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым

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


}
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
}
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
}

$obj1=new Bar1();
print_r($obj1->math(0));
$obj2=new Bar2();
print_r($obj2->math2(0));
$obj3=new Bar3();
print_r($obj3->math3(0));
//var_dump($obj1);

//Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие
//с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса
//и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать
//реализацию абстракции
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

$obj4=new Bar11();
print_r($obj4->math11(0));
print_r($obj4->math11_2(0));
