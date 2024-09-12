<?php
    include_once('test.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test 2</title>
</head>
<body>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию divisible_by_three(int $max, int $min): array, которая формирует убывающий массив от $max и до $min из чисел, которые делятся на 3 без отстатка. В тестах проверьте что первый, последний и любой некрайний элемент списка действительно делятся на 3. Например для three_devided_range(1002, 0) вернет массив [1002, 999, ... 0]
        </h3>
        <p class="task__res">
            Результат выполнения функции divisible_by_three($max, int $min),
            <br>
            где $max - 102, $min - 0,
            <br>
            т.к массив от 1002 до 0 слишком большой я взял от 102 до 0:
        </p>
        <p class="task__output">
            <?php print_r(divisible_by_three(102, 0)); ?> 
        </p>
    </div>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию count_even(array $arr): int, которая считает количество четных чисел в массиве и возвращает их количество. В массиве [1, 2, 3] - только 1 четный элемент, функция вернет 1.
        </h3>
        <p class="task__res">
            Результат выполнения функции count_even($arr),
            <br>
            где $arr - [1, 2, 3]:
        </p>
        <p class="task__output">
            <?php echo count_even([1, 2, 3]) ?>
        </p>
    </div>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию min_even(array $arr): int, Найдите наименьший четный(по значению) элемент массива. В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.
        </h3>
        <p class="task__res">
            Результат выполнения функции min_even($arr),
            <br>
            где $arr - [1, 2, 3, 4]:
        </p>
        <p class="task__output">
            <?php echo(min_even([1, 2, 3, 4])); ?>
        </p>
    </div>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию min_sum_elements(array $arr): array, которая возвращает два соседних элемента, сумма которых минимальна. В массиве [1, 2, 3, 4] это элементы [1, 2].
        </h3>
        <p class="task__res">
            Результат выполнения функции min_sum_elements($arr),
            <br>
            где $arr - [1, 2, 3, 4]:
        </p>
        <p class="task__output">
            <?php print_r(min_sum_elements([1, 2, 3, 4])); ?>
        </p>
    </div>
</body>
</html>
