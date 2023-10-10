<?php


//  Создать функцию принимающую массив произвольной вложенности
// и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
        'foure' => 'foure'
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
function walk_recursive($arr, int $num){
    $i=0;
    foreach ($arr as $value) {
        if (is_array($value)) {
            walk_recursive($value,$num);
        }
        elseif ($i===$num){
            print_r($value);
            print_r(" ");
        }

        $i=$i+1;
    }
}

walk_recursive($firstArr,2);

echo '<br>';
//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
function count_charts($str, $x = false)
{
    if (is_string($str)) {
        $tmp = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($tmp as $c) {
            $chr[$c] = isset($chr[$c]) ? $chr[$c] + 1 : 1;
        }
        return is_bool($x)
            ? ($x ? $chr : count($chr))
            : $chr[$x];}
    else {
        echo 'false';
        return false;
    }
}

$str = "beverly beaver who is brown with a blue belly goes to a birthday party with her pal bob the buffalo";
echo count_charts($str, 'b');

echo '<br>';
//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

$firstArr2 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 31,
        'foure' => 5,
        'five' => 12,
        'six' =>[1,'seven'=>[1,1]]
    ],
];
function array_multisum1(array $arr): float {
    $sum = array_sum($arr);
    //print_r($sum);
    //echo '<br>';
    foreach($arr as $ch) {
        if (is_array($ch))  {
            $sum += array_multisum1($ch);
        } elseif (is_array($ch)) {
            $sum += array_multisum1($ch);
        }
        else  {
            $sum += 0;
        }
    }
    return $sum;
};
echo array_multisum1($firstArr2).'<br>';
//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат
// большего размера размер возвращать в float
function calcFigures($FigureA, $FigureB): float
{
    $area1 = $FigureA * $FigureA;
    $area2 = $FigureB * $FigureB;
    echo "1 квадрат имеет площадь $area1.
            2 квадрат имеет площадь $area2.";
    $area3 = $area1/$area2;
    echo '<br>';
    echo "в квадрат 1 можно вписать  ";
    return $area3;

};

echo calcFigures(18,6);
