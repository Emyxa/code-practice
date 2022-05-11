<?php

/**
 * $array = [-2, 3, 4, 7, 8, 9, 11, 13];
 * $needle = 11;
 * binarySearch($needle, $array); // 6
 * Return if element exists and its index
 *  Complexity is O(log n) - logarithmic - Excellent
 **/

// array must be sorted or use sort();
$array = [-2, 3, 4, 7, 8, 9, 11, 13];

/**
 * Iterative way
 */
function binarySearch(int $needle, array $array): string
{
    $leftIndex = 0;
    $rightIndex = count($array) - 1;

    while ($leftIndex <= $rightIndex) {
        $mid = abs(floor(($leftIndex + $rightIndex) / 2));

        if ($array[$mid] === $needle) {
            return "Element $needle found on position $mid \n";
        } // search to the left.
        elseif ($needle < $array[$mid]) {
            $rightIndex = $mid - 1;
        } // search to the right.
        elseif ($needle > $array[$mid]) {
            $leftIndex = $mid + 1;
        }

    }

    return "Element $needle not found inside the array \n";

}

echo binarySearch(11, $array);
echo binarySearch(20, $array);

/**
 * Recursive way
 **/
function binarySearchRecursive(int $needle, array $array, int $leftIndex = 0, int $rightIndex = 0): string
{
    if (!$rightIndex) {
        $rightIndex = count($array) - 1;
    }


    if ($leftIndex <= $rightIndex) {
        $mid = abs(floor(($leftIndex + $rightIndex) / 2));
    } else {
        return "Element $needle not found inside the array \n";
    }

    if ($array[$mid] === $needle) {
        return "Element $needle found on position $mid \n";
    }

    // search to the left.
    if ($needle < $array[$mid]) {
        return binarySearchRecursive($needle, $array, $leftIndex, $mid - 1);
    }

    // search to the right.
    if ($needle > $array[$mid]) {
        return binarySearchRecursive($needle, $array, $mid + 1, $rightIndex);
    }
}

echo binarySearchRecursive(11, $array);
echo binarySearchRecursive(20, $array);