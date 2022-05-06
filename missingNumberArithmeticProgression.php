<?php
/**
 * Find the missing number in shuffled arithmetic progression with common difference of 1
 * ex [1, 2, 4, 6, 3, 7, 8]; //5 is missing
 * The PHP waaaay
 */
function finder(array $arr): array {
    $arrLen = count($arr);
    $fullArr = range(1,  $arrLen + 1);

    return array_diff($fullArr, $arr);
}

var_dump(finder([1, 2, 4, 6, 3, 7, 8])); //5
var_dump(finder([1, 2, 3, 5])); //4

/**
 * The technique of the summation formula.
 * n*(n+1)/2
 */

function summationFinder(array $arr): float
{
    $arrSum = array_sum($arr);
    $fullArrLen = count($arr) + 1;
    $fullArrSum = $fullArrLen * ($fullArrLen + 1) / 2;

    return $fullArrSum - $arrSum;
}

var_dump(summationFinder([1, 2, 4, 6, 3, 7, 8])); //5
var_dump(summationFinder([1, 2, 3, 5])); //4