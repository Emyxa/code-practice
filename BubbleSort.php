<?php

/**
 * Compare executive items and swap them
 * Complexity is quadratic O(n²) - horrible as per https://www.bigocheatsheet.com/
 *
 * Original Array
[1, 10, 23, 50, 4, 9, -4]

Sorted Array
-4 1 4 9 10 23 50
 */

function bubbleSort(array $array): array
{
    $n = count($array);
    // do n iterations
    for ($iteration = 1; $iteration < $n; $iteration++) {
        // iterate the array's index
        for ($index = 0; $index < $n - 1; $index++) {
            if ($array[$index] > $array[$index + 1]) {
                // swap the elements
                $first = $array[$index];
                $second = $array[$index + 1];
                $array[$index] = $second;
                $array[$index + 1] = $first;
                print_r($array);
            }
        }
    }

    return $array;
}

bubbleSort([1, 10, 23, 50, 4, 9, -4]);