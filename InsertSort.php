<?php

/**
 * Complexity is quadratic O(n²) - horrible as per https://www.bigocheatsheet.com/
 *
 * Original Array
[10, 1, 23, 50, 4, 9, -4]

Sorted Array
-4 1 4 9 10 23 50
 */

function insertSort(array $array): array
{
    $n = count($array);

    // first element is considered sorted
    for($i = 1; $i < $n; $i++){
        // first unsorted element
        $firstUnsorted = $array[$i];
        $previousElement = $i - 1;
        // while did not reached end of array compare firstUnsorted with previous.
        while($previousElement >= 0 && $array[$previousElement] >  $firstUnsorted){
            //move elemeent to the right
            $array[$previousElement + 1 ] = $array[$previousElement];
            $previousElement--;
        }
        // swap with unsorted
        $array[$previousElement + 1 ] = $firstUnsorted;
    }

    return $array;
}

insertSort([10, 1, 23, 50, 4, 9, -4]);