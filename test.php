<?php

// assert(true);
// assert(false);

function divisible_by_three(int $max, int $min): array
{
    $newArr = [];
    for($i = 0; $i <= $max; $i++) {
        if($i % 3 == 0) {               // наполняю массив теми числами, которые делятся на 3 без остатка
            $newArr[] = $i;
        }
    }
    $newArr = array_reverse($newArr);   // переворачиваю массив
    return $newArr;
}
assert(divisible_by_three(12, 0) == [12, 9, 6, 3, 0]);



function count_even(array $arr): int
{
    $i = 0;
    foreach($arr as $key => $val) {
        if($val % 2 == 0) {
            $i++;
        }
    }
    return $i;
}
assert(count_even([1, 2, 3]) == 1);



function min_even(array $arr): int
{
    asort($arr); // на всякий случай сортирую массив в порядке возрастания
    $min = 0;
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 == 0) {
            $min = $arr[$i];
            break;
        }
    }
    return $min;
}
assert(min_even([1, 2, 3, 4]) == 2);



function min_sum_elements(array $arr): array
{
    asort($arr);                    // сортирую массив в порядке возрастания
    $firstEl = array_shift($arr);   // достаю первый (самый маленький элемент) массива
    asort($arr);
    $secondEl = array_shift($arr);
    $newArr = [];
    array_push($newArr, $firstEl, $secondEl);

    return  $newArr;

}
assert(min_sum_elements([1, 2, 3, 4]) == [1, 2] );