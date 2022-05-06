<?php

/**
 * $arr = [1, 2, 3, 4, 5, 6, 7];
 * rotation = 2;
 * direction = right or left;
 *
 * ex rotateArray($arr, 2, 'left') => [3, 4, 5, 6, 7, 1, 2]
 *    rotateArray($arr, 2, 'right') => [6, 7, 1, 2, 3, 4, 5]
 *
 */
function rotateArray(array $arr, int $rotationCount, string $direction): array
{
    if ($direction == 'left') {
        return rotateArrayLeft($arr, $rotationCount);
    } elseif ($direction == 'right') {
        return rotateArrayRight($arr, $rotationCount);
    }

    return ["error" => "Direction must be either 'left' or 'right'"];

}

function rotateArrayLeft(array $arr, int $rotationCount): array
{
    while ($rotationCount) {
        $value = array_shift($arr);
        array_push($arr, $value);
        $rotationCount--;
    }

    return $arr;

}

function rotateArrayRight(array $arr, int $rotationCount): array
{
    while ($rotationCount) {
        $value = array_pop($arr);
        array_unshift($arr, $value);
        $rotationCount--;
    }

    return $arr;

}


$arr = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [1,2];
$arr3 = [1];
$arr4 = [];
print_r(rotateArrayLeft($arr, 2, 'left')); // [3, 4, 5, 6, 7, 1, 2]
print_r(rotateArrayRight($arr, 2, 'right')); // [6, 7, 1, 2, 3, 4, 5]
print_r(rotateArrayRight($arr2, 1, 'right'));
print_r(rotateArrayRight($arr3, 2, 'right'));
print_r(rotateArrayRight($arr4, 2, 'right'));