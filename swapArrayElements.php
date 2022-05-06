<?php

/**
 * $arr1 = [1, 2, 3, 4, 5, 6];
 * $arr2 = [1, 2, 3, 4, 5, 6, 7];
 *
 *
 * swapArray($arr1) => [6, 5, 4, 3, 2, 1];
 * swapArray($arr2) => [7, 6, 5, 4, 3, 2, 1];
 * First the PHP way.
 */
function swapArrayPhpWay(array $arr)
{
    $reversedArray = array_reverse($arr);
    // $arr becomes the keys and reversed array becomes the values.
    $swapedArray = array_combine($arr, $reversedArray);
    // Reindex final array.
    $swapdeArray = array_values($swapedArray);

    return $swapedArray;
}

$arr1 = [1, 2, 3, 4, 5, 6];
$arr2 = [1, 2, 3, 4, 5, 6, 7];
print_r(swapArrayPhpWay($arr1));
print_r(swapArrayPhpWay($arr2));


/*
 * Working with arrays way - no PHP functions
 */

function swapArrayNoFunctions(array $arr): array {
    $length = count($arr);
    // duplicate in a temp array
    $tempArr = $arr;
    $firstIndex = 0;
    $lastIndex = $length - 1;
    // As long as they are not equal we are not in the middle
    while ($lastIndex > $firstIndex){
        $tempArr[$lastIndex] = $arr[$firstIndex];
        $tempArr[$firstIndex] = $arr[$lastIndex];
        $firstIndex++;
        $lastIndex--;
    }

    return $tempArr;
}
print_r(swapArrayNoFunctions($arr1));
print_r(swapArrayNoFunctions($arr2));