<?php
/**
 * Maximum difference between two array elements
 * arr = [3, 2, 8, 6, 4, 10, 1]
 * maxDifference($arr) // 9
 */

function maxDifference(array $arr): int
{
 $maxElement = max($arr);
 $minElement = min($arr);
 return $maxElement - $minElement;
}
header("Content-Type: text/plain");
echo maxDifference([3, 2, 8, 6, 4, 10, 1]);