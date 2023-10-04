<?php
//порахувати длину масиву
//
//перемістити перші 4 элементи масиву до кінця масиву
//
//отримати суму 4,5,6 елемента
echo "Завдання <br>
- порахувати длину масиву <br>
- перемістити перші 4 элементи масиву до кінця масиву  <br>
- отримати суму 4,5,6 елемента <br> 
 масив  [1, 2, 3, 7, 31, 4, 1, 8, 6]";
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo '<br>';
echo '<br>'. "Рішення";
echo '<br>';
echo '<br>'."- длина = ".(count($arr));
array_push($arr, $arr[0], $arr[1], $arr[2], $arr[3]);
echo '<br>';
echo '<br>'."- перемістити перші 4 элементи масиву до кінця масиву ".'<pre>';
print_r($arr);
echo '</pre>';
echo '<br>'. "- отримати суму 4,5,6 елемента";
$sum = $arr[3]+$arr[4]+$arr[5];
    echo '<br>'."- cума ".$sum;
    echo '<br>'."Завдання <br> 
-знайти усі елементи, які відсутні у першому масиві і присутні у другому <br>    
-знайти усі елементи, які відсутні у другому масиві і присутні у першому <br>
-знайти усі елементы значення якіх співпадают <br> 
-знайти усі елементы значення якіх  відрізняеться <br>
['one' => 1,'two' => 2,'three' => 3,'foure' => 5,'five' => 12,] <br>
['one' => 1,'seven' => 22,'three' => 32,'foure' => 5,'five' => 13,'six' => 37,]";
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
echo '<br>'. "Рішення";
echo '<br>';
$result = array_diff($secondArr, $firstArr);
echo "-";
print_r ($result);
$result1 = array_diff($firstArr, $secondArr);
echo '<br>';
echo "-";
print_r ($result1);
echo '<br>'."-";
$result2 = array_intersect($secondArr, $firstArr);
print_r($result2);
echo '<br>'."-";
$result3 = array_diff($firstArr, $secondArr);
$result4 = array_diff($secondArr, $firstArr);
print_r($result3);
print_r($result4);
echo '<br>'."Завдання <br> 
- отримати усі другі елементи вложених масивів <br>
- отримати загальну кількість елементів у масиві <br>
- отримати суму усіх значень у масиві <br>
['one' => 1,'two' => ['one' => 1,'seven' => 22,'three' => 32,],'three' => ['one' => 1,'two' => 2,],'foure' => 5,'five' => ['three' => 32,'foure' => 5,'five' => 12,],]";
echo '<br>';
$firstArr = [
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
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];